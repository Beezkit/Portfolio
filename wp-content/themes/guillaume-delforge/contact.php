<?php
/**
 * Template Name: Contact
 *
 */
?>

<?php get_header(); ?>

	<div class="wrapper">
        <div  class="title-first">
		<?php while ( have_posts() ) : the_post(); ?>
            <div id="contact" class="text-center">
                <h1><?php the_title(); ?></h1>


				<?php the_content(); ?>


            </div>
		<?php endwhile; ?>
        </div>
    </div>

<?php get_footer(); ?>
