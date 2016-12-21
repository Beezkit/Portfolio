<?php

/* Thumbnails */
add_theme_support( 'post-thumbnails' );
the_post_thumbnail( 'full' );

 register_nav_menus( array(
     'Top' => 'Navigation principale'
 ) );

 // Show posts of 'post', 'page' and 'movie' post types on home page
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'page', 'movie' ) );
  return $query;
}
