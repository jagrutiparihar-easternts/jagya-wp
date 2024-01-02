<?php

//register taxonomies before post types, so taxonomy rewrites don't 404 (when the tax rewrite contains same text as post-type rewrite)
// Add a taxonomy to a Post Type
$labels = array(
	'name'                       => _x( 'Colours', 'taxonomy general name' ),
	'singular_name'              => _x( 'Colour', 'taxonomy singular name' ),
	'search_items'               => __( 'Search Colours' ),
	'popular_items'              => __( 'Popular Colours' ),
	'all_items'                  => __( 'All Colours' ),
	'parent_item'                => null,
	'parent_item_colon'          => null,
	'edit_item'                  => __( 'Edit Colour' ),
	'update_item'                => __( 'Update Colour' ),
	'add_new_item'               => __( 'Add New Colour' ),
	'new_item_name'              => __( 'New Colour Name' ),
	'separate_items_with_commas' => __( 'Separate Colours with commas' ),
	'add_or_remove_items'        => __( 'Add or remove Colours' ),
	'choose_from_most_used'      => __( 'Choose from the most used Colours' ),
	'not_found'                  => __( 'No Colours found.' ),
	'menu_name'                  => __( 'Colours' ),
);

$args = array(
	'hierarchical'          => false,
	'labels'                => $labels,
	'show_ui'               => true,
	'show_admin_column'     => true,
	//need enable below if heirarchical = false
	'update_count_callback' => '_update_post_term_count',
	'query_var'             => true,
	//'rewrite'               => array( 'slug' => '/designs/colour' ),
);

register_taxonomy( 'colour', 'project', $args );
//register_taxonomy( 'colour', array('design', 'anotherposttype'), $args );

// Register Custom Post Type
$labels = array(
	'name'                => _x( 'Designs', 'Post Type General Name', 'text_domain' ),
	'singular_name'       => _x( 'Design', 'Post Type Singular Name', 'text_domain' ),
	'menu_name'           => __( 'Designs', 'text_domain' ),
	'parent_item_colon'   => __( 'Parent Design:', 'text_domain' ),
	'all_items'           => __( 'All Designs', 'text_domain' ),
	'view_item'           => __( 'View Design', 'text_domain' ),
	'add_new_item'        => __( 'Add New Design', 'text_domain' ),
	'add_new'             => __( 'New Design', 'text_domain' ),
	'edit_item'           => __( 'Edit Design', 'text_domain' ),
	'update_item'         => __( 'Update Design', 'text_domain' ),
	'search_items'        => __( 'Search Designs', 'text_domain' ),
	'not_found'           => __( 'No Designs found', 'text_domain' ),
	'not_found_in_trash'  => __( 'No Designs found in Trash', 'text_domain' ),
);
$args = array(
	'label'               => __( 'designs', 'text_domain' ),
	'description'         => __( 'Designs', 'text_domain' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor' ),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_nav_menus'   => true,
	'show_in_admin_bar'   => true,
	'menu_position'       => 5,
	'menu_icon'           => 'dashicons-portfolio',
	//https://developer.wordpress.org/resource/dashicons/
	'rewrite'			  => array( 'slug' => 'design' ),
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'page',
);
register_post_type( 'design', $args );
