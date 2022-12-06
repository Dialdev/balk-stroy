<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
<div class="breadcrumb">
<?php
if(function_exists('bcn_display'))
{
 bcn_display();
}
?>
<?//echo get_the_title();?>
<?/*
<div id="breadcrumbs">
   <?php if (is_home()) { ?>

  <?php } elseif (is_single()) { ?>
      <a href="<?php echo get_option('home'); ?>">Главная</a> »
      <?php foreach((get_the_category()) as $cat) {
      $cat=$cat->cat_ID;
      echo(get_category_parents($cat, TRUE, ' » ')); } the_title(); ?>

     <?php } ?>
 </div>
*/?>

</div>

<?/*<pre><?print_r(get_the_category());?></pre>*/?>

<?
	//$title = get_the_title();
	//$titlemod = substr($title, 0, 50);
	//echo $titlemod;
?>

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// Previous/next post navigation.
					twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				
 					/*echo do_shortcode( '[contact-form-7 id="1485" title="Замер на услугах"]' ); */

				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php

get_footer();
