<h2 class="title"><?php _e( 'UI Settings for the Dashboard', 'simple-admin-theme' ) ?></h2>
<table class="form-table">
	<tr valign="top">
		<th scope="row"><?php _e( 'Main Color', 'simple-admin-theme' ) ?></th>
		<td><input type="color" id="rqsat_maincolor" name="rqsat_maincolor"
				value="<?php echo get_option( 'rqsat_maincolor' ); ?>" class="main-color-field"
				data-default-color="#1e73be">
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Main Font Family', 'simple-admin-theme' ) ?></th>
		<?php $options = get_option( 'rqsat_main_font' ); ?>
		<td>
			<select name="rqsat_main_font" id="rqsat_main_font">
				<option value="vazir" <?php echo ( $options == "vazir" ) ? 'selected="selected"' : '' ?>>
					<?php _e( 'VazirMatn', 'simple-admin-theme' ) ?>
				</option>
				<option value="iransans" <?php echo ( $options == "iransans" ) ? 'selected="selected"' : '' ?>>
					<?php _e( 'IranSansX', 'simple-admin-theme' ) ?>
				</option>
				<option value="yekanbakh" <?php echo ( $options == "yekanbakh" ) ? 'selected="selected"' : '' ?>>
					<?php _e( 'YekanBakh', 'simple-admin-theme' ) ?>
				</option>
			</select>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Login Background Image', 'simple-admin-theme' ) ?></th>
		<td>
			<input type="text" name="rqsat_login_bg" id="rqsat_login_bg" class="regular-text"
				value="<?php echo get_option( 'rqsat_login_bg' ); ?>">
			<input type="button" name="loginbg-upload-btn" id="loginbg-upload-btn" class="button-secondary"
				value="<?php _e( 'Select Background Image', 'simple-admin-theme' ) ?>">
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Disable other Widgets', 'simple-admin-theme' ) ?></th>
		<td>
			<fieldset>
				<p><label>
						<input name="rqsat_disable_widgets" type="radio" value="disable_none" class="tog" <?php if ( get_option( 'rqsat_disable_widgets' ) == 'disable_none' ) {
							echo 'checked>';
						} else {
							echo '>';
						}
						_e( 'Disable None.', 'simple-admin-theme' ) ?> </label>
				</p>
				<p><label>
						<input name="rqsat_disable_widgets" type="radio" value="disable_all" class="tog" <?php if ( get_option( 'rqsat_disable_widgets' ) == 'disable_all' ) {
							echo 'checked>';
						} else {
							echo '>';
						}
						_e( 'Disable All.', 'simple-admin-theme' ) ?></label>
				</p>
			</fieldset>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Custom Widget Format', 'simple-admin-theme' ) ?></th>
		<td>
			<fieldset>
				<p><label>
						<input name="rqsat_widget_format" type="radio" value="horizontal" class="tog" <?php if ( get_option( 'rqsat_widget_format' ) == 'horizontal' ) {
							echo 'checked>';
						} else {
							echo '>';
						}
						_e( 'Horizontal Widget (Welcome Screen)', 'simple-admin-theme' ) ?> </label>
				</p>
				<p><label>
						<input name="rqsat_widget_format" type="radio" value="vertical" class="tog" <?php if ( get_option( 'rqsat_widget_format' ) == 'vertical' ) {
							echo 'checked>';
						} else {
							echo '>';
						}
						_e( 'Vertical Widget (Regular)', 'simple-admin-theme' ) ?></label>
				</p>
			</fieldset>
		</td>
	</tr>
</table>