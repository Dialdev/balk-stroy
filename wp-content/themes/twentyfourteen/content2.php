<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-header2">
        <?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>

        <?php
            endif;

            if ( is_single() ) :
                the_title( '<h1>', '</h1>' );
            else :
                the_time('j F, Y');
                the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
            endif;
        ?>

        
    </div><!-- .entry-header -->


    <div class="entry-search">
        <a href="<? the_permalink()?>" rel="bookmark">
            <?php the_excerpt(); ?>
        </a>
    </div><!-- .entry-summary -->
  

    
</div><!-- #post-## -->
