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
    wp_enqueue_style( 'Roboto','https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap' , array() );
    wp_enqueue_style( 'Mplus1', 'https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap', array() );
    wp_enqueue_style( 'reset', get_theme_file_uri( '/css/reset.css' ), array(), '1.0.0');
    wp_enqueue_style( 'app', get_theme_file_uri( '/css/app.css' ) , array(), '1.0.0');
    wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css' ) , array(), '1.0.0');
    wp_enqueue_style( 'wp-style', get_theme_file_uri( '/style.css' ) , array(), '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'wpbeg_script' );

//jqueryの読み込み
function custom_print_scripts() {
  // テーマ内のjQueryスクリプト
  wp_enqueue_script('jquery-min', get_theme_file_uri('/js/jquery.min.js'), array(), '3.6.4', true);

  // カスタムスクリプト
  wp_enqueue_script('js', get_theme_file_uri('/js/main.js'), array('jquery'), '1.0.0', true);
  }
add_action('wp_print_scripts', 'custom_print_scripts');


//エディタスタイルの追加
function wpbeg_theme_add_editor_styles() {
  wp_enqueue_style( 'editor-style', get_theme_file_uri( '/css/editor-style.css' ) , array(), '1.0.0');
}
add_action( 'admin_init', 'wpbeg_theme_add_editor_styles' );

//カスタムメニュー
function theme_setup(){
  register_nav_menus( 
    array(
      'header-menu' => 'ヘッダーメニュー',
      'footer-menu' => 'フッターメニュー',
    )
  );
}
add_action( 'after_setup_theme', 'theme_setup');



//WordPressの処理で現在のユーザーがセットされたら実行
add_action('set_current_user', function (){

	if(current_user_can('administrator')){ //管理者ユーザーなら
		$_SESSION["_wp_debug"] = 1; //セッション内にデバッグ有効フラグを保存
	}else{
		$_SESSION["_wp_debug"] = 0; //セッション内にデバッグ無効フラグを保存
	}
	date_default_timezone_set( 'Asia/Tokyo' ); //日本時間の設定

});
