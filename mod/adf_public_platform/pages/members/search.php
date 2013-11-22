<?php
/**
 * Members index
 *
 */

global $CONFIG;
$num_members = get_number_users();

$title = elgg_echo('members');

$content = '';

//elgg_pop_breadcrumb();
elgg_push_breadcrumb(elgg_echo('search'));

// Prepare JS script for forms
$ts = time();
$token = generate_action_token($ts);
$action_token = '?__elgg_token=' . $token . '&__elgg_ts=' . $ts;
$action_base = $CONFIG->url . 'action/esope/';
$esope_search_url = $action_base . 'esearch' . $action_token;

$content .= '<script>
var formdata;
function esope_search(){
	//$("body").addClass("esope-search-wait");
	formdata = $("#esope-search-form").serialize();
	$.post("' . $esope_search_url . '", formdata, function(data){
		$("#esope-search-results").html(data);
		//$("body").removeClass("esope-search-wait");
	});
}
</script>';


// Préparation du formulaire : on utilise la config du thème + adaptations spécifiques pour notre cas
// Note : on peut récupérer les résultats sur cette page plutôt qu'en AJAX, si on veut...

$search_action = "javascript:esope_search();";
// Should be an array, so clear blanks then make it an array
$metadata_search_fields = elgg_get_plugin_setting('metadata_search_fields', 'adf_public_platform');
if (!empty($metadata_search_fields)) {
	$metadata_search_fields = str_replace(' ', '', $metadata_search_fields);
	$metadata_search_fields = explode(',', $metadata_search_fields);
}
$metadata_search = '';

// Build metadata search fields
if (elgg_is_active_plugin('profile_manager')) {
	// Metadata options fetching will only work if those are stored somewhere
	foreach ($metadata_search_fields as $metadata) {
		$name = "metadata[$metadata]";
		$metadata_search .= '<p><label>' . ucfirst(elgg_echo($metadata)) . ' ' . esope_make_search_field_from_profile_field(array('metadata' => $metadata, 'name' => $name)) . '</label></p>';
	}
} else {
	// We'll rely on text inputs then
	foreach ($metadata_search_fields as $metadata) {
		$name = "metadata[$metadata]";
		$metadata_search .= '<p><label>' . ucfirst(elgg_echo($metadata)) . ' <input type="text" name="' . $name . '" /></label></p>';
	}
}

$profiletypes_opt = esope_get_profiletypes(); // $guid => $title
$profiletypes_opt[] = '';
$profiletypes_opt = array_reverse($profiletypes_opt, true); // We need to keep the keys here !


$search_form = '<form id="esope-search-form" method="post" action="' . $search_action . '">
	' . elgg_view('input/securitytoken') . '
	<fieldset>
	<p><label>' . elgg_echo('esope:fulltextsearch') . ' <input type="text" name="q" value="" /></label></p>
	' . elgg_view('input/hidden', array('name' => 'entity_type', 'value' => 'user')) . '
	<p><label>Role ' . elgg_view('input/dropdown', array('name' => 'metadata[custom_profile_type]', 'value' => '', 'options_values' => $profiletypes_opt)) . '</label></p>
	' . $metadata_search . '
	<div class="clearfloat"></div>
	<input type="submit" class="elgg-button elgg-button-submit" value="' . elgg_echo('search') . '" />
	</fieldset>
	</form><br />';

$content .= $search_form;
$content .= '<div id="esope-search-results"></div>';


$params = array(
	'content' => $content,
	'sidebar' => elgg_view('members/sidebar'),
	'title' => $title . " ($num_members)",
	'filter_override' => elgg_view('members/nav', array('selected' => $vars['page'])),
);

$body = elgg_view_layout('content', $params);

echo elgg_view_page($title, $body);

