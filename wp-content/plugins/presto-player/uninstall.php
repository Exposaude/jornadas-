<?php

use PrestoPlayer\Database\Table;
use PrestoPlayer\Database\Visits;
use PrestoPlayer\Database\Presets;
use PrestoPlayer\Models\ReusableVideo;

// Exit if accessed directly.
if (!defined('WP_UNINSTALL_PLUGIN')) exit;

// get plugin settings
$uninstall_settings = get_option('presto_player_uninstall');

// uninstall all data on delete if selected
if (isset($uninstall_settings['uninstall_data']) && $uninstall_settings['uninstall_data']) {
    // license
    delete_option('presto_player_license');
    delete_option('presto_player_license_data');

    // settings
    delete_option('presto_player_analytics');
    delete_option('presto_player_google_analytics');
    delete_option('presto_player_branding');
    delete_option('presto_player_bunny_keys');
    delete_option('presto_player_bunny_storage_zones');
    delete_option('presto_player_bunny_pull_zones');
    delete_option('presto_player_bunny_uid');

    // notices
    delete_option('presto_player_dismissed_notice_nginx_rules');
    delete_option('presto_player_presto_player_bunny_uid');
    delete_option('presto_player_dismissed_notice_presto_player_reusable_notice');

    // uninstall option
    delete_option('presto_player_uninstall');

    // tables
    delete_option('presto_preset_seed_version');
    delete_option('presto_player_visits_database_version');
    delete_option('presto_player_videos_database_version');
    delete_option('presto_player_presets_database_version');
    delete_option('presto_zone_token');
    delete_option('presto_player_visits_upgrade_version');

    // delete our tables
    $table = new Table();
    (new Visits($table))->uninstall();
    (new Presets($table))->uninstall();

    // delete all reusable videos
    $videos = new ReusableVideo();
    $all_videos = $videos->all(['fields' => 'ids']);
    foreach ($all_videos as $video_id) {
        wp_delete_post($video_id, true);
    }
}
