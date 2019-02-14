<?php

/* REGISTER TAXONOMIES
/===================================================== */

add_action( 'init', 'create_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_taxonomy() {

// Category Taxonomy For Publications
//   $labels = array(
//     'name' => _x( 'Category', 'taxonomy general name' ),
//     'singular_name' => _x( 'Category', 'taxonomy singular name' ),
//     'search_items' =>  __( 'Search Categories' ),
//     'all_items' => __( 'All Categories' ),
//     'parent_item' => __( 'Parent Category' ),
//     'parent_item_colon' => __( 'Parent Category:' ),
//     'edit_item' => __( 'Edit Categories' ),
//     'update_item' => __( 'Update Categories' ),
//     'add_new_item' => __( 'Add New Category' ),
//     'new_item_name' => __( 'New Category Name' ),
//     'menu_name' => __( 'Category' ),
//   );

// // Now register the taxonomy
//   register_taxonomy('type',array('publication'), array(
//     'hierarchical' => true,
//     'labels' => $labels,
//     'show_ui' => true,
//     'show_admin_column' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'form' ),
//   ));
}