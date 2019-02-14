<?php

  /*  Excerpt ending
  /* ------------------------------------ */
  function alx_excerpt_more( $more ) {
      return '<br><a class="read-more" href="'. get_permalink() .'"> Read More &rsaquo;</a>';
  }
  add_filter( 'excerpt_more', 'alx_excerpt_more' );

  /* DUMP'N DIE
  /------------------------*/
  function d($var) {
    echo '<pre>'.var_dump($var).'</pre>';
  }
  function dd($var) {
    echo '<pre>'.var_dump($var).'</pre>';
    die();
  }

  add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_category() ) {

        $title = single_cat_title( '', false );

    }

    return $title;

  });

  /* TRIM WHITESPACE BEFORE EXCERPT
  /------------------------*/

  add_filter( 'get_the_excerpt', 'wpse162725_ltrim_excerpt' );

  function wpse162725_ltrim_excerpt( $excerpt ) {
      return preg_replace( '~^(\s*(?:&nbsp;)?)*~i', '', $excerpt );
  }

  /* PAGINATION FOR CUSTOM POST TYPES
  /------------------------*/

  function mg_news_pagination_rewrite() {
  add_rewrite_rule(get_option('category_base').'/page/?([0-9]{1,})/?$', 'index.php?pagename='.get_option('category_base').'&paged=$matches[1]', 'top');
  }
  add_action('init', 'mg_news_pagination_rewrite');

  /* is AJAX/PJAX Request
  /------------------------*/
  function is_ajax_request() {
    return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
  }
  function is_pjax_request() {
    return !empty($_SERVER['X-PJAX']) && $_SERVER['X-PJAX'] === true;
  }

  /* VARIABLES
  /------------------------*/
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $loremipsum = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.';

  /* STRING SHORTENER
  /------------------------*/
  // shorten strings and append ...
  function wpseed_shorten($string,$length,$append="...") {
    $string = trim($string);
    if(strlen($string) > $length) {
      $string  = substr($string, 0, $length);
      $string .= $append;
    }
    return $string;
  }

  /* URL CHECK
  /------------------------*/
  // searches url by string
  // note: also consider using basename($url) or basename(dirname($url)) => http://php.net/manual/de/function.basename.php
  function urlcontains($string) {
    if (strpos('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'],$string) == true) {
      return true;
    }
  }

/* OUTPUT TOOLKIT
/===================================================== */

  /* SANITIZER
  /------------------------*/
  // function sanitize_output($buffer) {
  //   $search = ['/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s'];
  //   $replace = ['>', '<', '\\1'];
  //   $buffer = preg_replace($search, $replace, $buffer);
  //   return $buffer;
  // }

  /* THUMBNAIL URL
  /------------------------*/
  // output the absolute url of the featured image
  // usage: wpseed_the_post_thumbnail_url($post->ID, 'large');
  // function wpseed_the_post_thumbnail_url($size, $postid) {
  //   echo wp_get_attachment_image_src( get_post_thumbnail_id($postid), $size )['0'];
  // }

  /* BLOG RELATED
  /------------------------*/

  // Output formatted post-date in german
  // function wpseed_get_the_date_german() {
  //   $months_de = ['Januar','Februar','März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'];
  //   return get_the_date('d.').' '.$months_de[intval(get_the_date('m'))-1].' '.get_the_date('Y');
  // }
  //
  // // Edit «read more» button
  // add_filter( 'the_content_more_link', 'modify_read_more_link' );
  // function modify_read_more_link() {
  //   return ' <span class="readmore"><a href="' . get_permalink() . '">[mehr...]</a>';
  //   // to hide the button use `return;`
  // }
