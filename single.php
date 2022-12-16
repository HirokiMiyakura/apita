
<?php get_header(); ?>
<div class="page-outer">
  <h2 class="page-title">イベント&ニュース<span>Event & News</span></h2>
</div>
<?php 
  $event_name = get_field('event_name');
  $shop_name = get_field('shop_name');
?>
<section class="page">
  <div class="lime-bg">
    <div class="inner">
      <h3 class="komidashi"><?php the_title(); ?></h3>
      <h4 class="shop_name"><?php echo $shop_name; ?></h4>
      <?php if (has_post_thumbnail()) : ?>
        <p class="shop_image">
          <?php the_post_thumbnail(); ?>
        <?php else : ?>
        <?php endif ; ?>
      </p>
      <div class="single_content">
        <?php the_content(); ?>
        <p class="single_date"><?php the_time('Y/m/d'); ?></p>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
