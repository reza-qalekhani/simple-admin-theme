<?php

if ( ! function_exists( 'rqsat_load_simple_admin_theme_settings' ) ) {
	function rqsat_load_simple_admin_theme_settings() { ?>
		<div class="wrap">
			<h1><?php _e( 'Simple Admin Dashboard Theme Settings', 'simple-admin-theme' ) ?></h1>
			<p><?php _e( 'On this page, you can customize the settings of the Simple Admin Dashboard Theme.', 'simple-admin-theme' ) ?>
			</p>
			<form method="post" action="options.php">
				<?php settings_fields( 'admin_theme_settings' );
				do_settings_sections( 'admin_theme_settings' );

				include_once ( plugin_dir_path( __FILE__ ) . 'support.php' );
				include_once ( plugin_dir_path( __FILE__ ) . 'social.php' );
				include_once ( plugin_dir_path( __FILE__ ) . 'interface.php' );

				submit_button(); ?>
			</form>
		</div>
	<?php }
}



if ( ! function_exists( 'rqsat_dashboard_menu' ) ) {
	function rqsat_dashboard_menu() {
		$page_title = __( 'Simple Admin Dashboard Theme Settings', 'simple-admin-theme' );
		$menu_title = __( 'Admin Dashboard', 'simple-admin-theme' );
		$capability = 'manage_options';
		$menu_slug = 'simple-admin-theme';
		$function = 'rqsat_load_simple_admin_theme_settings';
		$icon_url = 'dashicons-media-code';
		$position = 100;
		add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function, $position );
	}
}

if ( ! function_exists( "rqsat_update_simple_admin_theme_settings" ) ) {
	function rqsat_update_simple_admin_theme_settings() {
		register_setting( 'admin_theme_settings', 'rqsat_phone_number' );
		register_setting( 'admin_theme_settings', 'rqsat_email_address' );
		register_setting( 'admin_theme_settings', 'rqsat_tutorials_url' );
		register_setting( 'admin_theme_settings', 'rqsat_clientarea_url' );
		register_setting( 'admin_theme_settings', 'rqsat_intro_text' );
		register_setting( 'admin_theme_settings', 'rqsat_video_source' );
		register_setting( 'admin_theme_settings', 'rqsat_video_url' );
		register_setting( 'admin_theme_settings', 'rqsat_instagram_url' );
		register_setting( 'admin_theme_settings', 'rqsat_whatsapp_url' );
		register_setting( 'admin_theme_settings', 'rqsat_youtube_url' );
		register_setting( 'admin_theme_settings', 'rqsat_linkedin_url' );
		register_setting( 'admin_theme_settings', 'rqsat_maincolor' );
		register_setting( 'admin_theme_settings', 'rqsat_main_font' );
		register_setting( 'admin_theme_settings', 'rqsat_login_bg' );
		register_setting( 'admin_theme_settings', 'rqsat_disable_widgets' );
		register_setting( 'admin_theme_settings', 'rqsat_widget_format' );
	}
}


add_action( 'admin_menu', 'rqsat_dashboard_menu' );
add_action( 'admin_init', 'rqsat_update_simple_admin_theme_settings' );