<?php

$url = $vars['url'];
$urlicon = $url . 'mod/adf_public_platform/img/theme/';

$site = elgg_get_site_entity();
$title = $site->name;

if (elgg_is_logged_in()) {
  $own = $_SESSION['user'];
  $ownguid = $own->guid;
  $ownusername = $own->username;
  
  // Liste de ses groupes
  $groups = ''; $mygroups = array();
  $allowed_groups = explode(',', elgg_get_logged_in_user_entity()->external_groups);
  foreach ($allowed_groups as $group_guid) {
    $group = get_entity($group_guid);
    $mygroups[] = $group;
  }
  foreach ($mygroups as $group) {
    /*
    $groups .= '<li><a href="' . $group->getURL() . '">' 
      . '<img src="' . $group->getIconURL('tiny') . '" alt="' . str_replace('"', "''", $group->name) . ' (' . elgg_echo('adf_platform:groupicon') . '" />'
      . $group->name . '</a></li>';
    */
    $groups .= '<li><a href="' . $group->getURL() . '">' . $group->name . '</a></li>';
  }
  
  /*
  // Liste des catégories (thématiques du site)
  if (elgg_is_active_plugin('categories')) {
    $categories = '';
    $themes = $site->categories;
    foreach ($themes as $theme) {
      $categories .= '<li><a href="' . $url . 'categories/list?category='.urlencode($theme) . '">' . $theme . '</a></li>';
    }
  }
  */
  
  // Messages non lus
  $num_messages = (int)messages_count_unread();
  if ($num_messages != 0) {
    $text = "$num_messages";
    $tooltip = elgg_echo("messages:unreadcount", array($num_messages));
    $messages = '<li class="invites"><a href="' . $url . 'messages/inbox/' . $ownusername . '" title="' .  $tooltip . '">' . $text . '</a></li>';
  }
  
  // "Invitations" dans les groupes : affiché seulement s'il y a des invitations en attente
  $group_invites = groups_get_invited_groups(elgg_get_logged_in_user_guid());
  $invites_count = sizeof($group_invites);
  if ($invites_count == 1) {
    $invites = '<li class="group-invites"><a href="' . $url . 'groups/invitations/' . $ownusername . '" title="' . $invites_count . ' ' . elgg_echo('adf_platform:groupinvite') . '">' . $invites_count . '</a></li>';
  } else if ($invites_count > 1) {
    $invites = '<li class="group-invites"><a href="' . $url . 'groups/invitations/' . $ownusername . '" title="' . $invites_count . ' ' . elgg_echo('adf_platform:groupinvites') . '">' . $invites_count . '</a></li>';
  }
  // Demandes de contact en attente : affiché seulement s'il y a des demandes en attente
	$friendrequests_options = array("type" => "user", "count" => true, "relationship" => "friendrequest", "relationship_guid" => $own->guid, "inverse_relationship" => true);
  $friendrequests_count = elgg_get_entities_from_relationship($friendrequests_options);
  if ($friendrequests_count == 1) {
    $friendrequests = '<li class="invites"><a href="' . $url . 'friend_request/' . $ownusername . '" title="' . $friendrequests_count . ' ' . elgg_echo('adf_platform:friendinvite') . '">' . $friendrequests_count . '</a></li>';
  } else if ($friendrequests_count > 1) {
    $friendrequests = '<li class="invites"><a href="' . $url . 'friend_request/' . $ownusername . '" title="' . $friendrequests_count . ' ' . elgg_echo('adf_platform:friendinvites') . '">' . $friendrequests_count . '</a></li>';
  }
  
}
?>

      <header>
        <div class="interne">
          <h1><a href="<?php echo $url; ?>" title="<?php echo elgg_echo('adf_platform:gotohomepage'); ?>"><?php
          echo elgg_get_plugin_setting('headertitle', 'adf_public_platform');
          //'<span>D</span>epartements-en-<span>R</span>eseaux.<span class="minuscule">fr</span>';
          ?></a></h1>
          <?php if (elgg_is_logged_in()) { ?>
            <a href="<?php echo $url . 'profile/' . $ownusername; ?>"><span id="adf-profil"><img src="<?php echo $own->getIconURL('topbar'); ?>" alt="<?php echo $own->name; ?>" /> <?php echo $own->name; ?> (profil)</span></a>
            <nav>
              <ul>
                <li id="home"><a href="<?php echo $url; ?>">Tableau de bord</a>
                  <?php if ($groups) { echo '<ul>' . $groups . '</ul>'; } ?>
                </li>
                <li id="msg"><a href="<?php echo $url . 'messages/inbox/' . $ownusername; ?>"><?php echo elgg_echo('messages'); ?></a></li>
                <?php if ($messages) { echo $messages; } ?>
                <li id="man"><a href="<?php echo $url . 'friends/' . $ownusername; ?>"><?php echo elgg_echo('friends'); ?></a></li>
                <?php echo $friendrequests; ?>
                <li><a href="<?php echo $url . 'settings/user/' . $ownusername; ?>"><?php echo elgg_echo('adf_platform:usersettings'); ?></a></li>
                    <!--
                <li><?php echo elgg_echo('adf_platform:myprofile'); ?></a>
                    <li><a href="<?php echo $url . 'profile/' . $ownusername . '/edit'; ?>">Compléter mon profil</a></li>
                    <li><a href="<?php echo $url . 'avatar/edit/' . $ownusername . '/edit'; ?>">Changer la photo du profil</a></li>
                </li>
                    //-->
                <?php if (elgg_is_admin_logged_in()) { ?>
                  <li><a href="<?php echo $url . 'admin/dashboard/'; ?>"><?php echo elgg_echo('admin'); ?></a></li>
                <?php } ?>
                <li><a href="<?php echo $url . 'pages/view/182/premiers-pas'; ?>"><?php echo elgg_echo('adf_platform:help'); ?></a></li>
                <li><?php echo elgg_view('output/url', array('href' => $url . "action/logout", 'text' => elgg_echo('logout'), 'is_action' => true)); ?></li>
              </ul>
            </nav>
          <?php } else {
            echo '<nav><ul><li><a href="' . $url . '">' . elgg_echo('adf_platform:loginregister') . '</a></li></ul></nav>';
          } ?>
        </div>
      </header>
      
      <?php if (elgg_is_logged_in()) { ?>
        <div id="transverse">
          <div class="interne">
            <nav>
              <ul>
                <li class="home"><a href="<?php echo $url; ?>" <?php if (full_url() == $url) { echo 'class="active elgg-state-selected"'; } ?> >Accueil</a></li>
                
                <?php /* activity : Fil d'activité du site */ ?>
                
                <li class="groups"><a <?php if(elgg_in_context('groups') || (elgg_instanceof(elgg_get_page_owner_entity(), 'group'))) { echo 'class="active elgg-state-selected"'; } ?> href="javascript:void(0);">Mes projets</a>
                  <ul>
                    <?php /*
                    <li><a href="<?php echo $url . 'groups/all'; ?>"><?php echo elgg_echo('adf_platform:joinagroup'); ?></a></li>
                    */ ?>
                    <?php echo $groups; ?>
                  </ul>
                </li>
                <?php echo $invites; ?>
                
                <?php
                /* Pas de thématiques (groupes seulement)
                if (elgg_is_active_plugin('categories')) { ?>
                <li class="thematiques"><a <?php if(elgg_in_context('categories')) { echo 'class="active elgg-state-selected"'; } ?> href="<?php echo $url . 'categories'; ?>"><?php echo elgg_echo('adf_platform:categories'); ?></a>
                  <ul>
                    <li><a href="<?php echo $url; ?>categories"><?php echo elgg_echo('adf_platform:categories:all'); ?></a></li>
                    <?php echo $categories; ?>
                  </ul>
                </li>
                <?php }
                */
                ?>
                
                <?php /* Pas d'annuaire
                <li class="members"><a <?php if(elgg_in_context('members') || elgg_in_context('profile')) { echo 'class="active elgg-state-selected"'; } ?> href="<?php echo $url . 'members'; ?>"><?php echo elgg_echo('adf_platform:directory'); ?></a></li>
                */ ?>
                
                <?php /* Pas d'agenda
                <li class="agenda"><a <?php if (elgg_in_context('event_calendar') && !elgg_in_context('groups')) { echo 'class="active elgg-state-selected"'; } ?> href="<?php echo $url . 'event_calendar/list'; ?>"><?php echo elgg_echo('adf_platform:event_calendar'); ?></a></li>
                */ ?>
                
              </ul>
            </nav>
            <?php /* Pas d'agenda
            <form action="<?php echo $url . 'search'; ?>" method="post">
              <?php $search_text = 'Trouvez des groupes, des fichiers...'; ?>
              <label for="adf-search-input" class="invisible"><?php echo $search_text; ?></label>
              <input type="text" id="adf-search-input" name="q" value="<?php echo $search_text; ?>" />
              <input type="image" id="adf-search-submit-button" src="<?php echo $urlicon; ?>recherche.png" value="<?php echo elgg_echo('adf_platform:search'); ?>" />
            </form>
            */ ?>
          </div>
        </div>
      <?php } ?>
      
