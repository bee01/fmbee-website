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


$summary = get_field('summary');
$more_detail = get_field('more_detail');
$publisher_name = get_field('publisher_name');
$download_link = get_field('download_link');

// has_post_thumbnail() がうまく動かなかったので力押しで実装(サムネイルのsourceを取得)
$thumbnail_id = get_post_thumbnail_id ();
$thumbnail_url = wp_get_attachment_image_src ($thumbnail_id);
?>

<li>
  <dl class="column_list product_summary cf">
    <dt>
      <?php
        // サムネイルのsourceがあるか
        if($thumbnail_url[0]){
          // twentyfifteen_post_thumbnail();
          echo '<img src="'.$thumbnail_url[0].'" alt />';
        }else{
          echo '<img src="'.get_template_directory_uri().'/images/logos/logo_noimage2.png" alt />';
        }
      ?>
    </dt>
    <dd class="column_list_in app_summary">
      <?php
        echo '<h4>'.get_the_title().'</h4>';
        echo '<div><p class="app_summary_in">'.$summary.'</p>';
        echo '<p class="app_summary_link">';
        echo '[公開日] '.get_the_date();
        if($more_detail || $publisher_name){
          if($publisher_name) echo "　".$publisher_name;
          if($more_detail) echo "<br /><a href='".get_permalink()."'>製品詳細ページはこちら</a>";
        }
        echo '</p></div>';
      ?>
    </dd>
    <dd class="app_badge">
      <?php if($download_link != ""){ ?>
        <?php if(preg_match('/vector.co.jp/', $download_link)){ ?>
          <a href="<?php echo $download_link; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-apple.png" alt />
          </a>

        <?php }else if(preg_match('/apple.com/', $download_link)){ ?>
          <a href="<?php echo $download_link; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-apple.png" alt />
          </a>

        <?php }else if(preg_match('/google.com/', $download_link)){ ?>
          <a href="<?php echo $download_link; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-android.png" alt />
          </a>

        <?php }else if(preg_match('/.pdf/', $download_link)){ ?>
          <a href="<?php echo $download_link; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-pdf.png" alt />
          </a>

        <?php }else{ ?>
          <p>現在準備中です。</p>

        <?php } ?>
      <?php } ?>
    </dd>
  </dl>
</li>
