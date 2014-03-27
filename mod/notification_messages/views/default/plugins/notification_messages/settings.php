<?php
global $CONFIG;

$notify_subject_opt = array(
	'default' => elgg_echo('notification_messages:subject:default'), 
	'allow' => elgg_echo('notification_messages:subject:allow'), 
	//'deny' => elgg_echo('notification_messages:subject:deny'), 
);


echo '<br /><h3>' . elgg_echo('notification_messages:settings:objects') . '</h3>';

// get registered objects
$objects = elgg_get_config('register_objects');

// Blog is different - add it manually
if (elgg_is_active_plugin('blog')) { $objects['object']['blog'] = elgg_echo('blog:newpost'); }

echo '<p>' . elgg_echo('notification_messages:settings:details') . '</p>';
echo '<p><strong>' . elgg_echo('notification_messages:object:subtype') . '&nbsp;:</strong> ' . elgg_echo('notification_messages:setting') . ' - <em>' . elgg_echo('notification_messages:subject:default') . '</em></p>';

foreach($objects as $object_type => $subtype_array){
	
	foreach($subtype_array as $subtype => $subject) {
		$param = $object_type . "_" . $subtype;
		$options = array(
			'name' => "params[{$param}]",
			'value' => $vars['entity']->$param ? $vars['entity']->$param : 'default',
			'options_values' => $notify_subject_opt,
		);
		$msg_subtype = notification_messages_readable_subtype($subtype);
		echo '<p><label>' . $msg_subtype . '&nbsp;: ' . elgg_view('input/dropdown', $options) . '</label> - ' . elgg_echo('notification_messages:subject:default') . '&nbsp;: <em>' . $subject . '</em></p>';
	}
	
}

echo '<br /><h3>' . elgg_echo('notification_messages:settings:comments') . '</h3>';
echo '<p>' . elgg_echo('notification_messages:settings:comments:details') . '</p>';
/// Generic comments support
$options = array(
		'name' => "params[generic_comment]",
		'value' => $vars['entity']->generic_comment ? $vars['entity']->generic_comment : 'default',
		'options_values' => $notify_subject_opt,
	);
echo '<p><label>' . elgg_echo('notification_messages:settings:generic_comment') . '&nbsp;: ' . elgg_view('input/dropdown', $options) . '</label> - ' . elgg_echo('notification_messages:subject:default') . '&nbsp;: <em>' . elgg_echo('generic_comment:email:subject') . '</em></p>';

