<?php
if (!defined('ABSPATH')) { exit; }
add_action('after_setup_theme', function(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', [ 'height' => 80, 'width' => 240, 'flex-width' => true ]);
  register_nav_menus([
    'primary' => __('Primary Menu', 'naloxone-advocates'),
    'footer'  => __('Footer Menu', 'naloxone-advocates'),
  ]);
});
add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('google-fonts-roboto','https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap',[],null);
  wp_enqueue_style('na-main', get_template_directory_uri().'/assets/css/main.css', ['google-fonts-roboto'], '1.0');
  wp_enqueue_script('na-main', get_template_directory_uri().'/assets/js/main.js', [], '1.0', true);
});
add_filter('body_class', function($classes){
  if (did_action('elementor/loaded')){ $classes[] = 'elementor-ready'; }
  return $classes;
});
