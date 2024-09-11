<?php
// テーマフォルダ内の「style.css」を読み込む場合
function enqueue_custom_styles() {
  wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/styles.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


add_action('init', function() {
  echo '<!-- This is a comment. -->';
});

add_filter('the_title', function($title) {
  return '★' . $title;
});

add_filter('show_admin_bar', '__return_false');

add_action('wp_body_open', function() {
  echo '<!--wp_body_open action hook-->';
});

?>