<?php
/**
Theme Functions
*/


add_theme_support( 'post-thumbnails', array( 'post', 'slider') );
add_image_size( 'slider-image', 920, 347, true );

/* Register Custom Post Types********************************************/

	
	function create_post_type() {
		register_post_type( 'slider',
			array(
				'labels' => array(
					'name' => __( 'Slides' ),
					'singular_name' => __( 'Slide' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __( 'Add New Slide' ),
					'edit_item' => __( 'Edit Slide' ),
					'new_item' => __( 'New Slide' ),
					'view_item' => __( 'View Slide' ),
					'not_found' => __( 'Sorry, we couldn\'t find the Slide you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
			'show_in_menu' => false,
			'menu_position' => 14,
			'has_archive' => false,
			'hierarchical' => false, 
			'capability_type' => 'page',
			'rewrite' => array( 'slug' => 'slide' ),
			'supports' => array( 'title','editor','custom-fields', 'thumbnail' )
			)
		);
	}
	add_action( 'init', 'create_post_type' );
 


 