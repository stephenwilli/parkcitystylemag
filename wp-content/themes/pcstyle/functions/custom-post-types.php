<?php

/* CUSTOM POST TYPES
/===================================================== */

add_action( 'init', 'create_post_type' );

	function create_post_type() {

	register_post_type( 'e-edition',
			array (	'label' => 'E-Editions',
				'description' => '',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'has_archive' => true,
            	'query_var' => true,
				'rewrite' => true,
				'query_var' => true,
				'supports' => array('title','editor','thumbnail','page-attributes'),
				'menu_icon' => 'dashicons-images-alt2',

				'labels' =>
					array (
	  					'name' => 'E-Editions', /* This is the Title of the Group */
	  					'singular_name' => 'E-Edition', /* This is the individual type */
						'menu_name' => 'E-Editions', /* The add new menu item */
						'add_new' => 'Add E-Edition', /* Add New Display Title */
						'add_new_item' => 'Add New E-Edition',
						'edit' => 'Edit', /* Edit Dialog */
						'edit_item' => 'Edit E-Edition', /* Edit Display Title */
						'new_item' => 'New E-Edition', /* New Display Title */
						'view_item' => 'View E-Edition', /* View Display Title */
						'search_items' => 'Search E-Editions', /* Search Custom Type Title */
						'not_found' => 'No E-Editions Found', /* This displays if there are no entries yet */
						'not_found_in_trash' => 'No E-Editions Found in Trash' /* This displays if there is nothing in the trash */
						),
			)
	); // End publication

		register_post_type( 'advertisers',
			array (	'label' => 'Advertisers',
				'description' => '',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'has_archive' => true,
				'rewrite' => true,
				'query_var' => true,
				'supports' => array('title','thumbnail','page-attributes'),
				'menu_icon' => 'dashicons-megaphone',

				'labels' =>
					array (
	  					'name' => 'Advertisers', /* This is the Title of the Group */
	  					'singular_name' => 'Advertiser', /* This is the individual type */
						'menu_name' => 'Advertisers', /* The add new menu item */
						'add_new' => 'Add Advertiser', /* Add New Display Title */
						'add_new_item' => 'Add New Advertiser',
						'edit' => 'Edit', /* Edit Dialog */
						'edit_item' => 'Edit Advertiser', /* Edit Display Title */
						'new_item' => 'New Advertiser', /* New Display Title */
						'view_item' => 'View Advertiser', /* View Display Title */
						'search_items' => 'Search Advertisers', /* Search Custom Type Title */
						'not_found' => 'No Advertisers Found', /* This displays if there are no entries yet */
						'not_found_in_trash' => 'No Advertisers Found in Trash' /* This displays if there is nothing in the trash */
						),
			)
	); // End advertisers


}