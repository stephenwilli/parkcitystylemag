<?php

/* SHORTCODES
/===================================================== */

  /* BUTTON
  /------------------------*/
  function shortcode_button($atts) {
     $link = $atts['link'];
     $text = $atts['text'];
     return '<a href="'.$link.'" class="button">'.$text.'</a>';
  }
  add_shortcode('button', 'shortcode_button');
