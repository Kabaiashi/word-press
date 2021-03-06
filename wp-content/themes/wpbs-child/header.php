<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Real</strong> Estate</a></h1>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <?php wp_nav_menu(); ?>
        </nav>
      </div>
    </div>
  </header>
