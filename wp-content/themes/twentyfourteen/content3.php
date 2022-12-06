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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

    
    
    
    <div class="rw3smnin">
        <a class="rw3smna" rel="bookmark">
            <?php the_excerpt(); ?>
        </a>
        <?the_title()?>
    </div>
	

	
</article><!-- #post-## -->
