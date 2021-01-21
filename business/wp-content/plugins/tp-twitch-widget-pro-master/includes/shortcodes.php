<?php
/**
 * Shortcodes
 *
 * @since       1.0.0
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

/**
 * Maybe cleanup content in order to remove empty p and br tags for our shortcodes
 */



function tp_twitch_pro_maybe_cleanup_shortcode_output( $content ) {

    // array of custom shortcodes requiring the fix
    $block = join("|",array(
        'twitch', 'tp_twitch'
    ) );

    // opening tag
    $rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);

    // closing tag
    $rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);

    return $rep;
}
//add_filter( 'the_content', 'tp_twitch_pro_maybe_cleanup_shortcode_output' );

/**
 * Register our main shortcode
 *
 * @param $atts
 * @param string $content
 * @return false|null|string|string[]
 */
function tp_twitch_pro_add_shortcode( $atts, $content = null ) {

    if ( ! function_exists( 'tp_twitch_display_streams' ) )
        return null;

    //tp_twitch_debug( $atts, '$atts' );

    $streams_args = array();
    $template_args = array();
    $output_args = array();

    if ( empty( $atts['streamer'] ) && empty( $atts['game'] ) )
        return __( 'Shortcode is not complete. Either add some streamer or game_id.', 'tp-twitch-widget-pro' );

    // Streamer
    if ( ! empty ( $atts['streamer'] ) ) {
        $streams_args['streamer'] = tp_twitch_sanitize_comma_separated_input( $atts['streamer'] );

    // Search
    } else {

        // Game.
        if ( ! empty ( $atts['game'] ) ) {
            $streams_args['game_id'] = intval( $atts['game'] );
        }

        // Language
        $streams_args['language'] = ( ! empty ( $atts['language'] ) ) ? sanitize_text_field( $atts['language'] ) : tp_twitch_get_option( 'language' );
    }

    // No Cache
    if ( isset( $atts['no_cache'] ) && 'true' == $atts['no_cache'] )
        $streams_args['no_cache'] = true;

    // Max
    if ( ! empty ( $atts['max'] ) && is_numeric( $atts['max'] ) ) {
        $output_args['max'] = intval( $atts['max'] );
    }

    // Hide offline users
    if ( isset( $atts['hide_offline'] ) && 'true' == $atts['hide_offline'] )
        $output_args['hide_offline'] = true;

    // Order by
    if ( isset( $atts['orderby'] ) && in_array( $atts['orderby'], array( 'name', 'game', 'viewer', 'views' ) ) )
        $output_args['orderby'] = $atts['orderby'];

    // Order
    if ( isset( $output_args['orderby'] ) ) {
        $output_args['order'] = ( isset( $atts['order'] ) && in_array( $atts['order'], array( 'asc', 'desc' ) ) ) ? $atts['order'] : 'desc';
    }

    // Template.


    if ( ! empty ( $atts['grid'] ) && is_numeric( $atts['grid'] ) ) {
       $template_args['template'] = 'grid';
    } else {
        $template_args['template'] = 'box';
    }





    // Style
    $template_args['style'] = ( ! empty ( $atts['style'] ) ) ? sanitize_text_field( $atts['style'] ) : tp_twitch_get_option( 'style' );

    // Size
    $template_args['size'] = ( ! empty ( $atts['size'] ) ) ? sanitize_text_field( $atts['size'] ) : tp_twitch_get_option( 'size' );

    // Preview
    $template_args['preview'] = ( ! empty ( $atts['preview'] ) ) ? sanitize_text_field( $atts['preview'] ) : tp_twitch_get_option( 'preview' );

    $template_args['grid'] = ( ! empty ( $atts['grid'] ) ) ? sanitize_text_field( $atts['grid'] ) : tp_twitch_get_option( 'grid' );

    ob_start();

    //tp_twitch_debug( $streams_args, '$streams_args' );
    //tp_twitch_debug( $template_args, '$template_args' );
    //tp_twitch_debug( $output_args, '$output_args' );

    tp_twitch_display_streams( $streams_args, $template_args, $output_args, false );

    $output = ob_get_clean();

    // Remove empty paragraphs
    //$output = str_replace(array("<p></p>"), '', $output);

    // Remove unwanted line breaks from output
    //$output = preg_replace('/^\s+|\n|\r|\s+$/m', '', $output );

    return $output;
}
add_shortcode( 'twitch', 'tp_twitch_pro_add_shortcode' );
add_shortcode( 'tp_twitch', 'tp_twitch_pro_add_shortcode' );