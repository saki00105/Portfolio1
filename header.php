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

        <header class="l-header">
        <div class="p-header__layer">

            <h1 class="p-header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?>
            </h1>
        </div>
        </header>
    
    </body>
</html>
