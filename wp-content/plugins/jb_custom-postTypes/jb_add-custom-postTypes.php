<?php

// add_action( 'init', 'jb_create_bands' );
// function jb_create_bands() {
//
// 	register_post_type( 'bands',
// 		array(
// 			'labels' => array(
// 				'name' => __( 'Bands' ),
// 				'singular_name' => __( 'Band' ),
// 				'add_new'        	  => 'Een nieuwe band toevoegen',
// 				'add_new_item'        => 'Voeg een nieuwe band toe',
// 				'edit_item'        	  => 'Deze band bewerken',
// 				'new_item'        	  => 'Nieuwe band toevoegen',
// 				'view_item'        	  => 'Deze band bekijken',
// 			),
// 			'supports'           => array( 'title', 'editor', 'thumbnail' ),
// 			'public' => true,
// 			'has_archive' => true,
// 			'rewrite' => array('slug' => 'bands'),
// 			'hierarchical'        => false,
// 			'public'              => true,
// 			'show_ui'             => true,
// 			'show_in_menu'        => true,
// 			'show_in_nav_menus'   => true,
// 			'show_in_admin_bar'   => true,
// 			'menu_position'       => 4,
// 			'menu_icon'			  => 'dashicons-format-audio',
// 			'can_export'          => true,
// 			'has_archive'         => true,
// 			'exclude_from_search' => false,
// 			'publicly_queryable'  => true,
// 			'capability_type'     => 'page',
// 		)
// 	);
// }

add_action( 'init', 'jb_create_future_events' );
function jb_create_future_events() {

	register_post_type( 'events',
		array(
			'labels' => array(
				'name' => __( 'Elektra events' ),
				'singular_name' => __( 'Event' ),
				'add_new'        	  => 'Een nieuw evenement toevoegen',
				'add_new_item'        => 'Voeg een nieuw evenement toe',
				'edit_item'        	  => 'Dit evenement bewerken',
				'new_item'        	  => 'Nieuw evenement toevoegen',
				'view_item'        	  => 'Dit evenement bekijken',
			),
			'supports'           => array( 'title', 'editor', 'thumbnail' ),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'events'),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'			  => 'dashicons-carrot',
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		)
	);
}
