<?php
/*
Plugin Name: Simple Admin Dashboard Theme
Plugin URI: https://byreza.net
Description: Simple Admin Dashboard
Author: Reza Qalekhani
Version: 1.0
Author URI: https://byreza.net
Text Domain: simple-admin-theme
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

include_once ( plugin_dir_path( __FILE__ ) . 'includes/widget.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/theme.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/settings.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/welcome.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/login.php' );

// load plugin text domain
if ( ! function_exists( 'rqsat_load_textdomain' ) ) {
	function rqsat_load_textdomain() {
		load_plugin_textdomain( 'simple-admin-theme', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
}

// load all hooks
add_action( 'init', 'rqsat_load_textdomain' );
add_filter( 'login_headerurl', 'rqsat_login_logo_url' );
add_filter( 'login_headertext', 'rqsat_login_logo_url_title' );
add_action( 'login_head', 'rqsat_load_custom_login_bg' );
add_action( 'wp_before_admin_bar_render', 'rqsat_change_admin_logo' );
add_action( 'admin_enqueue_scripts', 'rqsat_admin_theme_style' );
add_action( 'login_enqueue_scripts', 'rqsat_login_theme_style' );
add_action( 'elementor/editor/after_enqueue_styles', 'rqsat_admin_theme_style' );
if ( get_option( 'rqsat_widget_format' ) == 'horizontal' ) {
	add_action( 'admin_footer', 'rqsat_show_welcome_panel' );
} else {
	add_action( 'wp_dashboard_setup', 'rqsat_register_dashboard_widget' );
}