<?php get_header(); ?>
<section id="SLIDER">
  <div class="main-slider">
    <div><img src="<?php echo get_template_directory_uri(); ?>/img/slick/banner1.jpg" alt="" /></div>
    <div><img src="<?php echo get_template_directory_uri(); ?>/img/slick/banner2.jpg" alt="" /></div>
    <div><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/slick/banner3.jpg" alt="" /></a></div>
  </div>
</section>
<section id="INFO">
  <div class="inner">
    <div class="openhour">
      <div class="openhour__left"><p>営業時間</p></div>
      <div class="openhour__right"><p>9:00~22:00　<br class="sp"><span>(※専門店により営業時間は異なります)</span></p></div>
    </div>
    <div class="category">
      <div class="category__item">
        <a href="<?php echo home_url(); ?>/floorguide/">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/floorguide_icon_pc.svg" alt="" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/floorguide_icon_sp.svg" alt="" />
        </a>
      </div>
      <div class="category__item">
        <a href="<?php echo home_url(); ?>/access/">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/access_icon_pc.svg" alt="" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/access_icon_sp.svg" alt="" />
        </a>
      </div>
      <div class="category__item">
        <a href="<?php echo home_url(); ?>/shopguide#fashion">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/fashion_icon_pc.svg" alt="" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/fashion_icon_sp.svg" alt="" />
        </a>
      </div>
      <div class="category__item">
        <a href="<?php echo home_url(); ?>/shopguide#kurashi">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/kurashi_icon_pc.svg" alt="" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/kurashi_icon_sp.svg" alt="" />
        </a>
      </div>
      <div class="category__item">
        <a href="<?php echo home_url(); ?>/shopguide#foods">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/food_icon_pc.svg" alt="" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/food_icon_sp.svg" alt="" />
        </a>
      </div>
      <div class="category__item">
        <a href="<?php echo home_url(); ?>/shopguide#service">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/service_icon_pc.svg" alt="" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/service_icon_sp.svg" alt="" />
        </a>
      </div>
    </div>
  </div>
</section>
<section id="OTOKU">
  <div class="inner">
    <h2 class="midashi">おトクな情報<span>Information</span></h2>
    <div class="news">
      <?php
        $paged = get_query_var('paged')? get_query_var('paged') : 1;
        $information= new WP_Query( array(
          'post_type' => 'information',
          'paged' => $paged,
          'post_status' => 'publish',
        ));
      if ( $information ->have_posts() ) : ?>
      <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
      
      <div class="news__item">
        <?php
          $pdf = get_field('pdf');
        ?>
	      <a href="<?php if($pdf) { echo $pdf['url'] . '" target="_blank"'; } else { echo the_permalink(); } ?>">
          <?php if( get_field('image') ): ?>
            <img src="<?php the_field('image'); ?>" />
          <?php endif; ?>
          <h3><?php the_title(); ?></h3>
        </a>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<section id="EVENT" class="bg">
  <div class="inner">
    <h2 class="midashi mt">イベント & ニュース<span>Event & News</span></h2>
    <?php get_template_part('template/news-template'); ?>
  </div>
</section>
<?php get_footer(); ?>
