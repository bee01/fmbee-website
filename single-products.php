<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="contents">
  <div class="contents-title">
    <?php echo show_breadcrumb("products", get_the_title()); ?>
  </div>

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		/*
		 * Include the post format-specific template for the content. If you want to
		 * use this in a child theme, then include a file called called content-___.php
		 * (where ___ is the post format) and that will be used instead.
		 */
		get_template_part( 'content-products-single', get_post_format() );

	// End the loop.
	endwhile;
	?>

</div>
<?php get_footer(); ?>