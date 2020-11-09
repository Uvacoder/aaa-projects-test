<?php
/**
 * Settings Page
 *
 * @package WP Trending Post Slider and Widget
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

$wtspw_dates = array( 'F j, Y', 'M j, Y', 'Y-m-d', 'm/d/Y', 'd/m/Y' ); // Dates array
?>

<div class="wrap wtpsw-settings">

<h2><?php _e( 'Trending Post - Settings', 'wtpsw' ); ?></h2><br />

<?php
if( isset($_GET['settings-updated']) && $_GET['settings-updated'] == 'true' ) {
	echo '<div id="message" class="updated notice notice-success is-dismissible">
			<p>'.__("Your changes saved successfully.", "wtpsw").'</p>
		  </div>';
}
?>

<form action="options.php" method="POST" id="wtpsw-settings-form" class="wtpsw-settings-form">
	
	<?php
	    settings_fields( 'wtpsw_plugin_options' );
	    global $wtpsw_options;
	?>

	<div id="wtpsw-general-settings" class="post-box-container wtpsw-general-settings">
		<div class="metabox-holder">
			<div class="meta-box-sortables ui-sortable">
				<div id="general" class="postbox">

					<button class="handlediv button-link" type="button"><span class="toggle-indicator"></span></button>

						<!-- Settings box title -->
						<h3 class="hndle">
							<span><?php _e( 'General Settings', 'wtpsw' ); ?></span>
						</h3>
						
						<div class="inside">
						
						<table class="form-table wtpsw-general-settings-tbl">
							<tbody>
								
								<tr>
									<th scope="row">
										<label for="wtpsw-post-within"><?php _e('Post Within', 'wtpsw'); ?>:</label>
									</th>
									<td>
										<select id="wtpsw-post-within" class="wtpsw-post-within" name="wtpsw_options[post_range]">
											<option value=""><?php _e('All Time', 'wtpsw'); ?></option>
											<option value="daily" <?php selected( $wtpsw_options['post_range'], 'daily' ); ?>><?php _e('Today', 'wtpsw'); ?></option>
											<option value="last_day" <?php selected( $wtpsw_options['post_range'], 'last_day' ); ?>><?php _e('Last Day', 'wtpsw'); ?></option>
											<option value="last_week" <?php selected( $wtpsw_options['post_range'], 'last_week' ); ?>><?php _e('Last 7 Days', 'wtpsw'); ?></option>
											<option value="last_month" <?php selected( $wtpsw_options['post_range'], 'last_month' ); ?>><?php _e('Last Month', 'wtpsw'); ?></option>
										</select><br/>
										<span class="description"><?php _e('Select time range for post visibility.', 'wtpsw'); ?></span>
									</td>
								</tr>
								
								<tr>
									<th scope="row">
										<label><?php _e('Date Format', 'wtpsw'); ?>:</label>
									</th>
									<td>
										<?php foreach ($wtspw_dates as $date_key => $date_val) { ?>
											<label title="<?php echo $date_val; ?>"><input type="radio" name="wtpsw_options[date_format]" value="<?php echo $date_val; ?>" class="wtpsw-post-date-format" <?php checked( $wtpsw_options['date_format'], $date_val ); ?> /><?php echo date( $date_val, current_time('timestamp') ); ?></label><br/>
										<?php } ?>
										<span class="description"><?php _e('Select date format.', 'wtpsw'); ?></span>
									</td>
								</tr>

								<tr>
									<td colspan="2" valign="top" scope="row">
										<input type="submit" id="wtpsw-settings-submit" name="wtpsw-settings-submit" class="button button-primary" value="<?php _e('Save Changes','wtpsw');?>" />
									</td>
								</tr>
							</tbody>
						 </table>

					</div><!-- .inside -->
				</div><!-- #general -->
			</div><!-- .meta-box-sortables ui-sortable -->
		</div><!-- .metabox-holder -->
	</div><!-- #wtpsw-general-settings -->

</form><!-- end .wtpsw-settings-form -->

</div><!-- end .wtpsw-settings -->