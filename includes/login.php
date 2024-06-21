<?php
// load custom styles and scripts in login page
if ( ! function_exists( 'rqsat_login_theme_style' ) ) {
	function rqsat_login_theme_style() {
		$main_color = get_option( 'rqsat_maincolor' );
		$main_font = get_option( 'rqsat_main_font' );
		wp_enqueue_style( 'login-style', plugins_url( 'assets/css/login.css', __DIR__ ) );
		$inline_style = ':root { --main-color:' . $main_color . '; --main-font:' . $main_font . ';}';
		wp_add_inline_style( 'login-style', $inline_style );
	}
}

// load background image and logo in login page
if ( ! function_exists( 'rqsat_load_custom_login_bg' ) ) {
	function rqsat_load_custom_login_bg() { ?>
		<style type="text/css">
			body.rtl {
				background-image: url('<?php echo get_option( 'rqsat_login_bg' ); ?>');
			}

			#login h1 a,
			.login h1 a {
				background-image: url('<?php echo get_site_icon_url(); ?>');
				height: 100px;
				width: 100px;
				background-size: 100px 100px;
				background-repeat: no-repeat;
				margin-bottom: 30px;
			}
		</style>

	<?php }
}

// change logo url in login page
if ( ! function_exists( 'rqsat_login_logo_url' ) ) {
	function rqsat_login_logo_url() {
		return home_url();
	}
}

// change logo title in login page
if ( ! function_exists( 'rqsat_login_logo_url_title' ) ) {
	function rqsat_login_logo_url_title() {
		return get_bloginfo( 'name' );
	}
}