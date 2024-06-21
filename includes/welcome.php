<?php

if ( ! function_exists( 'rqsat_show_welcome_panel' ) ) {
	function rqsat_show_welcome_panel() {
		if ( get_current_screen()->base !== 'dashboard' ) {
			return;
		}
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
		<div id="custom_panel" class="welcome-panel">
			<div class="welcome-panel-content">
				<div class="welcome-panel-header">
					<h2><?php printf( __( 'Welcome to the %1$s Admin Area :)', 'simple-admin-theme' ), get_bloginfo( 'name' ) ); ?>
					</h2>
					<p><?php _e( 'Here you can view and manage your website\'s content and structure.', 'simple-admin-theme' ); ?>
					</p>
				</div>
				<div class="welcome-panel-column-container">
					<div class="welcome-panel-column">
						<svg></svg>
						<div class="welcome-panel-column-content">
							<p>
								<?php if ( $intro_text ) {
									echo $intro_text;
								} else {
									_e( 'A short video tutorial has been prepared for you to guide you with the WordPress admin panel. To see more tutorials, you can visit our site. Feel free to contact us for more detailed support.', 'simple-admin-theme' );
								} ?>
							</p>
						</div>
					</div>
					<div class="welcome-panel-column">
						<svg></svg>
						<div class="welcome-panel-column-content">
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
						</div>
					</div>
					<div class="welcome-panel-column">
						<svg></svg>
						<div class="welcome-panel-column-content">
							<?php if ( $video_source == 'aparat' ) { ?>
								<div id="aparat_container">
									<script type="text/JavaScript"
										src="<?php echo str_replace( "/v/", "/embed/", $video_url ); ?>?data[rnddiv]=aparat_container&data[responsive]=yes"></script>
								</div>
							<?php } elseif ( $video_source == 'youtube' ) { ?>
								<div class="youtube-container">
									<iframe src="<?php echo str_replace( "watch?v=", "embed/", $video_url ); ?>"
										title="YouTube video player" frameborder="0"
										allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
										referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
								</div>
							<?php } else {
								_e( 'No video tutorial is set!', 'simple-admin-theme' );
							} ?>
							<div class="social-container">
								<div><a href="https://www.instagram.com/<?php echo $instagram_url; ?>" target="_blank"
										class="instagram"><span class="dashicons dashicons-instagram"></span></a></div>
								<div><a href="https://wa.me/<?php echo $whatsapp_url; ?>" target="_blank" class="whatsapp"><span
											class="dashicons dashicons-whatsapp"></span></a></div>
								<div><a href="https://youtube.com/@<?php echo $youtube_url; ?>" target="_blank"
										class="youtube"><span class="dashicons dashicons-youtube"></span></a></div>
								<div><a href="<?php echo $linkedin_url; ?>" target="_blank" class="linkedin"><span
											class="dashicons dashicons-linkedin"></span></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			jQuery(document).ready(function ($) {
				$('#welcome-panel').after($('#custom_panel').show());
			});
		</script>
	<?php }
}
