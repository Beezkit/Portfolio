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
        <div class="xs-grid-12">
            <div class="text-center">
                <h1><?php the_title(); ?></h1>
            </div>
            <?php query_posts( array ( 'post_type' => 'blog', 'order' => 'ASC' ) ); ?>

            <?php
			//list terms in a given taxonomy (useful as a widget for twentyten)
			$taxonomy = 'catégories';
			$tax_terms = get_terms($taxonomy);
			?>
            <div class="filter">
                <div class="icon">
                    <span>Filtre</span>
                    <i class="fa fa-filter" aria-hidden="true"></i>
                </div>
                <?php $taxonomy = 'catégories';

// Get the term IDs assigned to post.
$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );

// Separator between links.
$separator = ', ';

if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {

    $term_ids = implode( ',' , $post_terms );

    $terms = wp_list_categories( array(
        'title_li' => '',
        'style'    => 'none',
        'echo'     => false,
        'taxonomy' => $taxonomy,
        'include'  => $term_ids
    ) );

    $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

    // Display post categories.
    echo  $terms;
}?>
    			<ul>
    				<?php
                    var_dump($tax_terms);
    				foreach ($tax_terms as $tax_term) {
    				echo '<li class="category" data-ref="'.$tax_term->name.'">' . $tax_term->name. '</li>';
    				}
    				?>
    				<li class="category" data-ref="all">Tout</li>
    			</ul>
            </div>

                <?php while ( have_posts() ) : the_post(); ?>

                    <h2><?php the_title(); ?></h2>

                <?php endwhile; ?>

            <?php wp_reset_query(); ?>
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>
