<?php

add_action('init', function () {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
});

// Theme jQuery fil
function web_scripts()
{
    wp_register_script('theme-script', get_template_directory_uri() . '/js/starter-min.js', array('jquery'));
    wp_enqueue_script('theme-script');
}
add_action('wp_enqueue_scripts', 'web_scripts');

// ---------------------------------------------------
// The Excerpt length

function web_custom_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'web_custom_excerpt_length', 999 );


// ---------------------------------------------------

if (!function_exists('web_setup')):
    function web_setup()
{

        // Fjern elementer i WP
        remove_action('wp_head', 'feed_links_extra', 3);
        remove_action('wp_head', 'feed_links');
        remove_action('wp_head', 'wp_shortlink_wp_head');
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'rest_output_link_wp_head');
        remove_action('wp_head', 'wp_oembed_add_discovery_links');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'wp_generator');

        add_filter( 'wp_lazy_loading_enabled', '__return_false' ); // skal nok fjernes ... men sikre at bx_slider carousel virker

        // HTML5
        add_theme_support('html5', array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Logo
        add_theme_support('custom-logo');

        // Title Tag
        add_theme_support('title-tag');


        // Images
        add_theme_support('post-thumbnails');
        add_image_size('web-content-image', 2000, 1200, true);

        // Shortkoder i widget
        add_filter('widget_text', 'do_shortcode');

        // Menu
        register_nav_menus(array(
            'main-menu' => __('Main Menu', 'web-domain'),
        ));

    }
    add_action('after_setup_theme', 'web_setup');
endif;

// ---------------------------------------------------

// Theme Widget
require get_parent_theme_file_path('/inc/widgets.php');

// Theme functions
require get_parent_theme_file_path('/inc/web-functions.php');

// Theme shortcode
require get_parent_theme_file_path('/inc/shortcode.php');
