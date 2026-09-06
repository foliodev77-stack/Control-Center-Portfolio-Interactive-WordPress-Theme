<?php
function ccdemo_enqueue_assets(){
  wp_enqueue_style('ccdemo-style', get_stylesheet_uri(), array(), '1.0.0');
  wp_enqueue_script('ccdemo-script', get_template_directory_uri().'/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts','ccdemo_enqueue_assets');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');