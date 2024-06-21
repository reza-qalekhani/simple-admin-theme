<h2 class="title"><?php _e( 'Designer Team\'s Support Information', 'simple-admin-theme' ) ?></h2>
<table class="form-table">
	<tr valign="top">
		<th scope="row"><?php _e( 'Phone Number', 'simple-admin-theme' ) ?></th>
		<td><input type="text" name="rqsat_phone_number" value="<?php echo get_option( 'rqsat_phone_number' ); ?>" />
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Email Address', 'simple-admin-theme' ) ?></th>
		<td><input class="regular-text" type="text" name="rqsat_email_address"
				value="<?php echo get_option( 'rqsat_email_address' ); ?>" />
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Tutorials URL', 'simple-admin-theme' ) ?></th>
		<td><input class="regular-text" type="text" name="rqsat_tutorials_url"
				value="<?php echo get_option( 'rqsat_tutorials_url' ); ?>" />
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Client Area URL', 'simple-admin-theme' ) ?></th>
		<td><input class="regular-text" type="text" name="rqsat_clientarea_url"
				value="<?php echo get_option( 'rqsat_clientarea_url' ); ?>" />
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Intro Text', 'simple-admin-theme' ) ?></th>
		<td><textarea name="rqsat_intro_text" rows="6"
				cols="41" /><?php echo get_option( 'rqsat_intro_text' ); ?></textarea>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Video Source', 'simple-admin-theme' ) ?></th>
		<td>
			<fieldset>
				<p><label>
						<input name="rqsat_video_source" type="radio" value="youtube" class="tog" <?php if ( get_option( 'rqsat_video_source' ) == 'youtube' ) {
							echo 'checked>';
						} else {
							echo '>';
						}
						_e( 'YouTube', 'simple-admin-theme' ) ?> </label>
				</p>
				<p><label>
						<input name="rqsat_video_source" type="radio" value="aparat" class="tog" <?php if ( get_option( 'rqsat_video_source' ) == 'aparat' ) {
							echo 'checked>';
						} else {
							echo '>';
						}
						_e( 'Aparat', 'simple-admin-theme' ) ?></label>
				</p>
			</fieldset>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Video URL', 'simple-admin-theme' ) ?></th>
		<td><input class="regular-text" type="text" name="rqsat_video_url"
				value="<?php echo get_option( 'rqsat_video_url' ); ?>" />
		</td>
	</tr>
</table>