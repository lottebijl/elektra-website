<?php

  // Voeg custom menu's toe
  add_action( 'init', 'jb_register_menus' );

  function jb_register_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        'content-menu' => __( 'Content Menu' )
      )
    );
  }

  // Voeg custom classes toe aan de anchors van het content-menu
  add_filter( 'nav_menu_link_attributes', 'jb_add_class_to_content_menu_anchors', 10, 3 );

  function jb_add_class_to_content_menu_anchors( $atts, $item, $args ) {
    if( $args->theme_location == 'content-menu' ) {
      $atts['class'] = 'btn btn-primary';
    }
    return $atts;
  }
?>
