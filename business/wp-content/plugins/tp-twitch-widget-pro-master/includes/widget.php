<?php
/**
 * Widget
 *
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Handling widget output args
 *
 * @param $output_args
 * @param $instance
 * @return mixed
 */
function tp_twitch_pro_widget_output_args( $output_args, $instance ) {

    // Order by
    if ( isset( $instance['orderby'] ) && in_array( $instance['orderby'], array( 'name', 'game', 'viewer', 'views' ) ) )
        $output_args['orderby'] = $instance['orderby'];

    // Order
    if ( isset( $output_args['orderby'] ) ) {
        $output_args['order'] = ( isset( $instance['order'] ) && in_array( $instance['order'], array( 'asc', 'desc' ) ) ) ? $instance['order'] : 'desc';
    }

    return $output_args;
}
add_filter( 'tp_twitch_widget_output_args', 'tp_twitch_pro_widget_output_args', 10, 2 );

/**
 * Adding new widget form fields to the "output settings" section
 *
 * @param WP_Widget $widget
 * @param $instance
 */
function tp_twitch_pro_widget_form_output_settings( $widget, $instance ) {

    ?>
    <!-- Orderby -->
    <?php
    $orderby_options = tp_twitch_pro_get_widget_orderby_options( );
    $orderby = ( ! empty( $instance['orderby'] ) ) ? $instance['orderby'] : '';
    ?>
    <p>
        <label for="<?php echo esc_attr( $widget->get_field_id( 'orderby' ) ); ?>"><?php esc_attr_e( 'Order by', 'tp-twitch-widget-pro' ); ?></label>
        <select class="widefat" id="<?php echo esc_attr( $widget->get_field_id( 'orderby' ) ); ?>" name="<?php echo esc_attr( $widget->get_field_name( 'orderby' ) ); ?>">
            <option value=""><?php _e('Please select...', 'tp-twitch-widget-pro' ); ?></option>
            <?php foreach ( $orderby_options as $key => $label ) { ?>
                <option value="<?php echo esc_attr( $key ); ?>" <?php selected( $orderby, $key ); ?>><?php echo esc_attr( $label ); ?></option>
            <?php } ?>
        </select>
    </p>
    <!-- Order -->
    <?php
    $order_options = tp_twitch_pro_get_widget_order_options();
    $order = ( ! empty( $instance['order'] ) ) ? $instance['order'] : '';
    ?>
    <p>
        <label for="<?php echo esc_attr( $widget->get_field_id( 'order' ) ); ?>"><?php esc_attr_e( 'Order', 'tp-twitch-widget-pro' ); ?></label>
        <select class="widefat" id="<?php echo esc_attr( $widget->get_field_id( 'order' ) ); ?>" name="<?php echo esc_attr( $widget->get_field_name( 'order' ) ); ?>">
            <option value=""><?php _e('Please select...', 'tp-twitch-widget-pro' ); ?></option>
            <?php foreach ( $order_options as $key => $label ) { ?>
                <option value="<?php echo esc_attr( $key ); ?>" <?php selected( $order, $key ); ?>><?php echo esc_attr( $label ); ?></option>
            <?php } ?>
        </select>
    </p>
    <?php
}
add_action( 'tp_twitch_widget_form_output_settings', 'tp_twitch_pro_widget_form_output_settings', 10, 2 );

/**
 * Updating widget form inputs
 *
 * @param $instance
 * @param $new_instance
 * @param $old_instance
 * @return mixed
 */
function tp_twitch_pro_widget_update( $instance, $new_instance, $old_instance ) {

    $instance['orderby'] = ( ! empty( $new_instance['orderby'] ) ) ? sanitize_text_field( $new_instance['orderby'] ) : '';
    $instance['order'] = ( ! empty( $new_instance['order'] ) ) ? sanitize_text_field( $new_instance['order'] ) : '';

    return $instance;
}
add_filter( 'tp_twitch_widget_update', 'tp_twitch_pro_widget_update', 10, 3 );