<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="container"> <!-- start container -->
    <header class="site-header">
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      <p><?php bloginfo('description'); ?></p>

      <nav class="site-nav">

        <?php
        $array = [
          'theme_location' => 'primary',
        ];
        ?>

        <?php wp_nav_menu($array); ?>

      </nav>

    </header>

    <div class="bread-crumb"> <?php
    if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
    </div>