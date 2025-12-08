<?php

function theme_support()
{
  add_theme_support('post_thumbnails');
}
add_action('after_setup_theme', 'theme_support');


function styles()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'styles');


register_nav_menus([
  'primary' => 'Primary Menu',
  'footer' => 'Footer Menu',
]);