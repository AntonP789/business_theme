<?php
/**
 * Hooks
 *
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Extend get option default value
 *
 * @param $value
 * @param $key
 * @return null|string
 */

$grid = ( isset ( $template_args ) && ! empty( $template_args['grid'] ) ) ? $template_args['grid'] : null;
function tp_twitch_pro_option_default_value( $value, $key ) {

    switch ( $key ) {
        case 'style':
            $value = 'white';
            break;
        case 'size':
            $value = 'large';
            break;
        case 'preview':
            $value = 'image';
            break;
    }

    return $value;
}
add_filter( 'tp_twitch_option_default_value', 'tp_twitch_pro_option_default_value', 10, 2 );

/**
 * Maybe extend get default template
 *
 * @param $template
 * @param $is_widget
 * @return string
 */
function tp_twitch_pro_get_default_template( $template, $is_widget ) {

    if ( ! $is_widget )
        if ($grid != null) {
            return 'grid';
        } else {
            return 'box';
        }
    return $template;
}
add_filter( 'tp_twitch_get_template', 'tp_twitch_pro_get_default_template', 10, 2 );

/**
 * Maybe extend get template file
 *
 * @param $template_file
 * @param $template
 * @return string
 */
function tp_twitch_pro_get_template_file( $template_file, $template ) {

    if ( in_array( $template, array( 'grid' ) ) ) {
        $template_file = TP_TWITCH_PRO_PLUGIN_DIR . 'templates/' . $template . '.php';
    }
    if ( in_array( $template, array( 'box' ) ) ) {
        $template_file = TP_TWITCH_PRO_PLUGIN_DIR . 'templates/' . $template . '.php';
    }



    return $template_file;
}
add_filter( 'tp_twitch_template_file', 'tp_twitch_pro_get_template_file', 10, 2 );

/**
 * Extend style options
 *
 * @param $options
 * @return mixed
 */
function tp_twitch_pro_style_options( $options ) {

    $options['dark'] = __( 'Dark', 'tp-twitch-widget-pro' );
    $options['light'] = __( 'Light', 'tp-twitch-widget-pro' );
    $options['navy'] = __( 'Navy Blue', 'tp-twitch-widget-pro' );
    $options['green'] = __( 'Green', 'tp-twitch-widget-pro' );

    return $options;
}
add_filter( 'tp_twitch_style_options', 'tp_twitch_pro_style_options' );

/**
 * Maybe extend the output of the streams classes
 *
 * @param $additional_classes
 * @param $template_args
 * @return array
 */
function tp_twitch_pro_the_streams_classes( $additional_classes, $template_args ) {

    // Icons.
    if ( ! empty( $template_args['style'] ) && in_array( $template_args['style'], array( 'dark', 'navy', 'green' ) ) )
        $additional_classes[] = 'icons-white';

    return $additional_classes;
}
add_filter( 'tp_twitch_the_streams_classes', 'tp_twitch_pro_the_streams_classes', 10, 2 );

/**
 * Extend streams max
 *
 * @param $max
 * @return int
 */
function tp_twitch_pro_streams_max( $max ) {
    return 100;
}
add_filter( 'tp_twitch_streams_max', 'tp_twitch_pro_streams_max' );

/**
 * Maybe manipulate the streams output
 *
 * @param $streams
 * @param $streams_args
 * @param $output_args
 * @return mixed
 */
function tp_twitch_pro_display_streams( $streams, $streams_args, $output_args ) {

    if ( ! is_array( $streams ) || sizeof( $streams ) === 0 )
        return $streams;

    //tp_twitch_debug_log( $streams );

    // Order
    if ( ! empty( $output_args['orderby'] ) && ! empty( $output_args['order'] ) ) {

        $order_asc = ( 'asc' === $output_args['order'] ) ? true : false;
        $streams_to_order = array();

        foreach ( $streams as $stream_key => $stream_obj ) {

            // by name
            if ( 'name' === $output_args['orderby'] ) {
                $streams_to_order[$stream_key] = $stream_obj->get_user_name();

                // by game
            } elseif ( 'game' === $output_args['orderby'] ) {
                $streams_to_order[$stream_key] = $stream_obj->get_game();

                // by viewer
            } elseif ( 'viewer' === $output_args['orderby'] ) {
                $streams_to_order[$stream_key] = $stream_obj->get_viewer();

                // by views
            } elseif ( 'views' === $output_args['orderby'] ) {
                $streams_to_order[$stream_key] = $stream_obj->get_views();
            }
        }

        //tp_twitch_debug( $streams_to_order, '$streams_to_order - BEFORE' );

        // Sorting
        if ( $order_asc ) {
            asort( $streams_to_order );
        } else {
            arsort( $streams_to_order );
        }

        //tp_twitch_debug( $streams_to_order, '$streams_to_order - AFTER' );

        // Apply sorting to original streams
        $streams_ordered = array();

        foreach ( $streams_to_order as $stream_order_key => $stream_order_value ) {

            if ( isset( $streams[$stream_order_key] ) )
                $streams_ordered[] = $streams[$stream_order_key];
        }

        $streams = $streams_ordered;
    }

    return $streams;
}
add_filter( 'tp_twitch_manipulate_display_streams', 'tp_twitch_pro_display_streams', 10, 3 );

/**
 * Extend top games coming from API
 *
 * @param $top_games
 * @param $response
 * @param $args
 * @return array
 */
function tp_twitch_pro_api_top_games( $top_games, $response, $args ) {

    // Get second 100 games
    if ( ! empty( $response['pagination']['cursor'] ) ) {

        $args['after'] = $response['pagination']['cursor'];

        $paginated = tp_twitch()->api->get_top_games( $args );

        if ( is_array( $paginated['data'] ) && ! empty( $paginated['data'] ) )
            $top_games = array_merge( $top_games, $paginated['data'] );
    }

    return $top_games;
}
add_action( 'tp_twitch_api_top_games', 'tp_twitch_pro_api_top_games', 10, 3 );

/**
 * Extend available games
 *
 * How-To get the game ID:
 *
 * 1.) Chrome browser DevTools -> Network -> XHR: one of the 'gql' requests has the response like:
 *   [{"data":{"game":{"id":"518711","displayName":"EA Sports UFC 4","__typename":"Game"}} ...
 *
 * 2.) curl -H 'Client-ID: <client id>' -H 'Authorization: Bearer <token>' -X GET 'https://api.twitch.tv/helix/games?name=EA%20Sports%20UFC%204'
 *
 * @param $games
 * @return mixed
 */
function tp_twitch_pro_add_missing_games( $games ) {

    $games_missing = array(
        /*array(
            'id'          => 490379,
            'name'        => "Tom Clancy's Ghost Recon: Wildlands",
            'box_art_url' => 'https://static-cdn.jtvnw.net/ttv-boxart/Tom%20Clancy%27s%20Ghost%20Recon:%20Wildlands-{width}x{height}.jpg'
        ),*/
    );

    foreach ( $games_missing as $game ) {

        if ( ! isset ( $games[ $game['id'] ] ) )
            $games[ $game['id'] ] = $game;
    }

    return $games;
}
add_filter( 'tp_twitch_games', 'tp_twitch_pro_add_missing_games', 100 );