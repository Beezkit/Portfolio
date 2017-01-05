<?php get_header(); ?>

<div class="wrapper">
    <div class="title-first">
        <h1><?php foreach ((get_the_category()) as $categroy) { echo $categroy->cat_name; }?></h1>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php the_post_thumbnail(); ?>

            <h2><?php the_title(); ?></h2>

            <p><?php the_excerpt(); ?></p>

            <a href="<?php the_permalink(); ?>">Lire la suite <i class="fa fa-plus"></i></a>

        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
