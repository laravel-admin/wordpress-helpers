<?php

// Register Custom Post Type
add_action( 'init', function() {
	$labels = array(
		'name'                => _x( 'Examples', 'Examples', 'wordplate' ),
		'singular_name'       => _x( 'Voorbeeld', 'Example', 'wordplate' ),
		'menu_name'           => __( 'Examples', 'wordplate' ),
		'all_items'           => __( 'All Examples', 'wordplate' ),
		'view_item'           => __( 'Show Examples', 'wordplate' ),
		'add_new_item'        => __( 'Add example', 'wordplate' ),
		'add_new'             => __( 'Add example', 'wordplate' ),
		'edit_item'           => __( 'Edit example', 'wordplate' ),
		'update_item'         => __( 'Edit example', 'wordplate' ),
		'search_items'        => __( 'Search', 'wordplate' ),
		'not_found'           => __( 'Not found', 'wordplate' ),
		'not_found_in_trash'  => __( 'Not found in trash', 'wordplate' ),
	);
	$args = array(
		'label'               => __( 'Example', 'wordplate' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', 'excerpt', 'editor','author'),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 40,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'post',
	);
	register_post_type( 'Example', $args );
}, 0);
