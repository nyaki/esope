<?php
/** Elgg notification_messages plugin language
 * @author Florian DANIEL - Facyla
 * @copyright Florian DANIEL - Facyla 2014
 * @link http://id.facyla.net/
 */

$french = array(

	'notification_messages' => "Message de notification",
	
	// Actions
	'notification_messages:create' => "a publié",
	'notification_messages:delete' => "a supprimé",
	'notification_messages:update' => "a mis à jour",
	
	// Settings
	'notification_messages:settings:objects' => "Nouvelles publications (objets)",
	'notification_messages:settings:details' => "En activant les messages de notification détaillés pour chacun des types de contenus suivants, vous pouvez remplacer le titre du mail par défaut par un titre explicite composé sous la forme : [Type de publication Nom du groupe ou du membre] Titre du contenu<br />Cette forme facilite également l'identification de conversations par les messageries.",
	'notification_messages:object:subtype' => "Type d'objet",
	'notification_messages:setting' => "Réglage",
	'notification_messages:subject:default' => "Sujet par défaut",
	'notification_messages:subject:allow' => "Sujet amélioré",
	'notification_messages:subject:deny' => "Bloqué (pas de notification)",
	'notification_messages:settings:group_topic_post' => "Activer pour les réponses dans les forums",
	'notification_messages:settings:comments' => "Commentaires",
	'notification_messages:settings:comments:details' => "Si vous avez activé ce plugin, vous souhaitez probablement activer ce réglage, de manière à utiliser le même titre pour les commentaires que pour les nouvelles publications.",
	'notification_messages:settings:generic_comment' => "Activer pour les commentaires génériques",
	
	// Notification subject
	'notification_messages:objects:subject' => "[%s | %s] %s",
	'notification_messages:objects:subject:nocontainer' => "[%s] %s",
	'notification_messages:untitled' => "(sans titre)",
	
	
	// Object:notifications hook control
	'notification_messages:settings:object_notifications_hook' => "Activer le hook sur object:notifications",
	'notification_messages:settings:object_notifications_hook:subtext' => "Ce hook permet à d'autres plugins d'ajouter facilement des pièces jointes aux emails envoyés, de la même manière qu'ils peuvent modifier le contenu des messages. Attention car il peut causer des problèmes de compatibilité dans certains cas, en bloquant l'utilisation du hook par d'autres plugins -notamment advanced_notifications- car il prend en charge le processus d'envoi et répond donc \"true\" au hook.<br />Si vous ne savez pas quoi faire, laissez le réglage par défaut.",
	
);

add_translation("fr", $french);

