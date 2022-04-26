<?php

// Load WP tweaks
require_once TEMPLATEPATH . '/functions/tweaks.php';

// Pathes & shortcuts
require_once TEMPLATEPATH . '/functions/shortcuts.php';

// Load scripts & css styles
require_once TEMPLATEPATH . '/functions/scripts.php';

// Customize theme
require_once TEMPLATEPATH . '/functions/customize.php';

// Custom post types
require_once TEMPLATEPATH . '/functions/post-types.php';

// Custom images
require_once TEMPLATEPATH . '/functions/images.php';



if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title' => 'Footer info',
    'menu_title' => 'Footer info',
    'menu_slug' => 'footer-settings',
    'icon_url' => 'dashicons-email-alt2',
    'redirect' => false,
  ));
}

add_action('after_setup_theme', 'project_setup');
add_action('wp_enqueue_script', 'project_scripts');
add_filter('show_admin_bar', '__return_false');

function project_setup()
{
  add_theme_support('custom-logo');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');

  register_nav_menus([
    'header-menu' => 'header-menu',
    'footer-menu' => 'footer-menu',
  ]);
}

function project_scripts()
{
  wp_enqueue_script('js', assets_path('/js/main.js'), [], '1.0', true);
  wp_enqueue_style('css', assets_path('/css/styles.css'), [], '1.0', 'all');
}
