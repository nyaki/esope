<?php

// Check if CAS web service is activated
$enable_ws_auth = elgg_get_plugin_setting('enable_ws_auth', 'elgg_cas');
if ($enable_ws_auth != 'yes') {
	register_error("CAS auth for webservices is not enabled. Please contact an admin.");
	forward();
};

// Mobile auth support : new functions for temp data caching + some changes in the auth process
function elgg_cas_register_guid($guid, $token, $username) {
	$cache = elgg_get_system_cache();
	$cache->save($guid . 'token', $token);
	$cache->save($guid . 'username', $username);
}

function elgg_cas_remove_guid($guid) {
	$cache = elgg_get_system_cache();
	$cache->delete($guid . 'token');
	$cache->delete($guid . 'username');
}

function elgg_cas_get_guid_token($guid) {
	$cache = elgg_get_system_cache();
	return $cache->load($guid . 'token');
}

function elgg_cas_get_guid_username($guid) {
	$cache = elgg_get_system_cache();
	return $cache->load($guid . 'username');
}


if (isset($_GET['read'])) {
	$token = elgg_cas_get_guid_token($_GET['guid']);
	$username = elgg_cas_get_guid_username($_GET['guid']);
	die($token . ',' . $username);
} else if (isset($_GET['remove'])) {
	elgg_cas_remove_guid($_GET['guid']);
	die('OK');
}


$title = elgg_echo('elgg_cas:title');
$content = '';

global $cas_client_loaded;

elgg_load_library('elgg:elgg_cas');
//require_once elgg_get_plugins_path() . 'elgg_cas/lib/elgg_cas/config.php';
$cas_host = elgg_get_plugin_setting('cas_host', 'elgg_cas');
$cas_context = elgg_get_plugin_setting('cas_context', 'elgg_cas', '/cas');
$cas_port = (int) elgg_get_plugin_setting('cas_port', 'elgg_cas', 443);
$cas_server_ca_cert_path = elgg_get_plugin_setting('ca_cert_path', 'elgg_cas');



// Use CAS functions only if we have enough parameters
//if (!empty($cas_host) && !empty($cas_port) && !empty($cas_context)) {}

// Initialize phpCAS
if (!$cas_client_loaded) {
	// Uncomment to enable debugging
	phpCAS::setDebug();
	phpCAS::client(CAS_VERSION_2_0, $cas_host, $cas_port, $cas_context);
	$cas_client_loaded = true;
	// For production use set the CA certificate that is the issuer of the cert
	// For quick testing you can disable SSL validation of the CAS server.
	// Certificat : le plus flexible = activé ssi configuré seulement
	if (!empty($cas_server_ca_cert_path)) {
		phpCAS::setCasServerCACert($cas_server_ca_cert_path);
	} else {
		phpCAS::setNoCasServerValidation();
	}
}


// logout if desired
if (isset($_REQUEST['logout'])) {
	phpCAS::logout();
}


if (elgg_is_logged_in()) {
	// Si on est déjà identifié sans CAS, inutile de se re-logguer
	$logged = elgg_get_logged_in_user_entity();
	if (phpCAS::isAuthenticated()) {
		$elgg_username = phpCAS::getUser();
		elgg_cas_register_guid($_GET['guid'], create_user_token($elgg_username), $elgg_username);
		header('Location: iris://login');

		$user = get_user_by_username($elgg_username);
		if ($user->guid == $logged->guid) { $user->is_cas_logged = true; }
		$content .= '<p>' . elgg_echo('elgg_cas:logged:cas', array($user->username)) . '</p>';
		$content .= '<p>' . elgg_echo('elgg_cas:confirmchangecaslogin', array($logged->username, $logged->name)) . '</p>';
	} else {
		$content .= '<p>' . elgg_echo('elgg_cas:logged:nocas', array($user->username)) . '</p>';
		$content .= '<p>' . elgg_echo('elgg_cas:confirmcaslogin', array($logged->username, $logged->name)) . '</p>';
	}
	// Affichage
	$content = elgg_view_layout('one_column', array('content' => $content, 'sidebar' => false));
	echo elgg_view_page($title, $content);
	exit;
}



// force CAS authentication
// Note : will fail with OpenSSL v0.9.8
// Patch : must be applied in Request/CurlRequest and CurlMultiRequest :
// => add curl_setopt($ch, CURLOPT_SSLVERSION,3); before calling curl
phpCAS::forceAuthentication();

// at this step, the user has been authenticated by the CAS server
// and the user's login name can be read with phpCAS::getUser().


// A ce stade, l'identification via CAS est OK
$elgg_username = phpCAS::getUser();
$user = get_user_by_username($elgg_username);
elgg_cas_register_guid($_GET['guid'], create_user_token($elgg_username), $elgg_username);

// Si on est identifié avec un autre compte avant de passer par CAS, on prévient et on arrête la procédure
if (elgg_is_logged_in()) {
	$logged = elgg_get_logged_in_user_entity();
	if ($user->guid != $logged->guid) {
		register_error(elgg_echo('elgg_cas:alreadylogged', array($user->username, $user->name, $logged->username, $logged->name)));
		forward('iris://login');
	}
}

// Si on est bien authentifié via CAS, login
if (elgg_instanceof($user, 'user')) {
	if (!$user->isBanned()) {
		// CAS is valid, update metadata and finally log user in !
		$user->is_cas_logged = true;
		system_message(elgg_echo('elgg_cas:login:success'));
		// MAJ profil via LDAP
		if (elgg_is_active_plugin('ldap_auth')) {
			elgg_load_library("elgg:ldap_auth");
			ldap_auth_check_profile($user);
		}
		if (login($user)) {
			forward('iris://login');
			// Ou on peut aussi afficher un message...
			$content .= '<p>' . elgg_echo('elgg_cas:login:success') . '</p>';
		} else { $content .= elgg_echo('elgg_cas:loginfailed'); }
	} else { $content .= elgg_echo('elgg_cas:user:banned'); }
} else {
	// No existing account : CAS registration if enabled
	// Si le compte n'existe pas encore : création
	if (elgg_is_active_plugin('ldap_auth')) {
		$casregister = elgg_get_plugin_setting('casregister', 'elgg_cas', false);
		if ($casregister == 'yes') {
			elgg_load_library("elgg:ldap_auth");
			$elgg_password = generate_random_cleartext_password();
			// Création du compte puis MAJ avec les infos du LDAP
			$user = ldap_auth_create_profile($elgg_username, $elgg_password);
			if (elgg_instanceof($user, 'user')) {
				forward('iris://login');
			}
		} else {
			$content .= elgg_echo('elgg_cas:user:notexist');
		}
	} else {
		$content .= elgg_echo('elgg_cas:user:notexist');
	}
}

$content = elgg_view_layout('one_column', array('content' => $content, 'sidebar' => false));
// Pas de rendu dans la page en cas d'inclusion du script (autologin)
if (!$cas_login_included) echo elgg_view_page($title, $content);

