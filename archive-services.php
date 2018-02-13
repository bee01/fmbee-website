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
      <h2>SERVICES</h2>
      <h3>FM.Beeのシステム開発の一例をご紹介いたします。</h3>
    </div>
    <div class="contents-in cf">
      <div class="contents-left">
        <ul>
          <?php global $page_kind;
          $page_kind = "services";
          get_sidebar("iphone"); ?>
        </ul>
      </div>
      <div class="contents-right">
        <?php 
          $paged = get_query_var('paged');
          $query = new WP_Query(
            array(
              'paged' => $paged,
              'post_type' => 'services',
              'taxonomy' => 'development',
              'field' => 'slug',
              'term' => 'development'
            )
          );
        ?>

        <?php if ( $query->have_posts() ) : ?>
        <div id="development" class="contents-list">
          <h3><?php echo (single_term_title() != "") ? single_term_title() : "システム開発事例"; ?></h3>
          <div class="contents-list-in">
            <ul>
              <li>
                <ul id="contents-list-pager">
            			<?php while ( $query->have_posts() ) : $query->the_post();
            				get_template_part( 'content-services', get_post_format() );
            			endwhile;

/* ページネーションを非表示
                    global $wp_rewrite;
                    $paginate_base = get_pagenum_link(1);
                    if(strpos($paginate_base, '?') || ! $wp_rewrite -> using_permalinks()){
                      $paginate_format = '';
                      $paginate_base = add_query_arg('paged','%#%');
                    }else{
                      $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                      user_trailingslashit('page/%#%/','paged');;
                      $paginate_base .= '%_%';
                    }
                    echo "<div class='pager'>".paginate_links(array(
                      'base' => $paginate_base,
                      'format' => $paginate_format,
                      'total' => $query->max_num_pages,
                      'mid_size' => 6,
                      'current' => ($paged ? $paged : 1),
                      'prev_text' => '< 前へ',
                      'next_text' => '次へ >',
                    ))."</div>";
*/
                    wp_reset_postdata();
                  ?>
                </li>
              </ul>
            </ul>
          </div>
        </div>

        <?php 
          $paged = get_query_var('paged');
          $query = new WP_Query(
            array(
              'paged' => $paged,
              'post_type' => 'services',
              'taxonomy' => 'development',
              'field' => 'slug',
              'term' => 'system'
            )
          );
        ?>

        <?php else : get_template_part( 'content', 'none' ); endif; ?>

        <?php if ( $query->have_posts() ) : ?>
        <div id="coverage" class="contents-list">
          <h3><?php echo (single_term_title() != "") ? single_term_title() : "組込ソフトウェア開発"; ?></h3>
          <div class="contents-list-in">
            <ul>
              <li>
                <ul id="contents-list-pager">
            			<?php while ( $query->have_posts() ) : $query->the_post();
            				get_template_part( 'content-services', get_post_format() );
            			endwhile;

/* ページネーションを非表示
                    global $wp_rewrite;
                    $paginate_base = get_pagenum_link(1);
                    if(strpos($paginate_base, '?') || ! $wp_rewrite -> using_permalinks()){
                      $paginate_format = '';
                      $paginate_base = add_query_arg('paged','%#%');
                    }else{
                      $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                      user_trailingslashit('page/%#%/','paged');;
                      $paginate_base .= '%_%';
                    }
                    echo "<div class='pager'>".paginate_links(array(
                      'base' => $paginate_base,
                      'format' => $paginate_format,
                      'total' => $query->max_num_pages,
                      'mid_size' => 6,
                      'current' => ($paged ? $paged : 1),
                      'prev_text' => '< 前へ',
                      'next_text' => '次へ >',
                    ))."</div>";
*/
                    wp_reset_postdata();
                  ?>
                </li>
              </ul>
            </ul>
          </div>
        </div>

        <?php else : get_template_part( 'content', 'none' ); endif; ?>
      </div>
    </div>

<?php get_footer(); ?>
