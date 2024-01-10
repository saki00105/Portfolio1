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

//jsの読み込み
function custom_print_scripts() {
  wp_enqueue_script( 'gsap-js',"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js", array( ), '1.0.0', true );

  wp_enqueue_script( 'scroll-js',"https://unpkg.com/scrollreveal", array( ), '1.0.0', true );
  
    // カスタムスクリプト
  
    // wp_enqueue_script('js', get_theme_file_uri('/js/main.js'), array( ), '1.0.0', true);
    wp_enqueue_script('js', get_theme_file_uri('/js/main.js'), array('scroll-js'), '1.0.0', true);

    }
  add_action('wp_print_scripts', 'custom_print_scripts');
  

//スタイルシート
function wpbeg_script() {
  // wp_enqueue_style( 'animate-css','https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css' , array() );
  wp_enqueue_style( 'Baloo','https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;800&display=swap' , array() );
  wp_enqueue_style( 'Rounded+1','https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;800&display=swap' , array() );
  wp_enqueue_style( 'reset', get_theme_file_uri( '/css/reset.css' ), array(), '1.0.0');
  wp_enqueue_style( 'app', get_theme_file_uri( '/css/app.css' ) , array(), '1.0.0');
  wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css' ) , array(), '1.0.0');
  wp_enqueue_style( 'wp-style', get_theme_file_uri( '/style.css' ) , array(), '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'wpbeg_script' );


//ナビゲーション
function theme_setup(){
  register_nav_menus( 
    array(
      'hamburger_nav' => 'ハンバーガーナビ',
      'footer_nav' => 'フッターナビ',
    )
  );
}
add_action( 'after_setup_theme', 'theme_setup');


//ヘッダーの非表示
function my_custom_function() {
  if (is_single()) {
      ?>
      <script>
          document.addEventListener('DOMContentLoaded', function () {
              var Header = document.querySelector('.l-header');
              if (Header) {
                  Header.style.display = 'none';
              }
          });
      </script>
      <?php
  }
}

add_action('wp_head', 'my_custom_function');





// function custom_print_scripts() {
//   // カスタムスクリプト
//   wp_enqueue_script('js', get_theme_file_uri('/js/main.js'), array(), filemtime(get_theme_file_path('/js/main.js')), true);
// }
// add_action('wp_enqueue_scripts', 'custom_print_scripts');


