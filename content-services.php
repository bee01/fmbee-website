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


$more_detail = get_field('more_detail');
$publisher_name = get_field('publisher_name');

// has_post_thumbnail() がうまく動かなかったので力押しで実装(サムネイルのsourceを取得)
$thumbnail_id = get_post_thumbnail_id ();
$thumbnail_url = wp_get_attachment_image_src ($thumbnail_id);
?>

<li>
  <dl class="product_summary cf">
    <dt>
      <?php
        // サムネイルのsourceがあるか
        if($thumbnail_url[0]){
          twentyfifteen_post_thumbnail();
        }else{
          echo '<img src="'.get_template_directory_uri().'/images/logos/logo_noimage.png" alt />';
        }
      ?>
    </dt>
    <dd class="app_summary">
      <?php
        echo '<h4>'.get_the_title().'</h4>';
        echo '<p class="app_summary_in">'.get_the_content().'</p>';
        echo '<p class="app_summary_link">';
        echo '[公開日] '.get_the_date();
        if($more_detail || $publisher_name){
          if($publisher_name) echo "　".$publisher_name;
          if($more_detail) echo "<br /><a href='".get_permalink()."'>製品詳細ページはこちら</a>";
        }
        echo '</p>';
      ?>
    </dd>
  </dl>
</li>
