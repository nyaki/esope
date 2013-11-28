<?php
/**
 *	Elgg Shortcodes integration
 *	Author : Mohammed Aqeel | Team Webgalli
 *	Team Webgalli | Elgg developers and consultants
 *	Mail : info [at] webgalli [dot] com
 *	Web	: http://webgalli.com
 *	Skype : 'team.webgalli'
 *	@package Collections of Shortcodes for Elgg
 *	Licence : GNU2
 *	Copyright : Team Webgalli 2011-2015
 */ 
?>
<h3><?php echo elgg_echo('shortcodes:help');?></h3>
<p>Embed PDF : [embedpdf width="600px" height="500px" url='http://infolab.stanford.edu/pub/papers/google.pdf']</p>
<p>Google Charts : [chart data="41.52,37.79,20.67,0.03" bg="F7F9FA" labels="Reffering+sites|Search+Engines|Direct+traffic|Other" colors="058DC7,50B432,ED561B,EDEF00" size="488x200" title="Traffic Sources" type="pie"]</p>
<p>Google Maps : [googlemap width="600" height="300" src="http://maps.google.com/maps?q=Heraklion,+Greece&hl=en&ll=35.327451,25.140495&spn=0.233326,0.445976& sll=37.0625,-95.677068&sspn=57.161276,114.169922& oq=Heraklion&hnear=Heraklion,+Greece&t=h&z=12"]</p>
<p>Webpage Snap : [snap url="http://www.webgalli.com" alt="My description" w="400" h="300"]</p>
<p>Videos : [video site="youtube" id="dQw4w9WgXcQ" w="600" h="340"]</p>
<p>Diaporama (slider) : [diaporama width="600" height="340" images="IMAGE1_URL,IMAGE2_URL"]
</a></p>

<?php
/* @TODO : plus intéressant car permet d'insérer directement le shortcode, mais ne marche qu'après avoir lancé l'embed normal
<p>Embed PDF : <a href="javascript:void(0);" class="embed-item">
	<span class="embed-insert">[embedpdf width="600px" height="500px" url='http://infolab.stanford.edu/pub/papers/google.pdf']</span>
</a></p>

<p>Google Charts : <a href="javascript:void(0);" class="embed-item">
	<span class="embed-insert">[chart data="41.52,37.79,20.67,0.03" bg="F7F9FA" labels="Reffering+sites|Search+Engines|Direct+traffic|Other" colors="058DC7,50B432,ED561B,EDEF00" size="488x200" title="Traffic Sources" type="pie"]</span>
</a></p>

<p>Google Maps : <a href="javascript:void(0);" class="embed-item">
	<span class="embed-insert">[googlemap width="600" height="300" src="http://maps.google.com/maps?q=Heraklion,+Greece&hl=en&ll=35.327451,25.140495&spn=0.233326,0.445976& sll=37.0625,-95.677068&sspn=57.161276,114.169922& oq=Heraklion&hnear=Heraklion,+Greece&t=h&z=12"]</span>
</a></p>

<p>Webpage Snap : <a href="javascript:void(0);" class="embed-item">
	<span class="embed-insert">[snap url="http://www.webgalli.com" alt="My description" w="400" h="300"]</span>
</a></p>

<p>Videos : <a href="javascript:void(0);" class="embed-item">
	<span class="embed-insert">[video site="youtube" id="dQw4w9WgXcQ" w="600" h="340"]</span>
</a></p>

<p>Diaporama (slider) : <a href="javascript:void(0);" class="embed-item">
	<span class="embed-insert">[diaporama width="600" height="340" images="IMAGE1_URL,IMAGE2_URL"]</span>
</a></p>
*/
?>

