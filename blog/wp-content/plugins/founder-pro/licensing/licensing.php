<?php

// add input for saving and activating license to Founder Dashboard
function ct_founder_pro_add_licensing_form() {

	$license 	= get_option( 'ct_founder_pro_license_key' );
	$status 	= get_option( 'ct_founder_pro_license_key_status' );
	?>
	<div class="license-container">
		<form method="post" action="options.php">

			<?php settings_fields('ct_founder_pro_plugin_license'); ?>
			<h3><?php _e('Receive updates', 'founder-pro'); ?></h3>
			<p><?php _e('Activate the license key you received in the purchase email to get Founder Pro updates', 'founder-pro'); ?>.</p>
			<table class="form-table">
				<tbody>
				<tr valign="top">
					<th scope="row" valign="top">
						<?php _e('License Key','founder-pro'); ?>
					</th>
					<td>
						<input id="ct_founder_pro_license_key" name="ct_founder_pro_license_key" type="text" class="regular-text" value="<?php echo esc_attr( $license ); ?>" />
						<label class="description" for="ct_founder_pro_license_key"><?php _e('Enter your license key','founder-pro'); ?></label>
					</td>
				</tr>
				<?php if( false !== $license ) { ?>
					<tr valign="top">
						<th scope="row" valign="top">
							<?php _e('Activate License','founder-pro'); ?>
						</th>
						<td>
							<?php if( $status !== false && $status == 'valid' ) { ?>
								<?php wp_nonce_field( 'ct_founder_pro_nonce', 'ct_founder_pro_nonce' ); ?>
								<input type="submit" class="button-secondary" name="ct_founder_pro_license_deactivate" value="<?php _e('Deactivate License','founder-pro'); ?>"/>
								<span class="active"><?php _e('active','founder-pro'); ?></span>
							<?php } else {
								wp_nonce_field( 'ct_founder_pro_nonce', 'ct_founder_pro_nonce' ); ?>
								<input type="submit" class="button-secondary" name="ct_founder_pro_license_activate" value="<?php _e('Activate License','founder-pro'); ?>"/>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
<?php
}
add_action('theme_options_before', 'ct_founder_pro_add_licensing_form');

// register the new option for storing the license key
function ct_founder_pro_register_option() {
	// creates our settings in the options table
	register_setting('ct_founder_pro_plugin_license', 'ct_founder_pro_license_key', 'ct_founder_pro_sanitize_license' );
}
add_action('admin_init', 'ct_founder_pro_register_option');

/***** Running the Updater *****/

// this is the URL our updater / license checker pings. This should be the URL of the site with EDD installed
define( 'EDD_SL_STORE_URL', 'https://www.competethemes.com' );

// the name of your product. This should match the download name in EDD exactly
define( 'EDD_SL_ITEM_NAME', 'Founder Pro' );

if( !class_exists( 'EDD_SL_Plugin_Updater' ) ) {
	// load our custom updater
	include( FOUNDER_PRO_PATH . 'licensing/EDD_SL_Plugin_Updater.php' );
}

// retrieve our license key from the DB
$license_key = trim( get_option( 'ct_founder_pro_license_key' ) );

// setup the updater
$edd_updater = new EDD_SL_Plugin_Updater( EDD_SL_STORE_URL, FOUNDER_PRO_FILE, array(
		'version' 	=> '1.16', 		// current version number
		'license' 	=> $license_key, 	// license key (used get_option above to retrieve from DB)
		'item_name' => EDD_SL_ITEM_NAME, 	// name of this plugin
		'founder' 	=> 'Compete Themes'  // author of this plugin
	)
);

/***** Licensing functions *****/

/***********************************************
 * Gets rid of the local license status option
 * when adding a new one
 ***********************************************/

function ct_founder_pro_sanitize_license( $new ) {
	$old = get_option( 'ct_founder_pro_license_key' );
	if( $old && $old != $new ) {
		delete_option( 'ct_founder_pro_license_key_status' ); // new license has been entered, so must reactivate
	}
	return $new;
}

/***********************************************
 * Illustrates how to activate a license key.
 ***********************************************/

function ct_founder_pro_activate_license() {

	if( isset( $_POST['ct_founder_pro_license_activate'] ) ) {
		if( ! check_admin_referer( 'ct_founder_pro_nonce', 'ct_founder_pro_nonce' ) )
			return; // get out if we didn't click the Activate button

		global $wp_version;

		$license = trim( get_option( 'ct_founder_pro_license_key' ) );

		$api_params = array(
			'edd_action' => 'activate_license',
			'license' => $license,
			'item_name' => urlencode( EDD_SL_ITEM_NAME )
		);

		$response = wp_remote_get( add_query_arg( $api_params, EDD_SL_STORE_URL ), array( 'timeout' => 15, 'body' => $api_params, 'sslverify' => false ) );

		if ( is_wp_error( $response ) ) {

			$response = wp_remote_post( add_query_arg( $api_params, EDD_SL_STORE_URL ), array( 'timeout' => 15, 'body' => $api_params, 'sslverify' => false ) );

			if ( is_wp_error( $response ) ) {
				return false;
			}
		}

		$license_data = json_decode( wp_remote_retrieve_body( $response ) );

		// $license_data->license will be either "active" or "inactive"

		update_option( 'ct_founder_pro_license_key_status', $license_data->license );

	}
}
add_action('admin_init', 'ct_founder_pro_activate_license');

/***********************************************
 * Illustrates how to deactivate a license key.
 * This will descrease the site count
 ***********************************************/

function ct_founder_pro_deactivate_license() {

	// listen for our activate button to be clicked
	if( isset( $_POST['ct_founder_pro_license_deactivate'] ) ) {

		// run a quick security check
		if( ! check_admin_referer( 'ct_founder_pro_nonce', 'ct_founder_pro_nonce' ) )
			return; // get out if we didn't click the Activate button

		// retrieve the license from the database
		$license = trim( get_option( 'ct_founder_pro_license_key' ) );


		// data to send in our API request
		$api_params = array(
			'edd_action'=> 'deactivate_license',
			'license' 	=> $license,
			'item_name' => urlencode( EDD_SL_ITEM_NAME )
		);

		// Call the custom API.
		$response = wp_remote_get( add_query_arg( $api_params, EDD_SL_STORE_URL ), array( 'timeout' => 15, 'body' => $api_params, 'sslverify' => false ) );

		if ( is_wp_error( $response ) ) {

			$response = wp_remote_post( add_query_arg( $api_params, EDD_SL_STORE_URL ), array( 'timeout' => 15, 'body' => $api_params, 'sslverify' => false ) );

			if ( is_wp_error( $response ) ) {
				return false;
			}
		}

		// decode the license data
		$license_data = json_decode( wp_remote_retrieve_body( $response ) );

		// $license_data->license will be either "deactivated" or "failed"
		if( $license_data->license == 'deactivated' )
			delete_option( 'ct_founder_pro_license_key_status' );

	}
}
add_action('admin_init', 'ct_founder_pro_deactivate_license');

/***********************************************
 * Illustrates how to check if a license is valid
 ***********************************************/

function ct_founder_pro_check_license() {

	global $wp_version;

	$license = trim( get_option( 'ct_founder_pro_license_key' ) );

	$api_params = array(
		'edd_action' => 'check_license',
		'license' => $license,
		'item_name' => urlencode( EDD_SL_ITEM_NAME )
	);

	$response = wp_remote_get( add_query_arg( $api_params, EDD_SL_STORE_URL ), array( 'timeout' => 15, 'body' => $api_params, 'sslverify' => false ) );

	if ( is_wp_error( $response ) ) {

		$response = wp_remote_post( add_query_arg( $api_params, EDD_SL_STORE_URL ), array( 'timeout' => 15, 'body' => $api_params, 'sslverify' => false ) );

		if ( is_wp_error( $response ) ) {
			return false;
		}
	}
	$license_data = json_decode( wp_remote_retrieve_body( $response ) );

	if( $license_data->license == 'valid' ) {
		echo 'valid'; exit;
		// this license is still valid
	} else {
		echo 'invalid'; exit;
		// this license is no longer valid
	}
}
