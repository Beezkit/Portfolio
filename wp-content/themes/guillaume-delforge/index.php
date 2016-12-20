
<?php get_header(); ?>

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
