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
      <h2>HOME > NEWS(プレリリース)</h2>
    </div>
    <div class="contents-in cf">
      <div class="contents-left">
        <ul>
          <?php get_sidebar("news"); ?>
        </ul>
      </div>
      <div class="contents-right">
        <?php 
          $paged = get_query_var('paged');
          $query = new WP_Query(
            array(
              'paged' => $paged,
              'post_type' => 'news',
              'taxonomy' => 'new',
              'field' => 'slug',
              'term' => 'prerelease'
            )
          );
        ?>
        <?php if ( $query->have_posts() ) : ?>
        <div id="beeindex" class="contents-list">
          <h3><?php echo (single_term_title() != "") ? single_term_title() : "プレリリース"; ?></h3>
          <div class="contents-list-in">
            <ul>
              <li>
                <ul id="contents-list-pager">
            			<?php while ( $query->have_posts() ) : $query->the_post();
            				get_template_part( 'content-news', get_post_format() );
            			endwhile;
/*
                  $GLOBALS['wp_query']->max_num_pages = $query->max_num_pages;
            			the_posts_pagination( array(
                    'mid_size'           => 1,
            				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
            				'next_text'          => __( 'Next page', 'twentyfifteen' ),
            				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
            			));
*/
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

                    wp_reset_postdata();
                  ?>

                </ul>
              </li>
            </ul>
          </div>
        </div>
        <?php else : get_template_part( 'content', 'none' ); endif; ?>

        <div id="coverage" class="contents-list">
          <h3>掲載サイト</h3>
          <div class="contents-list-in">
            <ul>
              <li>
                <h5>2012年02月09日</h5>
                <div class="product_summary">
                  <p class="product_news cf">
                    Vector Windows > 画像＆サウンド > ムービー関係ユーティリティ　ソフト紹介ページ<br />
                    <a href="http://www.vector.co.jp/soft/winnt/art/se495413.html" target="_blank">http://www.vector.co.jp/soft/winnt/art/se495413.html</a>　「beeCam かんたん！キャプチャV」
                  </p>
                </div>

                <h5>2012年02月09日</h5>
                <div class="product_summary">
                  <p class="product_news cf">
                    Vector Windows > ハードウェア－スキャナ・カメラ用　ソフト紹介ページ<br />
                    <a href="http://www.vector.co.jp/soft/winnt/hardware/se487052.html" target="_blank">http://www.vector.co.jp/soft/winnt/hardware/se487052.html</a>　「beeCam かんたん！３Ｄ」
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div id="exlinks" class="contents-list">
          <h3>その他リンク</h3>
          <div class="contents-list-in">
            <ul>
              <li>
                <div class="product_summary">
                  <p class="product_links cf">
                    <a href="http://www.twitter.com/FMBee_Corp" target="_blank">社長の公式ツイッター</a>　はじめてみたものの・・・
                  </p>
                </div>

                <div class="product_summary">
                  <p class="product_links cf">
                    <a href="http://fm-bee.at.webry.info/" target="_blank">社長のきまま日記</a>　なかなか更新がありません（＾＾；
                  </p>
                </div>

                <div class="product_summary">
                  <p class="product_links cf">
                    <a href="http://fmbeemh.exblog.jp/" target="_blank">えふえむびーもんはん部</a>　部活日誌・・・
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
