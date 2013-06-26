<?php
/**
 * Elgg bookmarks plugin everyone page
 *
 * @package Bookmarks
 */

$page_owner = elgg_get_page_owner_entity();
if (!$page_owner) {
	forward('bookmarks/all');
}

elgg_push_breadcrumb($page_owner->name);

elgg_register_title_button();

$options = array(
	'type' => 'object',
	'subtype' => 'bookmarks',
	'limit' => 10,
	'full_view' => false,
	'view_toggle_type' => false
);
$use_owner = elgg_get_plugin_setting('bookmarks_user_listall', 'adf_public_platform');
if (($use_owner == 'yes') && elgg_instanceof($page_owner, 'user')) $options['owner_guid'] = $page_owner->guid;
else $options['container_guid'] = $page_owner->guid;

$content .= elgg_list_entities($options);

if (!$content) {
	$content = elgg_echo('bookmarks:none');
}

$title = elgg_echo('bookmarks:owner', array($page_owner->name));

$filter_context = '';
if ($page_owner->getGUID() == elgg_get_logged_in_user_guid()) {
	$filter_context = 'mine';
}

$vars = array(
	'filter_context' => $filter_context,
	'content' => $content,
	'title' => $title,
	'sidebar' => elgg_view('bookmarks/sidebar'),
);

// don't show filter if out of filter context
if ($page_owner instanceof ElggGroup) {
	$vars['filter'] = false;
}

$body = elgg_view_layout('content', $vars);

echo elgg_view_page($title, $body);