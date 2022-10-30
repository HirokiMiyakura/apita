<h3 id="service" class="komidashi">サービス</h3>
<div class="shop">
  <?php
    $information= new WP_Query( array(
      'post_type' => 'shop',
      'posts_per_page' => 50,
    ));
  if ( $information ->have_posts() ) : ?>
  <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
  <?php
    $image = get_field('image');
    $shop_name = get_field('shop_name');
    $tel = get_field('tel');
    $floor = get_field('floor');
    $category = get_field('category');
    $description = get_field('description');
    $url = get_field('url');
    $radio = get_field('radio');
  ?>
  <?php if ($radio == 'サービス') : ?>
    <div class="shop__item">
      <?php if ($image) : ?>
        <img src="<?php the_field('image'); ?>" />
      <?php endif; ?>
    </div>
    <div class="shop__item">
      <?php if ($shop_name) : ?>
        <h4><?php echo $shop_name; ?></h4> 
      <?php endif; ?>
      <hr>
      <?php if ($tel) : ?>
        <p class="bold">電話番号：<?php echo $tel; ?></p>
      <?php endif; ?>
      <?php if ($floor) : ?>
        <p class="bold">フロア：<?php echo $floor; ?></p>
      <?php endif; ?>
      <?php if ($category) : ?>
        <p class="bold">カテゴリー：<?php echo $category; ?></p>
      <?php endif; ?>
      <?php if ($description) : ?>
        <p class="description"><?php echo $description; ?></p>
      <?php endif; ?>
      <?php if ($url) : ?>
        <p class="link"><a href="<?php echo $url; ?>">ホームページ</a></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</div>