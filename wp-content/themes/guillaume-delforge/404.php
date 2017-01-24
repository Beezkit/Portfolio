<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<?php get_header(); ?>
<div class="wrapper">
    <div class="title-first text-center">
        <div class="error">
            <img src="<?php echo get_template_directory_uri(); ?>/images/404.png" class="img-responsiv" />
        </div>
        <h1><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
    </div>
</div>
<?php get_footer(); ?>
