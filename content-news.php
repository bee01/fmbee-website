<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$thumbnail_id = get_post_thumbnail_id ();
$thumbnail_url = wp_get_attachment_image_src ($thumbnail_id);

?>
<li>
  <dl class="column_list column_summary cf">
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
    <dd class="column_list_in">
      <?php
        echo '<p class="column_list_date">'.get_the_date().'</p>';
        echo '<h4>'.get_the_title().'</h4>';
    	  echo '<p class="column_list_message">'.get_the_content().'</p>';
      ?>
    </dd>
  <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
</li>
