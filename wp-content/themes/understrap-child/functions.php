<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

    // Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.css', array(), $the_theme->get( 'Version' ) );
     wp_enqueue_style( 'owl-css', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css', array(), $the_theme->get( 'Version' ) );
     wp_enqueue_style( 'owl-css1', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', array(), $the_theme->get( 'Version' ) );
     wp_enqueue_style( 'animate.css', get_stylesheet_directory_uri() . '/css/animate.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js', array(), $the_theme->get( 'Version' ), true );
  
   /* wp_enqueue_script( 'scroll-trigger', get_stylesheet_directory_uri() . '/js/ScrollTrigger.min.js', array(), $the_theme->get( 'Version' ), true );*/
    wp_enqueue_script( 'owl-carusel', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js',array('jquery'), '', $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-scripts-custom', get_stylesheet_directory_uri() . '/js/child-theme-custom.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}


function register_my_menu() {
  register_nav_menu('new-menu',__( 'New Menu' ));
}
add_action( 'init', 'register_my_menu' );