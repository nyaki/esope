<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

$url = $vars['url'];
$imgurl = $vars['url'] . 'mod/adf_public_platform/img/theme/';

echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));

$footer = elgg_get_plugin_setting('footer', 'adf_public_platform');
$email = elgg_get_plugin_setting('contactemail', 'adf_public_platform');
$rss = elgg_get_plugin_setting('rss', 'adf_public_platform');
$twitter = elgg_get_plugin_setting('twitter', 'adf_public_platform');
$facebook = elgg_get_plugin_setting('facebook', 'adf_public_platform');
//$flickr = elgg_get_plugin_setting('flickr', 'adf_public_platform');
$dailymotion = elgg_get_plugin_setting('dailymotion', 'adf_public_platform');
$slideshare = elgg_get_plugin_setting('slideshare', 'adf_public_platform');

// Construction contenu
$side_content = '';
if (!empty($email)) $side_content .= 'CONTACT&nbsp;: ' . $email . '<br />';
if (!empty($slideshare)) $side_content .= '<a href="' . $slideshare . '" class="contact-slideshare">Slideshare</a> &nbsp; ';
if (!empty($dailymotion)) $side_content .= '<a href="' . $dailymotion . '" class="contact-dailymotion">Dailymotion</a> &nbsp; ';
if (!empty($twitter)) $side_content .= '<a href="' . $twitter . '" class="contact-twitter">Twitter</a> &nbsp; ';
if (!empty($facebook)) $side_content .= '<a href="' . $facebook . '" class="contact-facebook">Facebook</a> &nbsp; ';
//if (!empty($flickr)) $side_content .= '<a href="' . $flickr . '" class="contact-flickr">FlickR</a> &nbsp; ';
if (!empty($rss)) $side_content .= '<a href="' . $rss . '" class="contact-rss">RSS</a> &nbsp; ';
?>


<footer>
	<div id="theme-compnum-footer">
		<?php
		if (!empty($side_content)) {
			echo '<div style="float:right; width:280px; margin:0 20px;">' . $side_content . '</div>';
		}
		echo $footer;
		?>
	</div>
</footer>

<div class="interne credits">
	<p>Conception & réalisation : Facyla ~ <a href="http://www.items.fr/" target="_blank" title="Items International (nouvelle fenêtre)">Items International</a></p>
	<p class="right">Plateforme construite avec le framework opensource Elgg 1.8</p>
</div>

