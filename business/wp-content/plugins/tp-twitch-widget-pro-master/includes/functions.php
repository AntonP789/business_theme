<?php
/**
 * Functions
 *
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Get widget orderby options
 *
 * @return array
 */
function tp_twitch_pro_get_widget_orderby_options() {

    return array(
        'name' => __( 'Name', 'tp-twitch-widget-pro' ),
        'game' => __( 'Game', 'tp-twitch-widget-pro' ),
        'viewer' => __( 'Viewer', 'tp-twitch-widget-pro' ),
        'views' => __( 'Views', 'tp-twitch-widget-pro' )
    );
}

/**
 * Get widget order options
 *
 * @return array
 */
function tp_twitch_pro_get_widget_order_options() {

    return array(
        'asc' => __( 'Ascending', 'tp-twitch-widget-pro' ),
        'desc' => __( 'Descending', 'tp-twitch-widget-pro' )
    );
}