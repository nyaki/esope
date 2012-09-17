<?php
/**
 * Plugin user settings
 *
 * Calls the plugin admin settings form body with type set to 'user'
 * 
 * @package Elgg.Core
 * @subpackage Plugins
 */

$vars['type'] = 'user';

// Can't use elgg_view_form() because it overrides the $vars['action'] parameter
echo elgg_view('forms/plugins/settings/save', $vars);