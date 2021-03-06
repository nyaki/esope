<?php
/**
 * Group activity widget
 */

$num = (int) $vars['entity']->num_display;
$guid = $vars['entity']->group_guid;

$content = '';

if ($guid & ($entity = get_entity($guid))) {
	$title = $entity->name;
	$title = '<a href="' . $entity->getURL() . '">' . $title . '</a>';
	//$content = "<div class=\"widget-title-details\">$title</div>";
	$content = "<div class=\"widget-title-details group-widget\">$title</div>";

	elgg_push_context('widgets');
	$db_prefix = elgg_get_config('dbprefix');
	$activity = elgg_list_river(array(
		'limit' => $num,
		'pagination' => false,
		'joins' => array("JOIN {$db_prefix}entities e1 ON e1.guid = rv.object_guid"),
		'wheres' => array("(e1.container_guid = $guid)"),
	));
	if (!$activity) {
		$activity = '<p>' . elgg_echo('dashboard:widget:group:noactivity') . '</p>';
	}
	elgg_pop_context();

	$content .= '<div class="widget-group-content">' . $activity . '</div>';
} else {
	// no group selected yet
	if ($vars['entity']->canEdit()) {
		$content = '<p>' . elgg_echo('dashboard:widget:group:noselect') . '</p>';
	}
}

echo $content;
