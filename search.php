<?php get_header(); ?>
<div class="page-outer">
  <h2 class="page-title">検索結果<span>Search Result</span></h2>
</div>
<section class="page">
  <div class="inner">
    <?php if (have_posts()): ?>
    <?php
      if (isset($_GET['s']) && empty($_GET['s'])) {
        echo '<h3 class="komidashi">検索キーワード未入力</h3>'; // 検索キーワードが未入力の場合のテキストを指定
      } else {
        echo '<h3 class="komidashi">“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件</h3>'; // 検索キーワードと該当件数を表示
      }
    ?>
    <div class="search">
      <?php while(have_posts()): the_post(); ?>
      <div class="search__item">
        <a href="<?php the_permalink(); ?>">
          <h4>> <?php echo get_the_title(); ?></h4>
          <p class="url"><?php the_permalink(); ?></p>
          <p><?php the_excerpt(); ?></p>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
    <?php else: ?>
      <p>検索されたキーワードにマッチする記事はありませんでした。</p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
