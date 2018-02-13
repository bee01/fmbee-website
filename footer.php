<div id="footer">
  <div class="footer-in">
    <div class="footer-trademark">
      <p>iPhoneまたはiPadは、Apple Inc.の商標です。</p>
      <p>Androidは、Google Inc.の商標または登録商標です。</p>
    </div>
    <nav>
      <a href="<?php echo home_url("/"); ?>">Home</a>
      <a href="<?php echo home_url("/"); ?>news">News</a>
      <a href="<?php echo home_url("/"); ?>services">Service</a>
      <a href="<?php echo home_url("/"); ?>abouts">About</a>
      <a href="<?php echo home_url("/"); ?>products">Products</a>
      <a href="<?php echo home_url("/"); ?>supports">Support</a>
      <a href="<?php echo home_url("/"); ?>contacts">Contact</a>
      <a href="javascript:void(0);"></a>
    </nav>
    <address>(c)2017 FM.Bee inc.</address>
  </div>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
<?php if(!is_home()){
  echo '<script type="text/javascript" src="'.get_template_directory_uri().'/js/jquery.iPhone.js" type="text/css" ></script>';
  echo '<script type="text/javascript" src="'.get_template_directory_uri().'/js/jquery.panelIcon.js" type="text/css" ></script>';
} ?>
