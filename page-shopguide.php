<?php get_header(); ?>
<div class="page-outer">
  <h2 class="page-title">ショップガイド<span>Shop Guide</span></h2>
</div>
<section class="page">
  <div class="inner">
  <div class="shoplink">
      <div class="shoplink__item">
        <a href="#fashion">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/fashion_icon_pc.svg" alt="ファッション" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/fashion_icon_sp.svg" alt="ファッション" />
        </a>
      </div>
      <div class="shoplink__item">
        <a href="#kurashi">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/kurashi_icon_pc.svg" alt="暮らし" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/kurashi_icon_sp.svg" alt="暮らし" />
        </a>
      </div>
      <div class="shoplink__item">
        <a href="#foods">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/food_icon_pc.svg" alt="飲食" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/food_icon_sp.svg" alt="飲食" />
        </a>
      </div>
      <div class="shoplink__item">
        <a href="#service">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/service_icon_pc.svg" alt="サービス" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/service_icon_sp.svg" alt="サービス" />
        </a>
      </div>
    </div>
    <?php get_template_part('template/fashion-template'); ?>
    <?php get_template_part('template/kurashi-template'); ?>
    <?php get_template_part('template/foods-template'); ?>
    <?php get_template_part('template/service-template'); ?>
  </div>
</section>
<?php get_footer(); ?>
