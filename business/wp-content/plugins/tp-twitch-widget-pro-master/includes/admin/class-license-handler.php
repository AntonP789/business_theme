<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Handle license checks, activations and deactivations
 *
 * @author KryptoniteWP
 * @version 1.0.0
 */
class TP_Twitch_Pro_License_Handler {

    // Defaults
    private $license_server = '';
    private $item_name = '';
    private $item_id = 0;
    private $url = '';

    /**
     * Class constructor.
     *
     * TP_Twitch_Pro_License_handler constructor.
     */
    function __construct() {

        $this->license_server = TP_TWITCH_PRO_LICENSE_SERVER_URL;
        //$this->item_name = $data['item_name'];
        $this->item_id = TP_TWITCH_PRO_LICENSE_ITEM_ID;
        $this->url = home_url();
    }

    /**
     * Check license key update
     *
     * @param $new_license_key
     * @param $old_license_key
     * @return bool|string
     */
    public function handle_update( $new_license_key, $old_license_key ) {

        $deactivate = false;
        $activate = false;

        // Key deleted
        if ( empty( $new_license_key ) && !empty( $old_license_key ) ) {
            $deactivate = true;
        }

        // Key changed
        if ( !empty( $new_license_key ) && !empty( $old_license_key ) && $new_license_key != $old_license_key ) {
            $deactivate = true;
            $activate = true;
        }

        // Key submitted
        if ( !empty( $new_license_key ) && empty( $old_license_key ) ) {
            $activate = true;
        }

        //var_dump($deactivate);

        // Execute deactivation of current license key
        if ( $deactivate ) {
            $response = $this->deactivate( $old_license_key );
        }

        //var_dump($activate);

        // Execute activation of new license key
        if ( $activate ) {
            $response = $this->activate( $new_license_key );
        }

        if ( !empty ( $response ) )
            return $response;

        return false;
    }

    /**
     * Activate license key
     *
     * @param $license_key
     * @return bool
     */
    public function activate( $license_key ) {

        // retrieve the license from the database
        $license_key = trim( $license_key );

        // data to send in our API request
        $api_params = array(
            'edd_action'=> 'activate_license',
            'license' 	=> $license_key,
            //'item_name' => urlencode( $this->item_name ),
            'item_id' => $this->item_id,
            'url'       => $this->url
        );

        // Call the custom API.
        $response = wp_remote_post( $this->license_server, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );

        // make sure the response came back okay
        if ( is_wp_error( $response ) )
            return false;

        // decode the license data
        $license_data = json_decode( wp_remote_retrieve_body( $response ) );

        //tp_twitch_debug_log( 'license >> activate' );
        //tp_twitch_debug_log( $license_data );

        // $license_data->license will be either "valid" or "invalid"

        return $license_data;
    }

    /**
     * Deactivate license key
     *
     * @param $license_key
     * @return bool
     */
    public function deactivate( $license_key ) {

        // retrieve the license from the database
        $license_key = trim( $license_key );

        // data to send in our API request
        $api_params = array(
            'edd_action'=> 'deactivate_license',
            'license' 	=> $license_key,
            //'item_name' => urlencode( $this->item_name ), // the name of our product in EDD
            'item_id' => $this->item_id,
            'url'       => $this->url
        );

        // Call the custom API.
        $response = wp_remote_post( $this->license_server, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );

        // make sure the response came back okay
        if ( is_wp_error( $response ) )
            return false;

        // decode the license data
        $license_data = json_decode( wp_remote_retrieve_body( $response ) );

        //tp_twitch_debug_log( 'license >> deactivate' );
        //tp_twitch_debug_log( $license_data );

        // $license_data->license will be either "deactivated" or "failed"
        return $license_data;
    }

    /**
     * Check license key
     *
     * @param $license_key
     * @return bool
     */
    public function check_license( $license_key ) {

        // retrieve the license from the database
        $license_key = trim( $license_key );

        // data to send in our API request
        $api_params = array(
            'edd_action'=> 'check_license',
            'license' 	=> $license_key,
            //'item_name' => urlencode( $this->item_name ), // the name of our product in EDD
            'item_id' => $this->item_id,
            'url'       => $this->url
        );

        // Call the custom API.
        $response = wp_remote_post( $this->license_server, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );

        // make sure the response came back okay
        if ( is_wp_error( $response ) )
            return false;

        // decode the license data
        $license_data = json_decode( wp_remote_retrieve_body( $response ) );

        //tp_twitch_debug_log( 'license >> check' );
        //tp_twitch_debug_log( $license_data );

        // $license_data->license will be either "deactivated" or "failed"
        return $license_data;
    }
}