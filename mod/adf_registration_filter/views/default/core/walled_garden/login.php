<?php
/**
 * Walled garden login
 */

$title = elgg_get_site_entity()->name;
$welcome = elgg_echo('walled_garden:welcome');
$welcome .= ': <br/>' . $title;

$menu = elgg_view_menu('walled_garden', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-general elgg-menu-hz',
));

$login_box = elgg_view('core/account/login_box', array('module' => 'walledgarden-login'));

$content = <<<HTML
<div class="elgg-col elgg-col-1of2" id="elgg-walledgarden-intro">
	<div class="elgg-inner">
		<h1 class="elgg-heading-walledgarden">
			$welcome
		</h1>
		$menu
	</div>
</div>
<div class="elgg-col elgg-col-2of2" id="elgg-walledgarden-login">
	<div class="elgg-inner">
		$login_box
	</div>
</div>
HTML;

echo elgg_view_module('walledgarden', '', $content, array(
	'class' => 'elgg-walledgarden-double',
	'header' => ' ',
	'footer' => ' ',
));
