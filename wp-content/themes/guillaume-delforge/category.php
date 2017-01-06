<?php get_header(); ?>

<div class="wrapper">
    <div class="title-first">
        <?php custom_breadcrumbs(); ?>
        <h1><?php foreach ((get_the_category()) as $categroy) { echo $categroy->cat_name; }?></h1>

        <?php while ( have_posts() ) : the_post(); ?>
            <div class="xs-grid-12 s-grid-6 l-grid-4">
                <div class="article-thumbnail text-justify ease">
                    <div class="thumbnail">
                        <?php the_post_thumbnail('full', array('class' => 'img-responsiv')); ?>
                        <a href="<?php the_permalink(); ?>"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="clear"></div>
    </div>
</div>


<?php get_footer(); ?>
