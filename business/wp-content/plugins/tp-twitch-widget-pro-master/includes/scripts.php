<?php
/**
 * Scripts
 *
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load admin scripts
 *
 * @since       1.0.0
 * @return      void
 */
function tp_twitch_pro_admin_scripts() {

    // Use minified libraries if SCRIPT_DEBUG is turned off
    $suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

    wp_enqueue_script( 'tp-twitch-pro-admin-script', TP_TWITCH_PRO_PLUGIN_URL . 'public/js/admin' . $suffix . '.js', array( 'jquery' ), TP_TWITCH_PRO_VERSION );
}
add_action( 'tp_twitch_enqueue_admin_scripts', 'tp_twitch_pro_scripts' );


/**
 * Load frontend scripts
 *
 * @since       1.0.0
 * @return      void
 */
function tp_twitch_pro_scripts() {

	// Use minified libraries if SCRIPT_DEBUG is turned off
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

    wp_enqueue_style( 'tp-twitch-pro-style', TP_TWITCH_PRO_PLUGIN_URL . 'public/css/styles' . $suffix . '.css', false, TP_TWITCH_PRO_VERSION );
}
add_action( 'tp_twitch_enqueue_scripts', 'tp_twitch_pro_scripts' );
