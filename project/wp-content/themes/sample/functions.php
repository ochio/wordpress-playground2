<?php
// テーマフォルダ内の「style.css」を読み込む場合
function enqueue_custom_styles() {
  wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/styles.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


add_filter('the_title', function($title) {
  return '★' . $title;
});

add_filter('show_admin_bar', '__return_false');

// add_action('init', function() {
//   add_theme_support('post-thumbnails');
// });

add_action('after_setup_theme', function() {
  add_theme_support( 'title-tag' );
});

function getEyecatchUrl() {
  if (has_post_thumbnail()) {
    $id  = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, "large");
  } else {
    $img = array(get_template_directory_uri() . '/assets/img/about-bg.jpg');
  }

  return $img[0];
}


add_action('init', function() {
  register_nav_menus([
    'globalNav' => 'グローバルナビゲーション',
    'footerNav' => 'フッターナビゲーション',
  ]);
});

?>

