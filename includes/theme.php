<?php
// load custom styles and scripts in admin pages
if ( ! function_exists( 'rqsat_admin_theme_style' ) ) {
	function rqsat_admin_theme_style() {
		$main_color = get_option( 'rqsat_maincolor' );
		$main_font = get_option( 'rqsat_main_font' );
		wp_enqueue_style( 'main-style', plugins_url( 'assets/css/style.css', __DIR__ ) );
		$inline_style = ':root { --main-color:' . $main_color . '; --main-font:' . $main_font . ';}';
		wp_add_inline_style( 'main-style', $inline_style );
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_media();
		wp_enqueue_script( 'my-script-handle', plugins_url( 'assets/js/main.js', __DIR__ ), array( 'wp-color-picker' ), false, true );
	}
}


// change logo in admin top bar
if ( ! function_exists( 'rqsat_change_admin_logo' ) ) {
	function rqsat_change_admin_logo() { ?>
		<style type="text/css">
			#wpadminbar #wp-admin-bar-wp-logo>.ab-item {
				padding: 0 7px;
				background-image: url('<?php echo get_site_icon_url(); ?>') !important;
				background-size: 100%;
				background-position: center;
				background-repeat: no-repeat;
				opacity: 0.8;
			}

			#wpadminbar #wp-admin-bar-wp-logo>.ab-item .ab-icon:before {
				content: " ";
				top: 2px;
			}
		</style>
	<?php }
}
