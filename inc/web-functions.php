<?php
// Logo

function web_logo()
{
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo           = wp_get_attachment_image_src($custom_logo_id, 'full');

    if (has_custom_logo()) {
        echo '<div class="logo"><a href="' . home_url() . '"><img width="' . $logo[1] . '" height="' . $logo[2]. '" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a></div>';
    } else {
        echo '<div class="logo-txt"><a href="' . home_url() . '">' . get_bloginfo('name') . '</a></div>';
    }
}

function web_site_info()
{
    if ( get_bloginfo( 'name' )  !== '' ) { 
    

        echo '<div class="name">';
        echo '<span class="blog-name">' . get_bloginfo( 'name' ) . '</span>';
        
        if ( get_bloginfo( 'description' )  !== '' ) {
            echo '<span class="blog-desc">' . get_bloginfo('description') . '</span>';
  } 
        echo '</div>';
 } 
}

// BackButton

function web_go_back()
{
    if (is_single()) {
        echo '<div class="go-back-con">';
        echo '<button onclick="goBack()" class="go-back">' . esc_html__('Go Back', 'web-domain') . '</button>';
        echo '<script>function goBack() {window.history.back();}</script>';
        echo '</div>';
    }
}

// Read More

function web_read_more()
{
    echo '<p class="read-more"><a href="' . get_the_permalink() . '">' . esc_html__('Read More', 'web-domain') . '</a></p>';
}

// Edit link
function web_edit_link()
{
    if (!is_single()) {
        edit_post_link(__('edit', 'web-domain'), '<p>', '</p>');
    }
}

// Header style
if (!function_exists('web_header_style')) {
    function web_header_style()
    {
        echo 'a-baseline';
    }
}

if (!function_exists('web_header_sticky')) {
    function web_header_sticky()
    {
        echo 'sticky-header';
    }
}

// Thumbnail

function web_thumbnail() {
    $caption = get_the_post_thumbnail_caption();
    if ( has_post_thumbnail() ) {
        echo '<div class="post-img">';
        the_post_thumbnail();
        if(!empty($caption)) {
            echo '<div class="caption">' . $caption . '</div>';
        }
        echo '</div>';
    }
}

// Menu desktop align
if (!function_exists('web_menu_pos')) {
    function web_menu_pos()
    {
        echo 'left-align';
    }
}

// Social Icon
if (!function_exists('web_social_menu')) {
    function web_social_menu()
    {
    echo '<div class="social">';
        echo '<a href="https://linkedin.com" target="_blank"><img src="' . get_stylesheet_directory_uri() . '/img/linkedin.svg" alt="Linkedin"></a>';
        echo '<a href="https://facebook.com" target="_blank"><img src="' . get_stylesheet_directory_uri() . '/img/facebook.svg" alt="Facebook"></a>';
        echo '<a href="https://twitter.com" target="_blank"><img src="' . get_stylesheet_directory_uri() . '/img/twitter.svg" alt="Twitter"></a>';
        echo '<a href="https://youtube.com" target="_blank"><img src="' . get_stylesheet_directory_uri() . '/img/youtube.svg" alt="Youtybe"></a>';
    echo '</div>';

    }
}

// Reference
function web_reference() {
    echo '<div class="reference"><a href="https://www.hjemmesider.dk" target="_blank" rel="nofollow">Made by Hjemmesider.dk</a></div>';
}