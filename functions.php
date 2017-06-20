<?php

/*  Remove Admin Bar
/* ------------------------------------ */ 
	add_filter('show_admin_bar', '__return_false');

/*  Menu Support
/* ------------------------------------ */ 

  add_action( 'init', 'my_custom_menus' );
    function my_custom_menus() {
       register_nav_menus(
          array(
        'primary-menu' => __( 'vw_menu' ),
        'secondary-menu' => __( 'Secondary Menu' )
                  )
           );
    }

/*  Add Custom JS
/* ------------------------------------ */ 
function wpb_adding_scripts() {

  $vars = "value";


  wp_enqueue_style( 'style', get_stylesheet_uri() );


  }
  add_action( 'wp_footer', 'wpb_adding_scripts' ); 