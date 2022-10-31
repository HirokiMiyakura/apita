<div class="news">
<?php
  $paged = get_query_var('paged')? get_query_var('paged') : 1;
  $information= new WP_Query( array(
    'post_type' => 'post',
    'paged' => $paged,
    'post_status' => 'publish',
    'posts_per_page' => 8,
));
if ( $information ->have_posts() ) : ?>
  <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
    <div class="news__item bg_white">
      <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium'); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/news-image.png" alt="" />
        <?php endif ; ?>
        <h3><?php the_title(); ?></h3>
      </a>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</div>
<?php if (!is_home()) : ?>
  <?php
    if (function_exists('wp_pagenavi')) {
      wp_pagenavi(array('query' => $information));
    }
    if(function_exists('wp_pagenavi')) { 
      wp_pagenavi(); 
    } 
  ?>
<?php endif; ?>
<!-- </div> -->