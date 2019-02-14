<?php

/* OPTIONS PAGES
/===================================================== */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-admin-site',
		'redirect'		=> false, // This allows the parent to have it's own page instead of redirecting to the first child.
		'position' 		=> 2
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Category Settings',
		'menu_title'	=> 'Category Settings',
		'parent_slug'	=> 'theme-settings',
		'capability'	=> 'manage_options'
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Testimonials',
		'menu_title'	=> 'Testimonials',
		'menu_slug' 	=> 'testimonials',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-format-chat',
		'redirect'		=> false, // This allows the parent to have it's own page instead of redirecting to the first child.
		'position' 		=> 5
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Footer Settings',
	// 	'menu_title'	=> 'Footer Settings',
	// 	'parent_slug'	=> 'theme-settings',
	// 	'capability'	=> 'manage_options'
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Tracking Codes',
	// 	'menu_title'	=> 'Tracking Codes',
	// 	'parent_slug'	=> 'theme-settings',
	// 	'capability'	=> 'manage_options'
	// ));

}

// SUB PAGES

// function my_acf_options_page_settings( $settings ) {
// 	 $settings['title'] = 'Theme Settings';
// 	 $settings['pages'] = array('Header', 'Sidebar', 'Footer', 'Tracking');

// 	 return $settings;
// }

// add_filter('acf/options_page/settings', 'my_acf_options_page_settings');