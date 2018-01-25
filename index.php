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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flickity.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="">
</head>
<body id="index">
<div id="container">
  <div id="header">
    <div class="header-tentai">
      <canvas id="tentai"></canvas>
    </div>
    <div class="header-in">
      <nav>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>news">News</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>services">Service</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>abouts">About</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>products">Products</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>supports">Support</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contacts">Contact</a>
        <a href="javascript:void(0);"></a>
      </nav>
      <div class="cf">
        <div class="header-left">
          <h2><img src="<?php echo get_template_directory_uri(); ?>/images/logo-mes.png" alt></h2>
        </div>
        <div class="header-right js-flickity">
          <p><img src="<?php echo get_template_directory_uri(); ?>/images/bg-tablet-space1.jpg" alt></p>
          <p><img src="<?php echo get_template_directory_uri(); ?>/images/bg-tablet-space2.jpg" alt></p>
          <p><img src="<?php echo get_template_directory_uri(); ?>/images/bg-tablet-space3.jpg" alt></p>
          <p><img src="<?php echo get_template_directory_uri(); ?>/images/bg-tablet-desk.jpg" alt></p>
          <p><img src="<?php echo get_template_directory_uri(); ?>/images/bg-tablet-robot.jpg" alt></p>
          <p><img src="<?php echo get_template_directory_uri(); ?>/images/bg-tablet-data.jpg" alt></p>
        </div>
      </div>
    </div>
  </div>
  <div id="products">
    <div class="products-in">
      <ul class="products-menu-list cf">
        <li><a href="<?php echo home_url("/"); ?>products" class="products-menu-p"><span class="index-menu-animate"><img src="<?php echo get_template_directory_uri(); ?>/images/ani_menu_p_2.gif" alt></span><span class="index-menu-name">弊社製品一覧</span></a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services" class="products-menu-o"><span class="index-menu-animate"><img src="<?php echo get_template_directory_uri(); ?>/images/ani_menu_o_3.gif" alt></span><span class="index-menu-name">受託開発事例</span></a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>supports" class="products-menu-s"><span class="index-menu-name">製品サポート</span></a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contacts" class="products-menu-c"><span class="index-menu-animate"><img src="<?php echo get_template_directory_uri(); ?>/images/ani_menu_c_2.gif" alt></span><span class="index-menu-name">お問い合わせ</span></a></li>
      </ul>
    </div>
  </div>
  <div id="new">
    <div class="new-title-area">
      <h3><img src="<?php echo get_template_directory_uri(); ?>/images/title-new.png"></h3>
    </div>
    <div class="new-in">
      <ul>
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
  			<?php while ( $query->have_posts() ) : $query->the_post();

          // has_post_thumbnail() がうまく動かなかったので力押しで実装(サムネイルのsourceを取得)
          $thumbnail_id = get_post_thumbnail_id ();
          $thumbnail_url = wp_get_attachment_image_src ($thumbnail_id);

          echo '<li>';
        // サムネイルのsourceがあるか
        if($thumbnail_url[0]){
          echo '<dl class="cf"><dt><img src="'.get_template_directory_uri().'/images/logos/logo_werewolf.png"></dt><dd><h4><span>'. get_the_date() .'</span><br />'. get_the_title() .'</h4><p>'. get_the_content() .'</p><p><a href="'.get_permalink().'">詳しく見る ></a></p></dd></dl>';
        }else{
          echo '<dl class="cf"><dt><img src="'.get_template_directory_uri().'/images/logos/logo_noimage.png"></dt><dd><h4><span>'. get_the_date() .'</span><br />'. get_the_title() .'</h4><p>'. get_the_content() .'</p><p><a href="'.get_permalink().'">詳しく見る ></a></p></dd></dl>';
        }
  			endwhile;
          wp_reset_postdata();
        else : get_template_part( 'content', 'none' ); endif; ?>

      </ul>
    </div>
    <div class="index-button-area">
      <a href="<?php echo home_url("/"); ?>news">最新ニュースをもっと見る</a>
    </div>
  </div>
  <div id="about">
    <div class="about-in">
      <h3 class="sp-only"><img src="<?php echo get_template_directory_uri(); ?>/images/title-about.png" alt></h3>
      <ul class="about-us-list">
        <li class="about-us-1">
          <dl class="fade_about_content">
            <dt>OUR STORY<span>(会社概要)</span></dt>
            <dd>
              <h4>～人間性豊かな感動できる技術集団であれ～</h4>
              <p>
                弊社は小さなソフトウェアハウスです。<br />
                "人間性豊かな感動できる技術集団であれ"を目標に、「新しい技術への征服感」「難問を解く達成感」
                「顧客のニーズに応える満足感」「個人（家族）の幸福感」を追求し、お客様と共に未来へと続く「システム開発」を目指しています。<br />
                その為には、自分達に何ができるかを考え、実践し、個々の能力を最大限に活かし社会への貢献と個々の幸せとの一致をはかれる会社へと
                成長できるよう日々努めてまいります。
              </p>
            </dd>
          </dl>
        </li>
        <li class="about-us-2 cf">
          <dl class="fade_about_content">
            <dt>TECHNOLOGY</dt>
            <dd>
              <h4>IoTに必要なアプリケーション開発はもちろん、ネットワーク技術をオファー</h4>
              <p>
                規模や目的に応じたIoTをワンストップでご提供いたします。<br />
                業様の抱える様々な課題に、企画・デザイン・開発ノウハウをフィードバックし、ソリューションをワンストップで提供いたします。<br />
                ICT技術を活用したベストなメディア展開をご提案させていただきます。
              </p>

              <h4 class="mt1rem">新しい取り組み －スマートフォンアプリ開発・ユーティリティ開発－</h4>
              <p>
                設立当初より、業務系システムの開発をメインに取り組んでまいりましたが、現在コンシューマ向けのユーティリティやiPhone/Androidアプリケーション開発にも取り組んでいます。
              </p>
            </dd>
          </dl>
        </li>
      </ul>
    </div>
  </div>

  <!-- FOOTER -->
  <?php get_footer(); ?>

</div>
<div id="loading"><span>0</span>％</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/flickity.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slideCont.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slideImage.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slideScroll.js"></script>
<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.tentai.js"></script>
<!--<script src="js/canvas.js"></script>-->
<script>
$(function(){
  var window_width = $(window).width();
  if(window_width > 500){
    $(".about-us-1").css("backgroundImage","url(<?php echo get_template_directory_uri(); ?>/images/image_policy_1.jpg)");
    $(".about-us-2").css("backgroundImage","url(<?php echo get_template_directory_uri(); ?>/images/image_policy_2.jpg)");
  }else{
    $(".about-us-1").before("<p class='about-us-images'><img src='<?php echo get_template_directory_uri(); ?>/images/image_policy_1sp.jpg' alt></p>");
    $(".about-us-2").before("<p class='about-us-images'><img src='<?php echo get_template_directory_uri(); ?>/images/image_policy_2sp.jpg' alt></p>");
  }
});
</script>
</body>
</html>