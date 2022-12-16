
<?php get_header(); ?>
<div class="page-outer">
  <h2 class="page-title">店舗紹介<span>Shop Information</span></h2>
</div>
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
<section class="page">
  <div class="inner">
    <div class="shop">
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
    </div>
  </div>
</section>
<?php get_footer(); ?>
