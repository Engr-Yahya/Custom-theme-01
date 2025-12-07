<?php

function styles()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'styles');


register_nav_menus([
  'primary' => 'Primary Menu',
  'footer' => 'Footer Menu',
]);