<?php

  /* ENQUEUE SCRIPTS & STYLES
  /------------------------*/
  function wpseed_enqueue_scripts_and_styles() {

    # jQuery

    wp_register_script('jquery', get_template_directory_uri() . '/functions/jquery.js', false, array( 'jquery' ), true);
    wp_enqueue_script('jquery');

    # vendor.min.js

    wp_register_script('vendor', get_template_directory_uri() . '/dist/vendor.min.js', false, array( 'jquery' ), true);
    wp_enqueue_script('vendor');
        
    # script.min.js
    
    wp_register_script('scripts', get_template_directory_uri() . '/dist/script.min.js', false, array( 'jquery' ), true);
    wp_enqueue_script('scripts');
    
    # style.min.css
    wp_enqueue_style('styles', get_template_directory_uri() . '/dist/style.min.css', false, null);
    
    # google fonts
    wp_enqueue_style('google/fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700,700i', false, null);
  }
  add_action('wp_enqueue_scripts', 'wpseed_enqueue_scripts_and_styles');







