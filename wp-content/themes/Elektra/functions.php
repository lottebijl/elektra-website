<?php

  // Voeg menu's toe
  add_action( 'init', 'jb_register_menus' );

  function jb_register_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }

  // Voeg thumbnails toe aan posts
  add_theme_support( 'post-thumbnails' );

?>
