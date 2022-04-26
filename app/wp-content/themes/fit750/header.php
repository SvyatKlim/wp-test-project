<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
  <script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=rd2nvsjwmjfdxfbk5rdvjq" async="true"></script>
</head>

<body <?php body_class(); ?>>
<header class="header">
  <div class="container">
    <a  class="header__logo" href="<?php echo get_home_url(); ?>">
      <?php echo show_logo(); ?>
    </a>
  </div>
</header>
<main>