<?php
/**
 * English strings
 */

$footer_default = '<div class="mts clearfloat right"><a href="http://elgg.org"><img src="' . elgg_get_site_url() . '_graphics/powered_by_elgg_badge_drk_bckgnd.gif" alt="Powered by Elgg" width="106" height="15" /></a></div>';

$en = array(
	
	'option:notify:email' => "Enable email (default)",
	'option:notify:site' => "Enable site (messages)",
	'option:notify:all' => "Enable all methods",
	'option:notify:no' => "Disable all methods",
	'option:empty' => "",
	
	'profile_edit' => "Profile edition",
	'event_calendar:view' => "View event",
		
	//Theme settings
	'admin:appearance:adf_theme' => "Theme configuration",
	'admin:appearance:main_theme_config' => "Theme configuration",
	'adf_platform:configredirect' => "Theme configuration is handled via Parameters > AccEssonne ~ Thème accessible",
	'adf_platform:config:interface' => "INTERFACE ELEMENTS",
	'adf_platform:config:publichomepage' => "PUBLIC HOMEPAGE",
	'adf_platform:config:loggedhomepage' => "LOGGED IN HOMEPAGE",
	'adf_platform:config:behaviour' => "BEHAVIOURS & SETTINGS",
	'adf_platform:config:groups' => "GROUPS",
	'adf_platform:config:members' => "MEMBERS AND DIRECTORY",
	'adf_platform:config:toolslistings' => "TOOLS LISTING PAGES",
	'adf_platform:config:toolslistings:details' => "This setting lets you define the default behaviour of tools listing pages such as blogs, files, etc. By default only <em>personal</em> publications of a member are listed (not those published in his groups). You can choose here to list them all.",
	'adf_platform:config:filters' => "FILTERS",
	'adf_platform:settings:advancedsearch' => "Enable advanced search (in general search)",
	'adf_platform:advancedsearch' => "Advanced search",
	'search:sort:relevance' => "Relevance",
	'search:sort:created' => "Creation date",
	'search:sort:updated' => "Update date",
	'search:sort:alpha' => "Alphabetical",
	'search:sort:action_on' => "Action on",
	'search:order:desc' => "Descending (natural)",
	'search:order:asc' => "Ascending (inverse)",
	'search:field:type' => "Type",
	'search:field:subtype' => "Subtype",
	'search:field:searchtype' => "Search type",
	'search:field:container' => "Container",
	'search:field:sort' => "Sort by",
	'search:field:order' => "Order by",
	'search:field:createdtime' => "Creation date",
	'search:field:modifiedtime' => "Modification date",
	'search:field:date:lower' => "(min)",
	'search:field:date:upper' => "(max)",
	'search:field:createdtimelower' => "Creation date (min)",
	'search:field:createdtimeupper' => "Creation date (max)",
	'search:field:modifiedtimelower' => "Modification date (min)",
	'search:field:modifiedtimeupper' => "Modification date (max)",
	'search:field:fulltext' => "Search",
	'adf_platform:config:widgets' => "ENABLED WIDGETS",
	'adf_platform:settings:removeusermenutools' => "(expert) Remove user menu items.<br />Use link id, eg.: blog,liked_content,photos (NO spacing)",
	'adf_platform:settings:removeusertools' => "(expert) Remove user content creation button.<br />Use registered entity subtypes, eg.: blog,bookmark (NO spacing)",
	'adf_platform:settings:user_exclude_access' => "(expert) Removes chosen access levels for members. Use the access_ids, eg. -2,0,1,2 (no space)",
	'adf_platform:settings:admin_exclude_access' => "(expert) Removes chosen access levels for admins (take care !). Use the access_ids, eg. -2,0,1,2 (no space)",
	'adf_platform:config:groupinvites' => "GROUP INVITES",
	'adf_platform:settings:opengroups:defaultaccess' => "Default access level for new content in open groups",
	'adf_platform:settings:closedgroups:defaultaccess' => "Default access level for new content in closed groups",
	'adf_platform:groupdefaultaccess:default' => "Same as site default access",
	'adf_platform:groupdefaultaccess:group' => "Group members",
	'adf_platform:groupdefaultaccess:groupvis' => "Same as group visibility",
	'adf_platform:groupdefaultaccess:members' => "Site members",
	'adf_platform:groupdefaultaccess:public' => "Public",
	'adf_platform:settings:groupjoin_enablenotif' => "Enable notification when a user joins a group",
	'adf_platform:config:grouptabs' => "GROUP TABS",
	'adf_platform:settings:groups:friends' => "Use friends tab",
	'adf_platform:settings:groups:alpha' => "Use alphabetic tab",
	'adf_platform:settings:groups:newest' => "Use newest members tab",
	'adf_platform:settings:groups:popular' => "Use popular groups tab",
	'adf_platform:settings:groups:discussion' => "Use discussion tab",
	'adf_platform:settings:groups:discussion:always' => "Add discussions after the group listing",
	'adf_platform:settings:groups:tools_default' => "Enable all group tools when creating a new group",
	'adf_platform:settings:groups:tools_default:auto' => "Auto (depending on plugins)",
	'groups:alpha' => "Alphabetic",
	'groups:friends' => "Friends",
	'adf_platform:config:memberssearch' => "MEMBERS SEARCH PAGE",
	'adf_platform:settings:members:alpha' => "Use alphabetic tab",
	'adf_platform:settings:members:newest' => "Use newest members tab",
	'adf_platform:settings:members:popular' => "Use popular members tab",
	'adf_platform:settings:members:onlinetab' => "Use online members tab",
	'members:label:alpha' => "Alphabetic",
	'adf_platform:config:contacts' => "CONTACTS & IDENTITIES",
	'adf_platform:config:contacts:details' => "Note : not all themes use these contacts !",
	'adf_platform:config:styles' => "COLORS & STYLE",
	'adf_platform:config:styles:headerfooter' => "Dégradé du header et du pied de page",
	'adf_platform:config:styles:groupmodules' => "Dégradé des widgets et modules des groupes",
	'adf_platform:config:styles:buttons' => "Dégradé des boutons (normal puis :hover)",
	'adf_platform:config:saverestore' => "IMPORT / EXPORT - <i>BETA</i>",
	'adf_platform:config:saverestore:details' => "Cette fonctionnalité vous permet de sauvegarder/exporter les paramètres de votre thème, et d'importer les données d'une sauvegarde précédente ou d'un autre thème. Cela peut vous servir à des fins de sauvegarde d'une version particulière de votre thème, mais aussi à tester différents thèmes ou réglages tout en conservant la possibilité de revenir à votre configuration initiale, ou encore à transférer votre thème d'un site à un autre.",
	'adf_platform:config:import' => "Import / restoration",
	'adf_platform:config:import:details' => "Pour importer les paramètres depuis un autre site ou restaurer une sauvegarde précédente, collez-ci-dessous les données, puis enregistrez les paramètres.<br />ATTENTION : les paramètres existants seront remplacés par ceux de la sauvegarde ! Il est vivement conseillé de sauvegarder les anciens paramètres du plugin au préalable...<br />Note importante : seuls les paramètres définis dans la sauvegarde sont remplacés ; si de nouveaux champs ont été ajoutés, ou si certains réglages ne font pas partie de la sauvegarde, les paramètres actuels seront conservés.",
	'adf_platform:config:export' => "Export / save",
	'adf_platform:config:export:details' => "Copiez-collez le contenu du bloc ci-dessous et conservez-le dans un fichier texte ou dans un mail. Pour tout sélectionner, cliquez dans la zone texte, puis Ctrl-C (ou Pomme-C) pour copier le texte.",
	
	
	// Overrides plugins translations
	// Note : these additions are made here rather than in the original plugins so that a core update won't break them
  'river:comment:object:announcement' => "%s has commented %s",
  'widgets:profile_completeness:view:tips:link' => "<br />%s&raquo;&nbsp;Complete my profile!%s",
	
	'widget:toggle' => "Show/hide %s module",
	'widget:editmodule' => "Configure %s module",

	// Announcements: missing translation keys - Annonces : manque des clefs de trad
	'announcements:summary' => "Announcement title",
	'announcements:body' => "Announcement text",
	'announcements:post' => "Publish announcement",
	'announcements:edit' => "Edit announcement",
	'announcements:delete:nopermission' => "Cannot delete announcement: you don't have the proper permissions to do that.",
	'announcements:delete:failure' => "Cannot delete announcement.",
	'announcements:delete:sucess' => "Announcement published",
	'object:announcement:save:permissiondenied' => "Cannot save announcement: you don't have the proper permissions to do that.",
	'object:announcement:save:descriptionrequired' => "Cannot save announcement: announcement text cannot be empty.",
	'object:announcement:save:success' => "Announcement saved",
	'item:object:category' => "Used categories",
	'item:object:topicreply' => "Forum reply",
	
	
	
	// Theme translation & other customizations
	// Traductions du thème et autres personnalisations
'adf_platform:groupinvite' => "pending group invite request",
 	'adf_platform:groupinvites' => "pending groups invites requests",
	'adf_platform:friendinvite' => "pending friendship request",
	'adf_platform:friendinvites' => "pending friendship requests",
	'adf_platform:gotohomepage' => "Go to home page",
	'adf_platform:usersettings' => "My Settings",
	'adf_platform:myprofile' => "My Profile",
	'adf_platform:help' => "Help",
	'adf_platform:loginregister' => "Login / register",
	'adf_platform:joinagroup' => "Join a group",
	'adf_platform:categories' => "Categories",
	'adf_platform:directory' => "Directory",
	'adf_platform:event_calendar' => "Calendar",
	'adf_platform:search' => "Search",
	'adf_platform:search:defaulttext' => "Search all content...",
	'adf_platform:groupicon' => "group icon",
	'adf_platform:categories:all' => "Categories news",
	'adf_platform:members:online' => "Online members",
	'adf_platform:members:newest' => "Newest members",
	'adf_platform:groups:featured' => "Featured groups",
	
	// Widgets
	'adf_platform:widget:bookmark:title' => 'Bookmarks',
	'adf_platform:widget:brainstorm:title' => 'Brainstorm ideas',
	'adf_platform:widget:blog:title' => 'Blog articles',
	'adf_platform:widget:event_calendar:title' => 'Calendar',
	'adf_platform:widget:file:title' => 'Files',
	'adf_platform:widget:group:title' => 'Groups',
	'adf_platform:widget:page:title' => 'Pages',
	'adf_platform:widget:user_activity:title' => 'Site activity',
	'adf_platform:widget:user_activity:description' => 'Display the latest user activities',
	'adf_platform:widget:site_activity:title' => 'Recent activity',
	'adf_platform:widget:site_activity:description' => 'Display a the most recent activities across the site (river)',
	
	'accessibility:sidebar:title' => "Tools",
	//'breadcrumb' => "Fil d'Ariane",
	'breadcrumbs' => "Back to ",
	// Pending requests
	'decline' => "Decline",
	'refuse' => "Refuse",
	/* Pagination */
	'previouspage' => "Previous page",
	'nextpage' => "Next page",
	/* Members search */
	'searchbytag' => "Tag search",
	'searchbyname' => "Name search",
	// Generic actions
	'delete:message' => "Delete selected message(s)",
	'markread:message' => "Mark selected message(s) as read",
	'toggle:messages' => "toggle messages selection",
	'messages:send' => "Send message",
	'save:newgroup' => "Create the group!",
	'save:group' => "Save group changes",
	'upload:avatar' => "Load image",
	'save:settings' => "Save the configuration",
	'save:usersettings' => "Save my settings",
	'save:usernotifications' => "Save my notification settings for members",
	'save:groupnotifications' => "Save my notification settings for groups",
	'save:widgetsettings' => "Save widget settings",
	'groups:join:success' => "Successfully joined the group",
	// Notifications
	'link:userprofile' => "%s's profile page",
	
	// Widgets settings
	'onlineusers:numbertodisplay' => "Max amount of connected members to display",
	'newusers:numbertodisplay' => "Max amount of new members to display",
	'brainstorm:numbertodisplay' => "Max amount of new ideas to display",
	'river:numbertodisplay' => "Max amount of activities to display",
	'group:widget:num_display' => "Max amount of groups to display",
	
	'more:friends' => "More friends", 
	
	// New group
	// @TODO This text should definitely be adapted to your own install - HTML can be used here ; 
	// use $CONFIG->url for site install URL, $CONFIG->email for site email
	'groups:newgroup:disclaimer' => "<blockquote><strong>Group creation rules:</strong> <em>Please refer to General User Conditions.</em></blockquote>",
	'groups:search:regular' => "Group search",
	'groups:regularsearch' => "Name or keyword",
	'search:group:go' => "Find a group",
	'members:search' => "Find a member",
	
	// 
	'accessibility:allfieldsmandatory' => "<sup class=\"required\">*</sup> All fields are required",
	'accessibility:requestnewpassword' => "Ask for a new password",
	'accessibility:revert' => "Delete",
	
	
	'adf_platform:homepage' => "Homepage",
	'announcements' => "Announcements",
	'event_calendar' => "Calendar",
	
	'adf_platform:access:public' => "Public (accessible to non-loggedin visitors)",
	
	'brainstorm:widget:description' => "Displays your brainstorm ideas.",
	'bookmarks:widget:description' => "Displays your bookmarks list.",
	'pages:widget:description' => "Displays your pages.",
	'event_calendar:widget:description' => "Displays your upcoming events.",
	'event_calendar:num_display' => "Number of events to display",
	'messages:widget:title' => "Unread messages",
	'messages:widget:description' => "Displays your latest unread messages.",
	'messages:num_display' => "Number of messages to display",
	
	
	// Layout settings
	'adf_platform:settings:help' => "The configuration panels let you configure numerous elements of your site: graphical elements, interface, couleurs, stylesheets, etc., and also some behaviours.",
	'adf_platform:settings:layout' => "To reset to initial configuration, replace content by \"RAZ\" (in HTML mode).",
	'adf_platform:faviconurl' => "Favicon URL",
	'adf_platform:faviconurl:help' => "Relative URL of website favicon (PNG or ICO image, usually 64x64 pixels).",
	'adf_platform:headertitle' => "Site title (clickable, in header)",
	'adf_platform:headertitle:help' => "To increase size of caracters, wrap them with span. Use span with 'minuscule' class to lowercase&nbsp;: &lt;span&gt;T&lt;/span&gt;itle.&lt;span class=\"minuscule\"&gt;en&lt;/span&gt;",
	'adf_platform:header:content' => "Custom header code (free HTML). Reset to initial configuration by replacing content by \"RAZ\" (in HTML mode).",
	'adf_platform:header:default' => '<div id="easylogo"><a href="/"><img src="' . $vars['url'] . '/mod/adf_public_platform/img/logo.gif" alt="Site logo"  /></a></div>',
	'adf_platform:header:height' => "Height of header banner (use same value as header background image height - or lower)",
	'adf_platform:header:background' => "Background image URL (display under the top level menu)",
	'adf_platform:footer:color' => "Footer background color",
	'adf_platform:footer:content' => "Footer content",
	'adf_platform:footer:default' => $footer_default,
	'adf_platform:home:displaystats' => "Display stats on home page",
	'adf_platform:css' => "Add here your own CSS styles",
	'adf_platform:css:help' => "The CSS you add here are loaded after the main CSS (without overriding it), and after any plugins CSS.",
	'adf_platform:css:default' => "/* Edit headers style */\nheader {  }\n\n/* Links */\na, a:visited {  }\na:hover, a:active, a:focus {  }\n\n/* Titles */\nh1, h2, h3, h4, h5 {  }\n/* etc. */\n",
	'adf_platform:dashboardheader' => "Custom introduction text before the user dashboard.",
	'adf_platform:index_wire' => "Add The Wire on homepage.",
	'adf_platform:index_groups' => "Display featured groups",
	'adf_platform:index_members' => "Display online members",
	'adf_platform:index_recent_members' => "Display newly registered members",
	'adf_platform:homegroup_guid' => "Choose main group / help group",
	'adf_platform:homegroup_index' => "Display latest group activity ?",
	'adf_platform:homesite_index' => "Display latest site activity ?",
	'adf_platform:homegroup_autojoin' => "Auto-register new members in this group ? (if forced, will also register anyone who left the group)",
	
	'adf_platform:homeintro' => "Introduction block on public homepage (above register/login forms).",
	'adf_platform:settings:colors' => "Theme colors",
	'adf_platform:fonts' => "Fonts",
	'adf_platform:fonts:details' => "Add fonts directly on the server or using the css @import rules in the style area below, then apply your fonts to the various parts of the theme",
	'adf_platform:font1' => "Font 1 : Variant of Font 2, used for section titles",
	'adf_platform:font2' => "Font 2 : Most titles, modules and widgets headers",
	'adf_platform:font3' => "Font 3 : Main navigation menu",
	'adf_platform:font4' => "Font 4 : Default font, main text",
	'adf_platform:font5' => "Font 5 : code, addresses.. (use a monospace font)",
	'adf_platform:font6' => "Font 6 : not used yet...",
	'adf_platform:colors' => "Colors",
	'adf_platform:colors:details' => "You can modify the main colors here. For fine-tuning, use the CSS styles area below.",
	'adf_platform:title:color' => "Title color",
	'adf_platform:text:color' => "Text color",
	'adf_platform:link:color' => "Link color",
	'adf_platform:link:hovercolor' => "Link color on hover (and color inversions)",
	'adf_platform:color1:color' => "Top shading color for header",
	'adf_platform:color2:color' => "Top shading color for widgets/modules",
	'adf_platform:color3:color' => "Bottom shading color for widgets/modules",
	'adf_platform:color4:color' => "Bottom shading color for header",
	'adf_platform:color5:color' => "Top shading color for buttons",
	'adf_platform:color6:color' => "Bottom shading color for buttons",
	'adf_platform:color7:color' => "Top shading color for buttons (hover)",
	'adf_platform:color8:color' => "Bottom shading color for buttons (hover)",
	'adf_platform:color9:color' => "Custom color 9",
	'adf_platform:color10:color' => "Custom color 10",
	'adf_platform:color11:color' => "Custom color 11",
	'adf_platform:color12:color' => "Custom color 12",
	'adf_platform:color13:color' => "Main submenu background color",
	'adf_platform:color14:color' => "Module title color",
	'adf_platform:color15:color' => "Button title color",
	'adf_platform:settings:remove_collections' => "Disable friends collections",
	'widgets:dashboard:add' => "Edit my homepage",
	'widgets:profile:add' => "Add widgets to my homepage",
	'adf_platform:settings:publicpages' => "Public pages (viewable by non-loggedin visitors)",
	'adf_platform:settings:publicpages:help' => "\"Public pages\" are viewable by anyone, without logging to the site. They are usually legal notices, and other important public pages of your website.<br />Add the relative URL of the pages, one per line, without the domaine name (or subdirectory), and without any initial slash ('/'), e.g.: pages/view/1234/legal-notice",
	'adf_platform:home:public_profiles' => "Opt-in only public profile ? No = public ; Yes = per-user choice (default is not public)",
	'adf_platform:home:public_profiles:help' => "This settings lets site members decide whether they want to make their profil visible from the internet, without logging into the site. By default, their profile will be restricted to site mùembers, until they explicitely set their profile as public. If this setting is disabled, profiles will be public.<br />Note : in \"intranet\" mode, no page is visible from the internet, including profile pages, so this setting has no effect.",
	'adf_platform:usersettings:public_profiles:title' => "Choose my profile visibility",
	'adf_platform:usersettings:public_profile' => "Set my profile as public",
	'adf_platform:usersettings:public_profile:help' => "By default your profile is only visible from site members, so your profile is not publicly exposed without your permission. This setting lets you define wether you want to make your profile visible from the internet.<br />Please note that all your other visiblility settings on fields or widgets will also apply : if you have chosen that your phone number or contact list is restricted to your contacts only, making your profile pûblic won't make these information public, and they still will be restricted to your contacts.<br />It is avised to set your profile as public if you wish to show your skills or share any information on the internet.",
	'adf_platform:action:public_profile:error' => "There was an error while changing your settings.",
	'adf_platform:action:public_profile:saved' => "Your profile visibility has been successfully modified.",
	'adf_platform:usersettings:public_profile:public' => "Your profile is now PUBLIC.",
	'adf_platform:usersettings:public_profile:private' => "Your profile is now RESTRICTED TO MEMBERS.",
		
	
	// Behaviour settings
	'adf_platform:index:url' => "Index page file URL (must be includable)",
	'adf_platform:settings:redirect' => "Relative redirect URL after login",
	'adf_platform:settings:replace_public_home' => "Relative URL to replace public homepage (default: leave empty)",
	'adf_platform:settings:replace_public_homepage' => "Replace public homepage ?",
	'adf_platform:replacehome:no' => "No (default public homepage)",
	'adf_platform:replacehome:default' => "Yes : use (configurable) default theme homepage",
	'adf_platform:replacehome:cmspages' => "Yes : use a custom CMS page",
	'adf_platform:homepage:cmspages:editlink' => "Edit home page content (opens in a new page)",
	'adf_platform:cmspages:notactivated' => "Caution : cmspages plugin not activated. Please activate or change theme settings.",
	'adf_platform:settings:replace_home' => "Replace default logged in homepage by a user dashboard",
	'adf_platform:settings:firststeps' => "Firsts steps page GUID",
	'adf_platform:settings:firststeps:help' => "This page will display the first month for new users. Le GUID de la page est le nombre indiqué dans l'adresse de la page à utiliser : <em>" . elgg_get_site_url() . "/pages/<strong>GUID</strong>/premiers-pas</em>. Note: must be of 'page' subtype.",
	'adf_platform:settings:footer' => "Footer content",
	'adf_platform:settings:headerimg' => "Header image (default: 85px height)",
	'adf_platform:settings:headerimg:help' => "Set relative URL of an image which will be positionned at the center of the header, right under the top level menu, and will be repeated horizontally if needed. Please use a 85px height image, large enough to avoid repetition on large screens (2000px minimum advised). For other dimensions, please add corresponding CSS declarations in the custom CSS below (change height according to your needs) : <em>header { height:115px; }</em>",
	'adf_platform:settings:helplink' => "Help page",
	'adf_platform:settings:helplink:help' => "Relative URL of main help page. This will be used for the \"Help\" link in top level menu. Relative URL only, no external link.",
	'adf_platform:settings:backgroundimg' => "Background image",
	'adf_platform:settings:backgroundimg:help' => "Relative URL of background image, which will be repeated vertically and horizontally.",
	'adf_platform:settings:backgroundcolor' => "Background color",
	'adf_platform:settings:backgroundcolor:help' => "Background color is useful if you don't set any background image, or while background image loads.",
	'adf_platform:settings:groups_disclaimer' => "Set the disclaimer message for future group owners, while they create a new group. Leave empty for an empty message.",
	'adf_platform:settings:blog_user_listall' => "List all blog articles (personal + groups)",
	'adf_platform:settings:bookmarks_user_listall' => "List all bookmarks (personal + groups)",
	'adf_platform:settings:brainstorm_user_listall' => "List all ideas (personal + groups)",
	'adf_platform:settings:file_user_listall' => "List all files (personal + groups)",
	'adf_platform:settings:pages_user_listall' => "List all pages (personal + groups)",
	'river:select:all:nofilter' => "All (no activity filter)",
	'adf_platform:profile:settings' => "Members profile page",
	'adf_platform:profile:add_profile_activity' => "Add activity feed",
	'adf_platform:profile:remove_profile_widgets' => "Disable profile widgets",
	'adf_platform:profile:custom_profile_layout' => "Use a custom layout",
	
	
	// Widget settings
	'adf_platform:settings:widget:blog' => "Allow widget : Blog",
	'adf_platform:settings:widget:bookmarks' => "Allow widget : Bookmarks",
	'adf_platform:settings:widget:brainstorm' => "Allow widget : Ideas",
	'adf_platform:settings:widget:event_calendar' => "Allow widget : My calendar",
	'adf_platform:settings:widget:file' => "Allow widget : My files",
	'adf_platform:settings:widget:groups' => "Allow widget : My groups",
	'adf_platform:settings:widget:pages' => "Allow widget : Pages (wiki)",
	'adf_platform:settings:widget:friends' => "Allow widget : My friends",
	'adf_platform:settings:widget:group_activity' => "Allow widget : Group activity",
	'adf_platform:settings:widget:messages' => "Allow widget : Unread messages",
	'adf_platform:settings:widget:river_widget' => "Allow widget : Site activity",
	'adf_platform:settings:widget:twitter' => "Allow widget : Twitter",
	'adf_platform:settings:widget:tagcloud' => "Allow widget : Tag cloud",
	'adf_platform:settings:widget:videos' => "Allow widget : Videos",
	'adf_platform:settings:widget:profile_completeness' => "Allow widget : Profile completion",
	'adf_platform:settings:widget:profile_completeness:help' => "This widget can be enabled/disabled in Profile Manager plugin configuration",
	'webprofiles' => "Online profiles",
	'webprofiles:description' => "Profiles on a bunch of big social networks, plus websites URLs and email addresses",
	'webprofiles:widget:title' => "Online profiles",
	'webprofiles:widget:description' => "Displays a block with links to your profiles, identities and online contacts : : video, facebook, linkedin, twitter, doyoubuzz, web sites and email addresses, etc.",
	'webprofiles:widget:help' => "Set your profiles on various services to display the service icon with a link to your profile. You can also add websites email addresses and RSS feeds.",
	
	'adf_platform:settings:filters:friends' => "Remove \"Friends\" tab in listings ? (default : No)",
	'adf_platform:settings:filters:mine' => "Remove \"Mine\" tab in listings ? (default : No)",
	'adf_platform:settings:filters:all' => "Remove \"All\" tab in listings ? (default : No)",
	'adf_platform:settings:groups:inviteanyone' => "Allow to invite any member in groups ? (default : No = contacts only)",
	'adf_platform:groups:allowregister' => "Register in the group",
	'adf_platform:settings:groups:allowregister' => "Allows group admins to register members in the group, instead of only inviting them.",
	'adf_platform:settings:members:onesearch' => "Keep only general member search ? (default : No)",
	'adf_platform:settings:members:online' => "Display online members on sidebar (default : no)",
	
	'adf_platform:settings:contact:contactemail' => "Contact email",
	'adf_platform:settings:contactemail:help' => "",
	'adf_platform:settings:rss' => "RSS feed URL",
	'adf_platform:settings:rss:help' => "",
	'adf_platform:settings:twitter' => "Twitter page URL (account or hashtag search)",
	'adf_platform:settings:twitter:help' => "",
	'adf_platform:settings:facebook' => "Facebook page/account URL",
	'adf_platform:settings:facebook:help' => "",
	'adf_platform:settings:googleplus' => "Google+ page/account URL",
	'adf_platform:settings:googleplus:help' => "",
	'adf_platform:settings:linkedin' => "Linkedin page/account URL",
	'adf_platform:settings:linkedin:help' => "",
	'adf_platform:settings:netvibes' => "Netvibes page/account URL",
	'adf_platform:settings:netvibes:help' => "",
	'adf_platform:settings:flickr' => "FlickR page/account URL",
	'adf_platform:settings:flickr:help' => "",
	'adf_platform:settings:youtube' => "Youtube page/account URL",
	'adf_platform:settings:youtube:help' => "",
	'adf_platform:settings:dailymotion' => "Dailymotion page/account URL",
	'adf_platform:settings:dailymotion:help' => "",
	'adf_platform:settings:pinterest' => "Pinterest page/acount URL",
	'adf_platform:settings:pinterest:help' => "",
	'adf_platform:settings:tumblr' => "Tumblr page/account URL",
	'adf_platform:settings:tumblr:help' => "",
	'adf_platform:settings:slideshare' => "Slideshare page/account URL",
	'adf_platform:settings:slideshare:help' => "",
	

	// DATES
	'date:format' => 'D, F d, Y',
	'date:day:0' => 'Sunday',
	'date:day:1' => 'Monday',
	'date:day:2' => 'Tuesday',
	'date:day:3' => 'Wednesday',
	'date:day:4' => 'Thursday',
	'date:day:5' => 'Friday',
	'date:day:6' => 'Saturday',
	'date:month:1' => 'January',
	'date:month:2' => 'February',
	'date:month:3' => 'March',
	'date:month:4' => 'April',
	'date:month:5' => 'May',
	'date:month:6' => 'June',
	'date:month:7' => 'July',
	'date:month:8' => 'August',
	'date:month:9' => 'September',
	'date:month:10' => 'October',
	'date:month:11' => 'November',
	'date:month:12' => 'December',
	
	'adf_platform:dashboard:title' => "My custom homepage",
	'adf_platform:welcome:msg' => "Welcome on your social platform.<br />Site adminis, please edit this message through the theme configuration !",
	'adf_platform:firststeps:linktitle' => "First steps (click to show/hide)",
	'adf_platform:site:activity' => "Recent activity",
	'adf_platform:thewire:togglelink' => "Publish on &#x25BC;'s wire",
	'adf_platform:homewire:title' => "%s's wire'",
	'adf_platform:thewire:charleft' => "left",
	'adf_platform:thewire:access' => "Access : ",
	'adf_platform:homewire:msg' => "Would you share an idea or info ?",
	'members:search' => "Members search",
	
	'grouptype:default' => "Default",
	'grouptype:thematic' => "Thematics",
	'grouptype:project' => "Projects",
	'grouptype:industry' => "Industry",
	'grouptype:year' => "Year",
	'grouptype:edition' => "Edition",
	'grouptype:region' => "Region",
	'grouptype:publication' => "Publication",
	
	/* ESOPE search */
	'adf_platform:settings:groups:searchtab' => "Multi-criteria search tab",
	'adf_platform:settings:groups:tags' => "Add tag cloud below search",
	'adf_platform:grouptools:priority' => "Group tools priority",
	'adf_platform:settings:members:searchtab' => "Multi-criteria search tab",
	'esope:search:members:role' => 'Member status',
	'esope:label:search' => "Search",
	'members:label:search' => "Search",
	'esope:search:title' => "Advanced search",
	'esope:search:setting:metadata' => "Enter a comma-separated list of the metadata you wish to add to advanced search",
	'esope:membersearch:setting:metadata' => "Enter a comma-separated list of the metadata you wish to add to advanced members search",
	'esope:groupsearch:setting:metadata' => "Enter a comma-separated list of the metadata you wish to add to advanced groups search",
	'esope:search:details' => "Use multiple criteria to find what you're looking for",
	'esope:fulltextsearch' => "Fulltext search",
	'esope:search:type' => "Search type",
	'esope:search:subtype' => "Object subtype",
	'esope:search:profile_type' => "Profile type",
	'esope:search:nbresults' => '%s results',
	'object' => "Publication",
	'esope:search:morethanmax' => "Too much results, please set more filter.",
	'esope:search:noresult' => "No result, please adjust your search criteria (filter might be too or not enough restrictive, try adding or removing some of them).",
	
	// View profile as someone else
	'esope:viewprofileas:title' => "View your profile as",
	'esope:viewprofileas:public' => "You are viewing your public profile (as a non-user would see it)",
	'esope:viewprofileas:contact' => "You are viewing your profile as another site member",
	'esope:viewprofileas:friends' => "You are viewing your profile as one of your contacts",
	'esope:viewprofileas:user' => "You are viewing your profile as %s",
	'esope:viewprofileas:yourself' => "Yourself",
	'esope:viewprofileas:someonelse' => "Someone else",
	'esope:viewprofileas:acontact' => "One of your contacts",
	'esope:viewprofileas:nonuser' => "Non-user (public)",
	
);

add_translation('en', $en);
