<?php get_header(); ?>

<div class="wrapper">
    <div class="title-first">
        <div class="xs-grid-12">
            <div id="breadcrumb" class="shadow-light">
                <?php custom_breadcrumbs(); ?>
            </div>
        </div>
        <h1><?php foreach ((get_the_category()) as $categroy) { echo $categroy->cat_name; }?></h1>

        <?php while ( have_posts() ) : the_post(); ?>
            <div class="xs-grid-12 s-grid-6 l-grid-4">
                <div class="article-thumbnail text-justify ease">
                    <div class="thumbnail">
                        <?php the_post_thumbnail('full', array('class' => 'img-responsiv')); ?>
                    </div>
                    <div class="content-article text-center">
                        <h2 class="ease"><?php the_title(); ?></h2>
                        <a href="<?php the_permalink(); ?>" class="btn blue-light blue-light-hover ease">Voir le projet</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="clear"></div>
    </div>
</div>


<?php get_footer(); ?>
