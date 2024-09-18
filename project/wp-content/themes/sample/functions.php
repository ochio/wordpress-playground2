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

add_action( 'init', function() {
  register_post_type('music', [
    'label' => '音楽',
    'supports' => ['title', 'editor', 'thumbnail'],
    'public' => true,
    'has_archive' => true,
    'supports' => ['title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'],
  ]);
});

function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'archivepage'; //URLとして使いたい文字列
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


register_taxonomy('genre', 'music', [
  'label' => '音楽ジャンル',
  'hierarchical' => true,
  'show_in_rest' => true,
]);

add_shortcode('date', function($atts) {
  $atts = shortcode_atts([
    'before' => 'Today is ',
    'after' => ' !',
  ], $atts, 'date');

  return $atts['before'] . date('Y年 n月 j日') . $atts['after'];
});

?>

