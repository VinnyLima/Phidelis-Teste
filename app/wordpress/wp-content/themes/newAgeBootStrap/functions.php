<?php 
require_once(get_template_directory(  ).'/inc/class-nav-bootstrap-walker.php');

add_action('after_setup_theme', 'setup_theme');

function setup_theme(){
  add_theme_support('post-thumbnails');

  add_theme_support('title-tag');

  register_nav_menus(
    array(
      'primary' => 'Primary'
    )
  );
}







add_action('after_setup_theme', 'setup_theme_scripts');

function setup_theme_scripts(){
  /**Bootstarp Core CSS */
  wp_enqueue_style('bootstrap-min', get_template_directory_uri(  ).'/vendor/bootstrap/css/bootstrap.min.css');

  //Custom fonts for this template
  wp_enqueue_style('fontwasome', get_template_directory_uri(  ).'/vendor/fontawesome-free/css/all.min.css');
  wp_enqueue_style('swiper-bundle', get_template_directory_uri(  ).'/vendor/swiper/swiper-bundle.min.css');
  wp_enqueue_style('simple-line-icons', get_template_directory_uri(  ).'/vendor/simple-line-icons/css/simple-line-icons.css');
  
  //Acess external fonts
  wp_enqueue_style('fontsGoogle-Lato', 'https://fonts.googleapis.com/css?family=Lato');
  wp_enqueue_style('fontsGoogle-Cataraman', 'https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900');
  wp_enqueue_style('fontsGoogle-Muli', 'https://fonts.googleapis.com/css?family=Muli');

  //Plugin CSS
  wp_enqueue_style('style-new-Age', get_template_directory_uri(  ).'/device-mockups/device-mockups.min.css');
  
  //Style for this template
  wp_enqueue_style('style-new-Age-min', get_template_directory_uri(  ).'/css/new-age.min.css');

 

}
