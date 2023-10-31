<?php
//テーマの追加
add_theme_support( 'menus' );

//テーマサポート
add_theme_support( 'title-tag' );
//本体ギャラリーCSS停止
add_filter( 'use_default_gallery_style', '__return_false' );
//サムネイル機能
add_theme_support('post-thumbnails');
//固定ページの抜粋文
add_post_type_support( 'page', 'excerpt' );
//フィードの設定
add_theme_support( 'automatic-feed-links' );

//スタイルシート
function wpbeg_script() {
    wp_enqueue_style( 'Baloo','https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;800&display=swap' , array() );
    wp_enqueue_style( 'Rounded+1','https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;800&display=swap' , array() );
    wp_enqueue_style( 'reset', get_theme_file_uri( '/css/reset.css' ), array(), '1.0.0');
    wp_enqueue_style( 'app', get_theme_file_uri( '/css/app.css' ) , array(), '1.0.0');
    wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css' ) , array(), '1.0.0');
    wp_enqueue_style( 'wp-style', get_theme_file_uri( '/style.css' ) , array(), '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'wpbeg_script' );

//jsの読み込み
// function custom_print_scripts() {
//   // テーマ内のjQueryスクリプト
//   // wp_enqueue_script('jquery-min', get_theme_file_uri('/js/jquery.min.js'), array(), '3.6.4', true);

//   // カスタムスクリプト
//   wp_enqueue_script('js', get_theme_file_uri('/js/main.js'), array( ), '1.0.0', true);
//   }
// add_action('wp_print_scripts', 'custom_print_scripts');


function custom_print_scripts() {
  // カスタムスクリプト
  wp_enqueue_script('js', get_theme_file_uri('/js/main.js'), array(), filemtime(get_theme_file_path('/js/main.js')), true);
}
add_action('wp_enqueue_scripts', 'custom_print_scripts');


