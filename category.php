<?php get_header(); ?>
<div class="page-outer">
  <h2 class="page-title">
    <?php $cat_info = get_category($cat);?>
    <?php echo ($cat_info->name); ?>
  </h2>
</div>
<section class="page">
  <div class="lime-bg">
    <div class="inner">
      <?php get_template_part('template/category-template'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>