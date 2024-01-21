<?php

// テーマの追加
// add_theme_support('menus');

// 以前のコード: add_theme_support("menus");
// 新しいコード:
// register_nav_menus( array(
//     'primary-menu' => esc_html__( 'Primary Menu', 'your-theme-textdomain' ),
//     // 他のメニューを必要に応じて追加できます
// ) );


//テーマサポート
add_theme_support('title-tag');
//サムネイル
add_theme_support('post-thumbnails');
//固定ページの抜粋
add_post_type_support('page', 'excerpt');
//フィードの設定
add_theme_support('automatic-feed-links');

// デフォルトjQueryの削除
// function delete_jquery() {
//     if (!is_admin()) {
//         wp_deregister_script('jquery');
//     }
// }
// add_action('init', 'delete_jquery');

//jsの読み込み
// function custom_print_scripts() {
//     wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js', array(), '1.0.0', true);
//     // wp_enqueue_script('scroll-js', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js', array(), '1.0.0', true);
//     wp_enqueue_script('scroll-js', 'https://unpkg.com/scrollreveal', array(), '1.0.0', true);

//     wp_enqueue_script('js', get_theme_file_uri('/js/main.js'), array('scroll-js'), '1.0.0', true);
// }
// add_action('wp_enqueue_scripts', 'custom_print_scripts');


// function custom_print_scripts() {
//      // scrollreveal-js を読み込む
//      wp_enqueue_script('scrollreveal-js', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js', array(), '4.1.4', true);

//     // gsap-js を読み込む
//     wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js', array(), '3.12.3', true);

   
//     // その他のスクリプトやメインのスクリプトを読み込む
//     wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), array( 'scrollreveal-js','gsap-js'), '1.0.0', true);
// }
// add_action('wp_enqueue_scripts', 'custom_print_scripts');

function custom_print_scripts() {
    // scrollreveal-js を読み込む
    wp_enqueue_script('scrollreveal-js', get_template_directory_uri() . '/js/scroll.js', array(), '4.1.4', true);

    // gsap-js を読み込む
    wp_enqueue_script('gsap-js', get_template_directory_uri() . '/js/gsap.js', array(), '3.12.3', true);

    // その他のスクリプトやメインのスクリプトを読み込む
    wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), array( 'scrollreveal-js','gsap-js'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'custom_print_scripts');



//スタイルシート
function wpbeg_script() {
    wp_enqueue_style('Baloo', 'https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;800&display=swap', array());
    wp_enqueue_style('Rounded+1', 'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;800&display=swap', array());
    wp_enqueue_style('reset', get_theme_file_uri('/css/reset.css'), array(), '1.0.0');
    wp_enqueue_style('app', get_theme_file_uri('/css/app.css'), array(), '1.0.0');
    wp_enqueue_style('style', get_theme_file_uri('/css/style.css'), array(), '1.0.0');
    wp_enqueue_style('wp-style', get_theme_file_uri('/style.css'), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'wpbeg_script');

// ナビゲーション
function theme_setup() {
    register_nav_menus(
        array(
            'hamburger_nav' => esc_html__( 'ハンバーガーナビ', 'origin' ),
            'footer_nav' => esc_html__( 'フッターナビ','origin' ),
        )
    );
}
add_action('after_setup_theme', 'theme_setup');


// 投稿、archiveのヘッダーの非表示
function hide_header_on_single_archive() {
    if (is_single() || is_archive() || is_404() ) {
        echo '<style>.l-header { display: none; }</style>';
    }
}
add_action('wp_head', 'hide_header_on_single_archive');

// archiveの表示
function post_has_archive($args, $post_type) {
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'works';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
