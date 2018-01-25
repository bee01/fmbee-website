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
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-company.png" alt />
          </a>
        </div>
        <div class="header-image-right">
          <a href="<?php echo home_url("/"); ?>">Home</a>
          <a href="<?php echo home_url("/"); ?>news">News</a>
          <a href="<?php echo home_url("/"); ?>services">Service</a>
          <a href="<?php echo home_url("/"); ?>abouts">About</a>
          <a href="<?php echo home_url("/"); ?>products">Products</a>
          <a href="<?php echo home_url("/"); ?>supports">Support</a>
          <a href="<?php echo home_url("/"); ?>contacts">Contact</a>
          <a href="javascript:void(0);"></a>
        </div>
      </div>
    </div>
  </div>
  <div id="contents">
