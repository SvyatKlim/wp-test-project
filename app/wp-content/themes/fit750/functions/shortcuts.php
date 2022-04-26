<?php

// Shortcut to assets
function assets_path($path)
{
  return get_template_directory_uri() . '/assets/' . $path;
}

// Inline SVG from url
function svg_embed_url($name)
{

  $url = assets_path('img/svg/') . $name;
    $handle = @fopen($url, 'r');

    if($handle) {
        echo file_get_contents($url);
    }
}

// Show custom logo (image with link/image only at homepage)
function show_logo()
{
    if ($custom_logo = get_theme_mod('custom_logo')) {

        echo (is_front_page())
            ? wp_get_attachment_image($custom_logo, 'full', false, [
            'class'    => 'custom-logo',
            'itemprop' => 'logo'
        ])
            : get_custom_logo();
    }
}
