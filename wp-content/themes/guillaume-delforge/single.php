<?php get_header(); ?>
<div class="wrapper">
    <div class="title-first">
        <div id="breadcrumb" class="shadow-light">
            <?php custom_breadcrumbs(); ?>
        </div>
        <h2><?php the_title(); ?></h2>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="raw">
            <div class="xs-grid-12 s-grid-6">
                <div class="card-image">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsiv')); ?>
                </div>
            </div>
            <div class="xs-grid-12 s-grid-6">
                <p><?php the_content(); ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>
