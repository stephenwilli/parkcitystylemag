<?php


/* WP SETUP & SETTINGS
/===================================================== */
  
  require('functions/load-scripts-styles.php');

   require( 'functions/register-menus.php' );

   require( 'functions/register-sidebars.php' );

   require( 'functions/option-pages.php' );

   require( 'functions/custom-post-types.php' );

   require( 'functions/theme-setup.php' );

  require('functions/wp-bootstrap-navwalker.php');

   require( 'functions/breadcrumbs.php' );


/* BACKEND
/===================================================== */
  
  require('functions/helper-functions.php');


/* EDITOR AND MEDIA
/===================================================== */
    
 require( 'functions/tiny-mce-editor.php' );

 require( 'functions/shortcodes.php' );

 require( 'functions/mime-types.php' );

 require( 'functions/image-size.php' );

 require( 'functions/default-images.php' );



