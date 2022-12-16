<?php
// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

// function search_exclude_custom_post_type( $query ) {
//   if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
//       $query->set( 'post_type', array( 'post', 'page' ) );
//   }
// }
// add_filter( 'pre_get_posts', 'search_exclude_custom_post_type' );

?>