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
                <?php the_content(); ?>
                <p><strong>Cms :</strong> <span class="italic"><?php the_field('cms'); ?></span></p>
                <p><strong>Langage Utilisés :</strong> <span class="italic"><?php the_field('langage_utilise'); ?></span></p>
                <p><strong>Framework :</strong> <span class="italic"><?php the_field('framework'); ?></span></p>
                <p><strong>Task runner :</strong> <span class="italic"><?php the_field('task_runner'); ?></span></p>
            </div>
            <?php if (get_field('en_ligne')) { ?>
                <div class="text-center xs-grid-12 s-grid-6">
                    <a href="<?php the_field('lien_du_site') ?>" target="_blank" class="btn btn-big btn-up blue-light blue-light-hover shadow-light ease-in-out">Voir le projet</a>
                </div>
            <?php } else {
                $images= get_field('slider');
                if( $images ):
            ?>
            <div class="xs-grid-8 xs-grid-offset-2">
                <div class="owl-carousel owl-theme">
                    <?php foreach( $images as $image ): ?>
                        <div class="item">
                            <img src="<?php echo $image['image']; ?>" class="img-responsiv" />
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
                <?php endif; ?>
            <?php } ?>
        </div>
        <?php endwhile; ?>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>
