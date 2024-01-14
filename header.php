<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="html">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="sakiについてのPortfolioサイトです。未経験からWeb制作業界への転職を目指し日々学習中です。">
        <meta name="keywords" content="WordPress, Theme, development">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

<!-- loading -->
    <div class="l-loader">
        <div class="p-loader">Loading...</div>
    </div>

<!-- header -->
    <header class="l-header">
        <div class="p-header__layer">

            <h1 class="p-header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </h1>
        </div>
        <img class="p-header__img" src="http://localhost:10028/wp-content/uploads/2023/10/IMG_0932.png" alt="ペンギンの画像">
    

        <div class="p-nav__hamburger">
            <button class="c-line__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>


        <?php
            if (has_nav_menu('hamburger_nav')) {
                wp_nav_menu(
                array(
                    'theme_location' => 'hamburger_nav',
                    'container'       => 'nav',
                    'container_class' => 'p-nav',
                    'menu_class' => 'c-appear',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                )
                );
            } 
        ?>

        



    </header>
    </body>
</html>
