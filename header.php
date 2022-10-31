<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/ress.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/common.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/hamburger.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/plugin.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/main.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" type="text/css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="横浜市戸塚区にあるアピタ戸塚店 専門店街">
<meta property="og:url" content="http://www.apita-totsuka.com/">
<meta property="og:image" content="http://www.apita-totsuka.com/img/ogImg.jpg">
<meta property="og:title" content="横浜市戸塚区にあるアピタ戸塚店 専門店街">
<meta property="og:description" content="横浜市戸塚区にある大型総合スーパーと30の専門店を備えたアピタ戸塚店です。ショップやイベント、最新情報や新商品、お得なセールなど楽しい情報が満載です。" />
<?php wp_head(); ?>
</head>
<body>
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
        <li><a href="<?php echo home_url(); ?>/facility/">施設紹介</a></li>
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
<?php if (!(is_home() ||  is_single())) : ?>
<div class="inner">
  <div class="breadcrumb">
    <?php if(function_exists('bcn_display')) {
      bcn_display();
      }
    ?>
  </div>
</div>  
<?php endif; ?>