<?php
define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');
function get_homePageId(){
    return $home_id = (int)get_option( 'page_on_front' );
}

add_filter('widget_text', 'do_shortcode');

//svg to wordpress
function wph_add_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'wph_add_mime_types');
// ENQUEUE STYLES
function enqueue_styles() {
    wp_register_style('Rubik_300_300i_400_700_900', 'https://fonts.googleapis.com/css?family=Rubik:300,300i,400,700,900');
    wp_enqueue_style('Rubik_300_300i_400_700_900');
    wp_register_style('FiraSansCondensed_300_700_900', 'https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:300,700,900" rel="stylesheet');
    wp_enqueue_style('FiraSansCondensed_300_700_900');
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
// ENQUEUE SCRIPTS
function enqueue_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'slick_js', THEME_DIR . '/js/slick.js', array(), null, true );
    wp_enqueue_script( 'slick_js' );
    wp_register_script( 'noUiSlider', THEME_DIR . '/js/range-js.js', array(), null, true );
    wp_enqueue_script( 'noUiSlider' );
    wp_register_script( 'custom_js', THEME_DIR . '/js/custom.js', array(), null, true );
    wp_enqueue_script( 'custom_js' );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts', 11);
function register_my_menus(){
    register_nav_menus (
        array('header-menu' => 'header-menu')
    );
}

if ( function_exists('register_sidebar') )
register_sidebar(
    array(
        'id' => 'home-banner-widgets',
        'name' => 'Home Banner Widgets',
        'before_widget' => '',
        'after_widget' => '',
    )
);

if (function_exists('register_nav_menus')) {
    add_action( 'init', 'register_my_menus' );
}
add_theme_support('post-thumbnails');
set_post_thumbnail_size(9999,9999,TRUE);
// BLOG SCRIPTS
$default_banner_img_url = THEME_DIR . '/images/blog-banner.jpg';
function new_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');
function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return 'Views '.$count;
}
add_theme_support('post-thumbnails');
set_post_thumbnail_size(9999,9999,TRUE);
add_image_size( 'post-thumb', 124, 100, TRUE );
// END BLOG SCRIPTS
//include_once (get_template_directory() . '/includes/theme-options.php');

// Fix Uploading URL
update_option('upload_url_path', '/wp-content/uploads'); 
