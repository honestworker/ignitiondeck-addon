<?php

//error_reporting(E_ALL);

//@ini_set('display_errors', 1);

/*
Plugin Name: IgnitionDeck Commerce Addon
URI: http://IgnitionDeck.com
Description: 
Version: 1.0.0
Author: Honestworker818
Author URI: http://github.com/honestworker
License: GPL2
*/

define( 'IDC_ADDON_PATH', plugin_dir_path(__FILE__) );

include_once 'idcommerce-addon-filters.php';
include_once 'idcommerce-addon-functions.php';

function md_details() {
    global $permalink_structure;
    if (empty($permalink_structure)) {
        $prefix = '&';
    }
    else {
        $prefix = '?';
    }
    if (is_user_logged_in() && !isset($current_user)) {
        $current_user = wp_get_current_user();
    }
    $user_id = $current_user->ID;
    $enable_details = get_user_meta($user_id, 'enable_details', true);
    $user_details_args = array(
        'post_type' => 'ignition_detail',
        'author' => $user_id,
        'posts_per_page' => -1,
        'post_status' => array('draft', 'pending', 'publish')
    );
    $user_details = apply_filters('id_user_details', get_posts(apply_filters('id_user_details_args', $user_details_args)));

    echo '<li class="dashtab user_details'.(isset($_GET['user-details']) ? ' active' : '').'"><a href="';
    if (isset($current_user)) {
        echo the_permalink() . $prefix . 'user-details=' . $current_user->ID;
    }
    echo '">'.(isset($current_user) ? __('Details', 'memberdeck') : '').'</a></li>';
}
add_action('md_profile_extratabs', 'md_details', 3);