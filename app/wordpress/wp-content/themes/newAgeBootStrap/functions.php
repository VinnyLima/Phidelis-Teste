<?php 

function setup_theme(){
  add_theme_support('post-thumbnails');

  add_theme_support('title-tag');

  register_nav_menus(
    array(
      'primary' => 'Primary'
    )
  );
}

add_action('after_setup_theme', 'my_theme_setup');

fucntion theme_scripts_newAge(){
  wp_enqueue_style('')
}