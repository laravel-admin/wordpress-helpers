<?php

// hook into the init action and call create_book_taxonomies when it fires

add_action( 'init', function () {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Types', 'Types', 'wordplate' ),
		'singular_name'     => _x( 'Type', 'Type', 'wordplate' ),
		'search_items'      => __( 'Search Types', 'wordplate' ),
		'all_items'         => __( 'All Types', 'wordplate' ),
		'parent_item'       => __( 'Parent Type', 'wordplate' ),
		'parent_item_colon' => __( 'Parent Type:', 'wordplate' ),
		'edit_item'         => __( 'Edit Type', 'wordplate' ),
		'update_item'       => __( 'Update Type', 'wordplate' ),
		'add_new_item'      => __( 'Add New Type', 'wordplate' ),
		'new_item_name'     => __( 'New Type Name', 'wordplate' ),
		'menu_name'         => __( 'Type', 'wordplate' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => false,
	);

	register_taxonomy( 'Type', array( 'example' ), $args );
});
