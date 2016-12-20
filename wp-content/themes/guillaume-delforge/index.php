

<?php get_header(); ?>

<?php $args = array( 'post_type' => 'page', 'posts_name' => 'a-propos' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  the_title();
  echo '<div class="entry-content">';
  the_content();
  echo '</div>';
endwhile; ?>

<?php get_footer(); ?>
