<?php

function theme_support()
{
  add_theme_support('post-thumbnails');
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
function click()
{
  echo "<h1>Hlw you clicked the button </h1";
}
// add_action('init', 'click');
