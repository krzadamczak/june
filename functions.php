<?php

wp_enqueue_style('style123', get_theme_file_uri('style.css'));

add_theme_support('post-thumbnails');

function custom_excerpt_length(){
    return 40;
}

add_filter('excerpt_length', 'custom_excerpt_length');

function bemit_nav_menu_css_class( $classes, $item, $args, $depth ) {
 
    // Reset all default classes and start adding custom classes to array.
    $_classes = [ 'menu__item' ];
   
    // Get theme location, fallback for `default`.
    $theme_location = $args->theme_location ? $args->theme_location : 'default';
   
     // Add theme location class.
    $_classes[] = 'menu__item--' . $theme_location;
   
    // Return custom classes.
    return $_classes;
   
  }
   
  add_filter( 'nav_menu_css_class', 'bemit_nav_menu_css_class', 10, 4 );

  function bemit_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
    $theme_location = $args->theme_location ? $args->theme_location : 'default';
    // Start adding custom classes.
    $atts['class'] = 'menu__anchor'.' '.'menu__anchor--'.$theme_location;
   
    return $atts;
  }
   
  add_filter( 'nav_menu_link_attributes', 'bemit_nav_menu_link_attributes', 10, 4 );


register_nav_menu('header-menu', 'Główne menu');
register_nav_menu('footer-menu', 'Menu w stopce');
?>
