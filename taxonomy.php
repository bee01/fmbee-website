<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

    <div class="contents-title">
      <h2>HOME > Products(製品紹介)</h2>
    </div>
    <div class="contents-in cf">
      <div class="contents-left">
        <ul>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="<?php echo home_url("/"); ?>categories/ios">iPhone/iPadアプリ</a></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="<?php echo home_url("/"); ?>categories/android">Androidアプリ</a></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="<?php echo home_url("/"); ?>categories/beeindex">beeIndexシリーズ</a></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="<?php echo home_url("/"); ?>categories/beecam">beeCamシリーズ</a></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="<?php echo home_url("/"); ?>categories/sdk">各種SDK</a></li>
        </ul>
      </div>
      <div class="contents-right">
        <?php if ( have_posts() ) : ?>
        <div id="beeindex" class="contents-list">
          <h3><?php echo (single_term_title() != "") ? single_term_title() : "製品一覧"; ?></h3>
          <div class="contents-list-in">
            <ul>
        			<?php while ( have_posts() ) : the_post();
        				get_template_part( 'content-products', get_post_format() );
        			endwhile;

        			the_posts_pagination( array(
        				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
        				'next_text'          => __( 'Next page', 'twentyfifteen' ),
        				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
        			) ); ?>
            </ul>
          </div>
        </div>
        <?php else : get_template_part( 'content', 'none' ); endif; ?>
      </div>
    </div>

</div>
<?php get_footer(); ?>
