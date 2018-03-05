<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flickity.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-sp.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-humberger.css" type="text/css" />
<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="container">
  <div id="header" class="underindex">
    <div class="header-image">
      <div class="header-image-in cf">
        <div class="header-image-left">
          <a href="<?php echo home_url("/"); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo_green.png" alt />
          </a>
        </div>
        <div class="header-image-right">
          <a href="<?php echo home_url("/"); ?>"><h2>Home</h2><p>ホームへ戻る</p></a>
          <a href="<?php echo home_url("/"); ?>news"><h2>News</h2><p>ニュース</p></a>
          <a href="<?php echo home_url("/"); ?>services"><h2>Service</h2><p>開発事例</p></a>
          <a href="<?php echo home_url("/"); ?>abouts"><h2>About</h2><p>弊社について</p></a>
          <a href="<?php echo home_url("/"); ?>products"><h2>Products</h2><p>製品情報</p></a>
          <a href="<?php echo home_url("/"); ?>supports"><h2>Support</h2><p>製品サポート</p></a>
          <a href="<?php echo home_url("/"); ?>contacts"><h2>Contact</h2><p>お問い合わせ</p></a>
<!--          <a href="javascript:void(0);"></a>-->
        </div>
        <div class="header-menu-humberger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </div>
  <div id="contents">
