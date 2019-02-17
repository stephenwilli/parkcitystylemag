<?php

   /* REGISTER MENUS
  /------------------------*/

add_action('after_setup_theme', 'register_custom_menus');

function register_custom_menus() {
    register_nav_menus( array(
        'mainmenu' => __('Main Menu'),
        'footermenu' => __('Footer Menu') ) );
}