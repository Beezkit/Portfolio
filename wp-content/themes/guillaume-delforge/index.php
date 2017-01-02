
<?php get_header(); ?>

		<div class="wrapper">
			<div id="aboutme" class="title-first">
			<?php // The Query
			$the_query = new WP_Query( array( 'pagename' => 'a-propos' ) );

			if ( $the_query->have_posts() ) { ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<div class="xs-grid-12 l-grid-10 l-grid-offset-1 a-propos shadow-light">
					<div class="xs-grid-12 l-grid-7 content-article text-center">
						<h2><?php the_title(); ?></h2>
						<div class="content">
							<p><?php the_content(); ?></p>
						</div>
						<div class="social text-right">
							<a href="<?php echo get_field('Github'); ?>" class="border-radius-100 btn-up shadow-light ease" target="_blank"><i class="fa fa-github-alt" aria-hidden="true"></i></a>
							<a href="<?php echo get_field('Linkedin'); ?>" class="border-radius-100 btn-up shadow-light ease" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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

			<div id="portfolio" class="title-second">
				<?php $the_query = new WP_Query( array('category_name'  => 'portfolio', 'post_per_page' => '6', 'order_by' => 'date'));
				if ( $the_query->have_posts() ) { ?>
					<div class="portfolio text-center">
						<h2><?php echo get_cat_name(3); ?></h2>
						<div class="raw">
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="xs-grid-12 s-grid-6 l-grid-4">
								<div class="article-thumbnail text-justify ease">
									<div class="thumbnail">
										<?php the_post_thumbnail('full', array('class' => 'img-responsiv')); ?>
									</div>
									<div class="article-link ease">
										<h3 class="title-thumbnail left"><?php the_title(); ?></h3>
										<a href="#" class="btn btn-up blue-light blue-light-hover shadow-light ease-in-out right border-radius-100" title="Voir le contenu"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
										<div class="clear"></div>
										<div class="content-article ease">
											<p><?php the_excerpt(); ?></p>
											<a href="<?php the_permalink(); ?>" class="btn btn-up blue-light blue-light-hover shadow-light ease-in-out" title="En savoir plus">En savoir plus</a>
										</div>
									</div>
								</div>
							</div>
							<?php endwhile; ?>

							<?php wp_reset_postdata(); ?>
							<div class="clear"></div>
						</div>
					</div>
				<?php } ?>
			</div>

			<div id="skills" class="title-second">
				<?php $the_query = new WP_Query( array('category_name'  => 'competences', 'orderby' => 'id', 'order' => 'asc'));
				if ( $the_query->have_posts() ) { ?>
					<div class="competences text-center">
						<h2><?php echo get_cat_name(4); ?></h2>
						<div class="raw">
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="xs-grid-12 s-grid-6 list-skills">
								<div class="title">
									<span class="left"><?php the_title(); ?></span>
									<span class="right"><?php echo get_field('pourcentage'); ?>&nbsp;%</span>
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
								<div class="progress-bar shadow-light">
									<div class="bar blue-light" data-width="<?php echo get_field('pourcentage'); ?>"></div>
								</div>
							</div>
							<?php endwhile; ?>

							<?php wp_reset_postdata(); ?>
							<div class="clear"></div>
						</div>
					</div>
				<?php } ?>
			</div>

		</div>

		<div id="exp" class="experciences title-second">
			<div class="text-center">
				<h2>Expériences Professionnelles</h2>
			</div>
			<div class="wrapper">
				<div class="raw">
				<?php query_posts( array ( 'post_type' => 'experiences', 'order' => 'DESC' ) ); ?>
						<?php while ( have_posts() ) : the_post();
						$count++;
						$even_odd_class = $wp_query->current_post % 2 == 0 ? 'even' : 'odd';
						?>
						<?php $post_id = get_the_ID(); ?>

							<div class="xs-grid-12 <?php echo $even_odd_class; ?>">
								<div class="xs-grid-12 s-grid-3 m-grid-2 logo">
									<?php the_post_thumbnail('full', array('class' => 'img-responsiv')); ?>
								</div>
								<div class="xs-grid-12 s-grid-9 m-grid-8 content text-justify">
									<p><span class="societe"><?php the_title(); ?></span><span class="date"> du <?php the_field('date_debut'); ?> <?php the_field('date_de_fin'); ?></span></p>
									<p><?php the_content(); ?></p>
								</div>
								<div class="xs-grid-12 s-grid-12 m-grid-2 link">
									<a href="<?php the_permalink(); ?>" class="btn btn-up blue-light blue-light-hover shadow-light ease-in-out" title="Voir l'agence" target="_blank">Voir l'agence</a>
								</div>
								<div class="clear"></div>
							</div>

						<?php endwhile; ?>

						<div class="clear"></div>
				<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>


<?php get_footer(); ?>
