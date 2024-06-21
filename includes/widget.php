<?php

if ( ! function_exists( 'rqsat_remove_all_admin_widgets' ) ) {
	function rqsat_remove_all_admin_widgets() {
		global $wp_meta_boxes;
		$wp_meta_boxes = array();
	}
}

if ( get_option( 'rqsat_disable_widgets' ) == 'disable_all' ) {
	add_action( 'wp_dashboard_setup', 'rqsat_remove_all_admin_widgets' );
}

if ( ! function_exists( 'rqsat_dashboard_widget_display' ) ) {
	function rqsat_dashboard_widget_display() {
		$phone_number = get_option( 'rqsat_phone_number' );
		$email_address = get_option( 'rqsat_email_address' );
		$tutorials_url = get_option( 'rqsat_tutorials_url' );
		$clientarea_url = get_option( 'rqsat_clientarea_url' );
		$intro_text = get_option( 'rqsat_intro_text' );
		$video_source = get_option( 'rqsat_video_source' );
		$video_url = get_option( 'rqsat_video_url' );
		$instagram_url = get_option( 'rqsat_instagram_url' );
		$whatsapp_url = get_option( 'rqsat_whatsapp_url' );
		$youtube_url = get_option( 'rqsat_youtube_url' );
		$linkedin_url = get_option( 'rqsat_linkedin_url' );
		?>
		<div class="box-grid-container">
			<div class="support-box-col">
				<span class="dashicons dashicons-email-alt"></span>
				<h3><?php echo $phone_number; ?></h3>
				<p>
					<?php _e( 'Phone Number', 'simple-admin-theme' ); ?>
				</p>
			</div>
			<div class="support-box-col">
				<span class="dashicons dashicons-phone"></span>
				<a href="mailto:<?php echo $email_address; ?>" target="_blank">
					<h3><?php echo $email_address; ?></h3>
				</a>
				<p>
					<?php _e( 'Email Address', 'simple-admin-theme' ); ?>
				</p>
			</div>
			<div class="support-box-col">
				<span class="dashicons dashicons-editor-help"></span>
				<a href="<?php echo $tutorials_url; ?>" target="_blank">
					<h3><?php echo $tutorials_url; ?></h3>
				</a>
				<p>
					<?php _e( 'Tutorials URL', 'simple-admin-theme' ); ?>
				</p>
			</div>
			<div class="support-box-col">
				<span class="dashicons dashicons-admin-users"></span>
				<a href="<?php echo $clientarea_url; ?>" target="_blank">
					<h3><?php echo $clientarea_url; ?></h3>
				</a>
				<p>
					<?php _e( 'Client Area URL', 'simple-admin-theme' ); ?>
				</p>
			</div>
		</div>
		<div class="support-box-row">
			<p>
				<?php if ( $intro_text ) {
					echo $intro_text;
				} else {
					_e( 'A short video tutorial has been prepared for you to guide you with the WordPress admin panel. To see more tutorials, you can visit our site. Feel free to contact us for more detailed support.', 'simple-admin-theme' );
				} ?>
			</p>
		</div>
		<?php if ( $video_source == 'aparat' ) { ?>
			<div id="aparat_container">
				<script type="text/JavaScript"
					src="<?php echo str_replace( "/v/", "/embed/", $video_url ); ?>?data[rnddiv]=aparat_container&data[responsive]=yes"></script>
			</div>
		<?php } elseif ( $video_source == 'youtube' ) { ?>
			<div class="youtube-container">
				<iframe src="<?php echo str_replace( "watch?v=", "embed/", $video_url ); ?>" title="YouTube video player"
					frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
					referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
			</div>
		<?php } else {
			_e( 'No video tutorial is set!', 'simple-admin-theme' );
		} ?>
		<div class="social-container">
			<div><a href="https://www.instagram.com/<?php echo $instagram_url; ?>" target="_blank" class="instagram"><span
						class="dashicons dashicons-instagram"></span></a></div>
			<div><a href="https://wa.me/<?php echo $whatsapp_url; ?>" target="_blank" class="whatsapp"><span
						class="dashicons dashicons-whatsapp"></span></a></div>
			<div><a href="https://youtube.com/@<?php echo $youtube_url; ?>" target="_blank" class="youtube"><span
						class="dashicons dashicons-youtube"></span></a></div>
			<div><a href="<?php echo $linkedin_url; ?>" target="_blank" class="linkedin"><span
						class="dashicons dashicons-linkedin"></span></a></div>
		</div>
		<?php
	}
}


if ( ! function_exists( 'rqsat_register_dashboard_widget' ) ) {
	function rqsat_register_dashboard_widget() {
		global $wp_meta_boxes;

		wp_add_dashboard_widget(
			'rqsat_dashboard_widget',
			__( 'Support Information', 'simple-admin-theme' ),
			'rqsat_dashboard_widget_display'
		);

		$dashboard = $wp_meta_boxes['dashboard']['normal']['core'];

		$my_widget = array( 'rqsat_dashboard_widget' => $dashboard['rqsat_dashboard_widget'] );
		unset( $dashboard['rqsat_dashboard_widget'] );

		$sorted_dashboard = array_merge( $my_widget, $dashboard );
		$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
	}
}