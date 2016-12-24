<?php

/* Thumbnails */
add_theme_support( 'post-thumbnails' );
the_post_thumbnail( 'full' );

remove_filter( 'the_excerpt', 'wpautop' );
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//empêche la conversion des certaines entités texte en entités HTML
remove_filter( 'the_content', 'wpautop' );


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
