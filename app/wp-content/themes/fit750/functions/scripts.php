<?php

add_action('wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_scripts()
{
  $ver = '22.02.2022 ';

  // Disable caching of scripts & styles in dev mode

  // Deregister/register Jquery
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', null, null, true);
  }

  if (is_singular('post')) {
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/post.min.css', null, $ver);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/main.min.js', ['jquery'], $ver, true);
  } else {
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/main.min.css', null, $ver);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/main.min.js', ['jquery'], $ver, true);
  }
};
