elgg.provide('elgg.tinymce');

/**
 * Toggles the tinymce editor
 *
 * @param {Object} event
 * @return void
 */
elgg.tinymce.toggleEditor = function(event) {
	event.preventDefault();
	
	var target = $(this).attr('href');
	var id = $(target).attr('id');
	if (!tinyMCE.get(id)) {
		tinyMCE.execCommand('mceAddControl', false, id);
		$(this).html(elgg.echo('tinymce:remove'));
	} else {
		tinyMCE.execCommand('mceRemoveControl', false, id);
		$(this).html(elgg.echo('tinymce:add'));
	}
}

/**
 * TinyMCE initialization script
 *
 * You can find configuration information here:
 * http://tinymce.moxiecode.com/wiki.php/Configuration
 */
elgg.tinymce.init = function() {

	$('.tinymce-toggle-editor').live('click', elgg.tinymce.toggleEditor);

	$('.elgg-input-longtext').parents('form').submit(function() {
		tinyMCE.triggerSave();
	});

	tinyMCE.init({
		language : "fr",
		table_inline_editing : true,
		mode : "specific_textareas",
		editor_selector : "elgg-input-longtext",
		editor_deselector : "elgg-input-rawtext",
		theme : "advanced",
		gecko_spellcheck : true,
		browser_spellcheck : true,
		spellchecker_languages : "+French=fr,English=en",
		//plugins : "lists,spellchecker,autosave,fullscreen,paste,table,template,style,inlinepopups,contextmenu,acheck",
		plugins : "lists,spellchecker,autosave,fullscreen,paste,table,template,style,inlinepopups,contextmenu,searchreplace,emotions",
		<?php /*
		All available plugins :
		  pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template
		All available buttons :
		  theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
      theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
      theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
      theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,spellchecker",
		*/ ?>
		//relative_urls : false,
		//document_base_url : elgg.config.wwwroot,
		convert_urls : false,
		theme_advanced_buttons1 : "removeformat,formatselect,bold,italic,underline,strikethrough,forecolor,link,unlink,blockquote,sub,sup,hr,fullscreen",
		// Si des modèles sont configurés, ajouter ",template" avant "image" pour les intégrer
		theme_advanced_buttons2 : "visualaid,|,code,|,pastetext,pasteword,emotions,|,search,replace,|,bullist,numlist,indent,outdent,|,justifyleft,justifycenter,justifyright,justifyfull",
		theme_advanced_buttons3 : "image,|,tablecontrols,|,undo,redo,|,spellchecker",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : false,
		theme_advanced_path : true,
		width : "100%",
		//height: "200px",
		extended_valid_elements : "a[name|href|target|title|onclick|class],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name|style],hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style],embed[src|type|wmode|width|height|allowfullscreen|allowscriptaccess],object[classid|clsid|codebase|width|height|data|type|id],style[lang|media|title|type],iframe[src|width|height|style],param[name|value]",
		setup : function(ed) {
			//show the number of words
			ed.onLoadContent.add(function(ed, o) {
				var strip = (tinyMCE.activeEditor.getContent()).replace(/(&lt;([^&gt;]+)&gt;)/ig,"");
				var text = elgg.echo('tinymce:word_count') + strip.split(' ').length + ' ';
				tinymce.DOM.setHTML(tinymce.DOM.get(tinyMCE.activeEditor.id + '_path_row'), text);
			});

			ed.onKeyUp.add(function(ed, e) {
				var strip = (tinyMCE.activeEditor.getContent()).replace(/(&lt;([^&gt;]+)&gt;)/ig,"");
				var text = elgg.echo('tinymce:word_count') + strip.split(' ').length + ' ';
				tinymce.DOM.setHTML(tinymce.DOM.get(tinyMCE.activeEditor.id + '_path_row'), text);
			});
		},
		content_css: elgg.config.wwwroot + 'mod/tinymce/css/elgg_tinymce.css',
		/* Copy this file in your theme, uncomment and edit to use templates 
		template_templates : [
		{
			title : "Fiche : Tension",
			src : "/templates/d3p_fiche_tension.php",
			description : "Fiche : Tension"
		},
		*/
	});

	// work around for IE/TinyMCE bug where TinyMCE loses insert carot
	if ($.browser.msie) {
		$(".embed-control").live('hover', function() {
			var classes = $(this).attr('class');
			var embedClass = classes.split(/[, ]+/).pop();
			var textAreaId = embedClass.substr(embedClass.indexOf('embed-control-') + "embed-control-".length);

			if (window.tinyMCE) {
				var editor = window.tinyMCE.get(textAreaId);
				if (elgg.tinymce.bookmark == null) {
					elgg.tinymce.bookmark = editor.selection.getBookmark(2);
				}
			}
		});
	}
}

elgg.register_hook_handler('init', 'system', elgg.tinymce.init);
