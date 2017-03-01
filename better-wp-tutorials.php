<?php
/**
* Plugin Name: Better WP Tutorials
* Plugin URI: https://russellenvy.com
* Description: Creates short codes for user interactive tutorials. If a user is logged in, outputs pretty links, linking the user to their site defined in the WordPress Profile form. If user is passing by, output ugly text and convince them to become a free member.
* Version: 0.0.1
* Author: Russell Aaron
* Author URI: https://russellenvy.com
* Text Domain: better_wp_tutorials
* License: GPL2
*/
if ( ! defined( 'ABSPATH' ) ) {exit;}
//code used from Hugh Lashbrooke - http://www.hughlashbrooke.com/2012/07/wordpress-add-plugin-settings-link-to-plugins-page/
  function bwptuts_settings_link( $links ) {
  $settings_link = '<a href="/wp-admin/options-general.php?page=better-wp-tutorials">' . __( 'Settings' ) . '</a>';
      array_push( $links, $settings_link );
    	return $links;
  }
  $plugin = plugin_basename( __FILE__ );
  add_filter( "plugin_action_links_$plugin", 'bwptuts_settings_link' );
include 'create-menu.php';
include 'bwptuts.php';
include 'shortcodes.php';
?>