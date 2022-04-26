<?php

// Customize theme
function customize_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', [
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'script',
        'style'
    ]);

    // Load textdomain
    // load_theme_textdomain('theme', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'customize_theme');

// Custom admin logo
// add_action('login_head', function () {
//     echo '<style>h1 a { background-image:url(' . get_bloginfo('template_directory') . '/assets/img/urban-logo.svg)!important; background-size: 100% 100% !important;}</style>';
// });

// Remove category & tag text before title
// add_filter('get_the_archive_title', function ($title) {
//   return preg_replace('~^[^:]+: ~', '', $title);
// });

// Get ACF options page for WP Multilang
// function id_WPSE_114111()
// {
//     echo "<pre>";
//     var_dump(get_current_screen());
//     echo "</pre>";
// }

// add_action('admin_notices', 'id_WPSE_114111');
