<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

remove_filter('the_content', 'wpautop');

$forfilename = get_field('forfilename');
$download_link = get_field('download_link');
$supplement_download = get_field('supplement_download');
$supplement_support = get_field('supplement_support');
?>

<div class="products_kanban">
  <img src="<?php echo get_template_directory_uri(); ?>/images/products/<?php echo $forfilename; ?>.jpg" alt>
</div>
<div class="contents-in cf">
  <div class="contents-left">
    <ul>
      <?php global $page_kind;
      $page_kind = "products";
      get_sidebar("iphone"); ?>
    </ul>
  </div>
  <div class="contents-right">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="entry-content">
    		<?php
    			/* translators: %s: Name of current post */
    			the_content( sprintf(
    				__( 'Continue reading %s', 'twentyfifteen' ),
    				the_title( '<span class="screen-reader-text">', '</span>', false )
    			) );
    		?>

      <div id="download" class="contents-list">
        <h3>製品のダウンロード</h3>
        <div class="contents-list-in">
          <div class="product_summary">
            <div class="product_summary_in cf">
              <?php if(preg_match('/vector.co.jp/', $download_link)){ ?>
                <ul>
                  <li>
                    <a href="<?php echo $download_link; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/button-dl.gif" alt="" /></a>　<a href="<?php echo $download_link; ?>" target="_blank"><?php echo get_the_title(); ?>本体のダウンロードはこちら</a>
                  </li>
                  <li><a href="http://fmbee.com/files/Cam3DHelp.zip"><img src="<?php echo get_template_directory_uri(); ?>/images/button-help.gif" alt="" /></a>　<a href="http://fmbee.com/files/Cam3DHelp.zip">ヘルプファイルのダウンロードはこちら</a></li>
                </ul>

              <?php }else if(preg_match('/apple.com/', $download_link)){ ?>
                <div class="product_summary_left">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/qr/i-qr-<?php echo $forfilename; ?>.png" alt>
                </div>
                <div class="product_summary_right">
                  <a href="https://itunes.apple.com/us/app/the-werewolf/id588653100" target="_blank">アプリのダウンロードはこちら</a><br />
                  Apple Storeにて「<?php echo get_the_title(); ?>」をダウンロード頂けます。<br />
                  iPhone端末でアクセスしてください。<br />
                  <?php echo $supplement_download; ?>
                </div>

              <?php }else if(preg_match('/google.com/', $download_link)){ ?>
                <div class="product_summary_left">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/qr/a-qr-<?php echo $forfilename; ?>.png" alt>
                </div>
                <div class="product_summary_right">
                  <p>パソコンよりご覧の場合、左記コードも是非ご利用ください。</p>
                  <p class="product_download"><a href="<?php echo $download_link; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-android.png" alt /></a></p>
                </div>

              <?php }else{ ?>
                <p>現在準備中です。</p>

              <?php } ?>
            </div>
          </div>
        </div>
      </div>

      <div id="support" class="contents-list">
        <h3>製品に関するサポート</h3>
        <div class="contents-list-in">
          <ul>
            <li>
              <div class="product_summary">
                <p class="product_summary_in cf">
                  ●まずは、<a href="<?php echo home_url("/"); ?>supports/">Q&A</a>をご覧ください。<br />
                  ●お問合わせは<a href="<?php echo home_url("/"); ?>contacts/">こちら</a>から。<br />
                  <?php echo $supplement_support; ?>
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </article><!-- #post-## -->
  </div>
</div>
