
<?php get_header(); ?>

		<div class="wrapper title-first">
		<?php // The Query
		$the_query = new WP_Query( array( 'pagename' => 'a-propos' ) );

		if ( $the_query->have_posts() ) { ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="xs-grid-10 xs-grid-offset-1 a-propos shadow-light article-thumbnail">
				<div class="xs-grid-7 content-article text-center">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>
                <div class="thumbnail shadow-light">
                    <?php the_post_thumbnail(); ?>
                </div>
			</div>
			<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

			<?php } ?>
			<div class="clear"></div>
		</div>


<?php get_footer(); ?>
