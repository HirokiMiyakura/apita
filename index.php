<?php get_header(); ?>
<section id="SLIDER">
  <div class="main-slider">
    <?php
      $information= new WP_Query( array(
        'post_type' => 'slider',
        'post_status' => 'publish',
      ));
    if ( $information ->have_posts() ) : ?>
    <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
    <div>
      <?php 
        $url = get_field('slider_url');
        $slider_image = get_field('slider_image');
        $check = get_field('check');
      ?>
      <?php if ($url && $check) {
          echo '<a href="' . $url . '" target="_blank"><img src="' . $slider_image . '" alt=""></a>';
        }
        elseif ($url) {
          echo '<a href="' . $url . '"><img src="' . $slider_image . '" alt=""></a>';
        }
        else {
          echo '<img src="' . $slider_image . '" alt="">';
        }
      ?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</section>
<section id="INFO">
  <div class="inner">
    <div class="openhour">
      <div class="openhour__left"><p>営業時間</p></div>
      <div class="openhour__right"><p>9:00~22:00<br class="sp"><span>(※専門店により営業時間が異なります)</span></p></div>
    </div>
    <div class="categories">
      <div class="categories__item">
        <a href="<?php echo home_url(); ?>/floorguide/">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/floorguide_icon_pc.svg" alt="フロアガイド" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/floorguide_icon_sp.svg" alt="フロアガイド" />
        </a>
      </div>
      <div class="categories__item">
        <a href="<?php echo home_url(); ?>/access/">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/access_icon_pc.svg" alt="アクセス" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/access_icon_sp.svg" alt="アクセス" />
        </a>
      </div>
      <div class="categories__item">
        <a href="<?php echo home_url(); ?>/shopguide#fashion">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/fashion_icon_pc.svg" alt="ファッション" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/fashion_icon_sp.svg" alt="ファッション" />
        </a>
      </div>
      <div class="categories__item">
        <a href="<?php echo home_url(); ?>/shopguide#kurashi">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/kurashi_icon_pc.svg" alt="暮らし" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/kurashi_icon_sp.svg" alt="暮らし" />
        </a>
      </div>
      <div class="categories__item">
        <a href="<?php echo home_url(); ?>/shopguide#foods">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/food_icon_pc.svg" alt="飲食" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/food_icon_sp.svg" alt="飲食" />
        </a>
      </div>
      <div class="categories__item">
        <a href="<?php echo home_url(); ?>/shopguide#service">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/service_icon_pc.svg" alt="サービス" />
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/service_icon_sp.svg" alt="サービス" />
        </a>
      </div>
    </div>
  </div>
</section>
<section id="OTOKU">
  <div class="inner">
    <?php
      $paged = get_query_var('paged')? get_query_var('paged') : 1;
      $information= new WP_Query( array(
        'post_type' => 'information',
        'paged' => $paged,
        'post_status' => 'publish',
      ));
    if ( $information ->have_posts() ) : ?>
    <h2 class="midashi">おトクな情報<span>Information</span></h2>
    <div class="news">
      <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
      <div class="news__item">
        <?php
          $pdf = get_field('pdf');
        ?>
        <?php if( get_field('image') ): ?>
          <a rel="gallery" href="<?php echo the_field('image'); ?>">
            <div class="news__item__photo">
              <img src="<?php the_field('image'); ?>" />
            </div>
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
