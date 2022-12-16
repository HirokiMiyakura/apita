<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<?php if(is_home()) : ?><title>横浜市戸塚区にあるアピタ戸塚店 専門店街</title>
<?php else : ?><title><?php echo trim(wp_title('', false)); ?><?php if(wp_title('', false)) { echo ' | '; } ?>アピタ戸塚店 専門店街</title>
<?php endif; ?>
</title>
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;400;900&family=Noto+Serif+JP:wght@200;400;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/ress.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/common.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/hamburger.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/plugin.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/main.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/colorbox.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" type="text/css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="横浜市戸塚区にあるアピタ戸塚店 専門店街">
<meta property="og:url" content="https://www.apita-totsuka.com/">
<meta property="og:image" content="https://www.apita-totsuka.com/wp-content/themes/APITA_THEME/img/ogImg.jpg">
<meta property="og:title" content="横浜市戸塚区にあるアピタ戸塚店 専門店街">
<meta property="og:description" content="横浜市戸塚区にある大型総合スーパーと30の専門店を備えたアピタ戸塚店です。ショップやイベント、最新情報や新商品、お得なセールなど楽しい情報が満載です。" />
<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5X49QT8');</script>
<!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5X49QT8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
  <div class="header">
    <h1>
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/logo.svg" alt="APITA戸塚店専門店街ロゴ" />
      </a>
    </h1>
    <nav class="main_nav pc">
      <ul class="main_menu">
        <li><a href="<?php echo home_url(); ?>/shopguide/">ショップガイド<span>Shop Guide</span></a></li>
        <li><a href="<?php echo home_url(); ?>/floorguide/">フロアガイド<span>Floor Guide</span></a></li>
        <li><a href="<?php echo home_url(); ?>/access/">アクセス<span>Access</span></a></li>
        <li><a href="<?php echo home_url(); ?>/eventnews/">イベント&ニュース<span>Event & News</span></a></li>
      </ul>
    </nav>
    <div class="search">
      <?php get_search_form(); ?>
    </div>
    <?php get_template_part('template/hamburger-template'); ?>
    <nav class="sub_nav pc">
      <ul>
        <li><a target="_blank" href="https://mydomo.domonet.jp/apita.walk-senmontengai/">求人</a></li>
        <li><a href="<?php echo home_url(); ?>/facility/">施設案内</a></li>
      </ul>
    </nav>
  </div>
  <nav class="main_nav_sp sp">
    <ul class="main_menu_sp">
      <li><a href="<?php echo home_url(); ?>/shopguide/">ショップガイド<span>Shop Guide</span></a></li>
      <li><a href="<?php echo home_url(); ?>/floorguide/">フロアガイド<span>Floor Guide</span></a></li>
      <li><a href="<?php echo home_url(); ?>/access/">アクセス<span>Access</span></a></li>
      <li><a href="<?php echo home_url(); ?>/eventnews/">イベント&ニュース<span>Event & News</span></a></li>
    </ul>
  </nav>
</header>
<?php // if (!(is_home() ||  is_single())) : ?>
<?php if (!(is_home())) : ?>
<div class="inner">
  <div class="breadcrumb">
    <?php if(function_exists('bcn_display')) {
      bcn_display();
      }
    ?>
  </div>
</div>  
<?php endif; ?>