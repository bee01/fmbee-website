<div id="sidebar-iphone">
  <div class="sidebar-iphone-in">
    <div class="sidebar-iphone-bg">
      <div class="sidebar-iphone-clock">
        <div class="sidebar-iphone-display">
          <div class="sidebar-iphone-display-breadcrumbs">
            <p>HOME > News(最新ニュース)</p>
          </div>
          <div class="sidebar-iphone-display-navi">
            <ul class="cf">
              <li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-iphone-back.png" alt></a></li>
              <li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-iphone-home.png" alt></a></li>
              <li><a href="<?php echo home_url(); ?>/abouts"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-iphone-about.png" alt></a></li>
              <li><a href="<?php echo home_url(); ?>/news"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-iphone-news.png" alt></a></li>
              <li><a href="<?php echo home_url(); ?>/products"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-iphone-product.png" alt></a></li>
              <li><a href="<?php echo home_url(); ?>/services"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-iphone-service.png" alt></a></li>
              <li><a href="<?php echo home_url(); ?>/supports"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-iphone-support.png" alt></a></li>
              <li><a href="<?php echo home_url(); ?>/contacts"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-iphone-contact.png" alt></a></li>
            </ul>
          </div>
          <div class="sidebar-iphone-display-menu">
            <ul class="cf">
              <?php global $page_kind;
              get_template_part( 'sidebar-'.$page_kind, get_post_format() ); ?>
            </ul>
          </div>
          <div class="sidebar-iphone-display-backtotop">
          トップページ上部へ
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
