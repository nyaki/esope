<?php
global $CONFIG;
$guid = get_input("guid");
$export_subpages = get_input("subpages", 'yes');
if ($export_subpages != 'yes') $export_subpages = false;
$export_allpages = get_input("allpages", 'no');
if ($export_allpages != 'yes') $export_allpages = false;

// @TODO : this is much too long - requires reviewing

$page = get_entity($guid);
if (elgg_instanceof($page, 'object', 'page_top') || elgg_instanceof($page, 'object', 'page')) {
	//elgg_load_library('elgg:pages');
	set_time_limit(30); // We should not need more than 30 seconds for an HTML page export
	$content = "";
	
	// Sommaire
	$summary = '<h3>' . elgg_echo('theme_inria:summary'). '</h3>';
	
	if ($export_subpages) {
		// Export des sous-pages, forcément avec sommaire
		
		// Export de tout le wiki du container, ou des pages sous-jacentes
		if ($export_allpages == 'yes') {
			// On regarde où est publié ce wiki..
			$container = $page->getContainerEntity();
			// Listing des pages du container
			$toppages = esope_get_top_pages($container);
		} else {
			$container = $page;
			$toppages[] = $page;
		}
		// ..et on change le nom en rapport
		$filename = elgg_get_friendly_title($CONFIG->site->name) . '_' . elgg_get_friendly_title($container->name) . '_' . date("YmdHis", time());
		
		// Envoi du fichier - dès que possible
		header("Content-type: text/html; charset=utf-8");  
		header("Cache-Control: no-store, no-cache");  
		header('Content-Disposition: attachment; filename="'.$filename.'.html"');
		?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title><?php echo $filename; ?></title>
		</head>
		<body>
		
		<?php
		// Sommaire
		if ($toppages) foreach ($toppages as $parent) {
			$summary .= '<li>' . elgg_view("output/url", array("text" => $parent->title, "href" => "#page_" . $parent->guid, "title" => $parent->title));
			$summary .= esope_list_subpages($parent, 'internal', false);
			$summary .='</li>';
		}
		echo '<div class="elgg-output"><ul>' . $summary . '</ul></div><hr />';
		
		// Contenu
		if ($toppages) foreach ($toppages as $parent) {
			echo '<h3>' . elgg_view("output/url", array("text" => $parent->title, "href" => false, "name" => "page_" . $parent->guid)) . '</h3>' . elgg_view("output/longtext", array("value" => $parent->description));
			echo esope_list_subpages($parent, false, true);
			echo '<p style="page-break-after:always;"></p>';
		}
		?>
		</body>
		</html>
		<?php
		
	} else {
		// Sinon export de la page courante seulement
		$filename = elgg_get_friendly_title($CONFIG->site->name) . '_' . elgg_get_friendly_title($page->title) . '_' . date("YmdHis", time());
		$content .= '<h3>' . elgg_view("output/url", array("text" => $page->title, "href" => false, "name" => "page_" . $page->guid)) . '</h3>' . elgg_view("output/longtext", array("value" => $page->description)) . '<p style="page-break-after:always;"></p>';
		
		// Envoi du fichier
		header("Content-type: text/html; charset=utf-8");  
		header("Cache-Control: no-store, no-cache");  
		header('Content-Disposition: attachment; filename="'.$filename.'.html"');
		?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title><?php echo $filename; ?></title>
		</head>
		<body>
			<?php echo $content; ?>
		</body>
		</html>
		<?php
	}
	
	// Pour rendu dans iframe
	//$content = elgg_render_embed_content($content, $title, 'iframe');
	
	exit;
	
} else {
	register_error(elgg_echo("pages:export:error:invalidguid"));
}

forward(REFERER);

