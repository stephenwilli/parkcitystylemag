<?php

/* THEME SUPPORT
/===================================================== */

function theme_setup() {

	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	add_filter('show_admin_bar', '__return_false');

}

add_action('after_setup_theme', 'theme_setup');

// ADD LOGO TO LOGIN PAGE
add_action('login_head', 'logo_login_head');

function logo_login_head() {
	echo "
	<style>
		body.login #login h1 a {
			background: url('".get_bloginfo('template_url')."/assets/images/jhstyle-01.png') no-repeat transparent;
			background-size: contain;
			height: 150px;
			width: 300px;
			margin: 0 auto;
		}
	</style>
	";
}

// add ie conditional html5 shim to header
function add_ie_html5_shim () {
	echo '<!--[if lt IE 9]>';
	echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
	echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');