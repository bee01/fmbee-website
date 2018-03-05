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
  <dl class="column_list column_summary cf">
    <dt>
      <?php
        // サムネイルのsourceがあるか
        if($thumbnail_url[0]){
          twentyfifteen_post_thumbnail();
        }else{
          echo '<img src="'.get_template_directory_uri().'/images/logos/logo_noimage2.png" alt />';
        }
      ?>
    </dt>
    <dd class="column_list_in">
      <?php
        echo '<h4>'.get_the_title().'</h4>';
        echo '<p class="app_summary_link">';
        echo '[公開日] '.get_the_date();
        echo '</p>';
      ?>
    </dd>
  </dl>
</li>
