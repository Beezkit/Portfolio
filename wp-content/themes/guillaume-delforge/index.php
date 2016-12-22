
<?php get_header(); ?>

		<div class="wrapper">
			<div class=" title-first">
			<?php // The Query
			$the_query = new WP_Query( array( 'pagename' => 'a-propos' ) );

			if ( $the_query->have_posts() ) { ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<div class="xs-grid-12 l-grid-10 l-grid-offset-1 a-propos shadow-light article-thumbnail">
					<div class="xs-grid-12 l-grid-7 content-article text-center">
						<h2><?php the_title(); ?></h2>
						<div class="content">
							<p><?php the_content(); ?></p>
						</div>
					</div>
	                <div class="thumbnail">
	                    <?php the_post_thumbnail('full', array('class' => 'img-responsiv shadow-light')); ?>
	                </div>
				</div>
				<?php endwhile; ?>

					<?php wp_reset_postdata(); ?>

				<?php } ?>
				<div class="clear"></div>

			</div>

			<div class="title-second">
					<?php
					$the_query = new WP_Query( array('category_name'  => 'portfolio', 'post_per_page' => '6'));
					if ( $the_query->have_posts() ) { ?>
						<div class="portfolio">
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<h2><?php echo get_cat_name(3); ?></h2>

						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					<?php } ?>
					</div>
			</div>

		</div>


<?php get_footer(); ?>
