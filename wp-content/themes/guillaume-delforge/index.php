<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

		<div class="wrapper title-first">
		<?php // The Query 
		$the_query = new WP_Query( array( 'pagename' => 'a-propos' ) ); 

		if ( $the_query->have_posts() ) { ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="xs-grid-12 a-propos shadow-light">
				<div class="xs-grid-5">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>
			</div>
			<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

			<?php } ?>
			<div class="clear"></div>
		</div>
	

<?php get_footer(); ?>
