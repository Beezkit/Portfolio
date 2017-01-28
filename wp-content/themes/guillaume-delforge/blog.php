<?php
/**
 * Template Name: Blog
 *
 */
?>

<?php get_header(); ?>

<div id="blog" class="wrapper">
    <div class="title-first">
        <div class="xs-grid-12">
            <div id="breadcrumb" class="shadow-light">
                <?php custom_breadcrumbs(); ?>
            </div>
        </div>
        <h1><?php the_title(); ?></h1>
<?php query_posts( array ( 'post_type' => 'blog', 'order' => 'ASC' ) ); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>

    <?php endwhile; ?>

<?php wp_reset_query(); ?>
    </div>
</div>

<?php get_footer(); ?>
