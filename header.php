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
        <!-- <div class="p-loader">Loading...</div> -->
    </div>

<!-- header -->
    <header class="l-header">
        <div class="p-header__layer">

            <h1 class="p-header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </h1>
        </div>
        <img class="p-header__img" src="http://localhost:10028/wp-content/uploads/2023/10/IMG_0932.png" alt="ペンギンの画像">
    </header>


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
                    // 'menu_class' => 'c-appear',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                )
                );
            } 
        ?>

         <!-- 流体シェイプ -->
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="l-shape p-shape__nav">
            <path fill="#064E93" d="M46.3,-61.2C62.2,-52.3,78.6,-41.6,84.9,-26.6C91.2,-11.5,87.4,7.8,80,24.6C72.7,41.5,61.8,55.8,47.9,65.8C33.9,75.8,17,81.5,-0.4,82.1C-17.8,82.7,-35.7,78.2,-47.8,67.6C-59.9,57,-66.3,40.3,-71,23.6C-75.6,7,-78.5,-9.7,-75.4,-26.2C-72.4,-42.7,-63.6,-59,-50,-68.7C-36.4,-78.4,-18.2,-81.5,-1.5,-79.5C15.2,-77.4,30.5,-70.2,46.3,-61.2Z" transform="translate(100 100)">
                <animate attributeType="XML" 
                    attributeName="d" 
                    dur="20s" 
                    repeatCount="indefinite" 
                    values="
                        M46.3,-61.2C62.2,-52.3,78.6,-41.6,84.9,-26.6C91.2,-11.5,87.4,7.8,80,24.6C72.7,41.5,61.8,55.8,47.9,65.8C33.9,75.8,17,81.5,-0.4,82.1C-17.8,82.7,-35.7,78.2,-47.8,67.6C-59.9,57,-66.3,40.3,-71,23.6C-75.6,7,-78.5,-9.7,-75.4,-26.2C-72.4,-42.7,-63.6,-59,-50,-68.7C-36.4,-78.4,-18.2,-81.5,-1.5,-79.5C15.2,-77.4,30.5,-70.2,46.3,-61.2Z;
                        M49.3,-66C64.4,-56.9,77.6,-43.2,83.7,-26.7C89.8,-10.1,88.9,9.2,81.7,25.1C74.5,41,61.1,53.3,46.5,64.9C31.8,76.4,15.9,87.1,-1.8,89.6C-19.5,92.1,-39,86.3,-52.2,74.3C-65.4,62.3,-72.2,44,-76.2,26.1C-80.2,8.2,-81.3,-9.3,-77,-25.8C-72.6,-42.2,-62.9,-57.7,-49.2,-67.3C-35.4,-76.9,-17.7,-80.6,-0.3,-80.1C17.1,-79.7,34.2,-75.2,49.3,-66Z;
                        
                        M48.6,-66.2C63.2,-56.3,75.3,-42.4,79.6,-26.5C83.9,-10.6,80.4,7.2,74.4,23.7C68.3,40.1,59.8,55.3,46.9,64.5C34.1,73.8,17.1,77.1,0.2,76.8C-16.7,76.6,-33.3,72.7,-47.5,63.9C-61.8,55.1,-73.6,41.4,-78.3,25.7C-83,10,-80.5,-7.7,-75.3,-24.7C-70,-41.6,-62,-57.9,-48.9,-68.3C-35.9,-78.8,-18,-83.4,-0.5,-82.8C17,-82.1,34,-76.2,48.6,-66.2Z;

                        M54.3,-72.2C70,-63.3,82.2,-47,88,-28.7C93.8,-10.4,93.2,9.8,87.3,28.4C81.3,47,70,63.9,54.6,74.5C39.1,85.2,19.6,89.6,2.2,86.5C-15.1,83.5,-30.2,72.9,-44.3,61.8C-58.4,50.7,-71.5,39.1,-77.2,24.4C-82.8,9.8,-81,-8,-76.1,-25.3C-71.3,-42.6,-63.4,-59.5,-50.2,-69.3C-37,-79.1,-18.5,-81.8,0.4,-82.3C19.3,-82.9,38.5,-81.2,54.3,-72.2Z;
                        M46.3,-61.2C62.2,-52.3,78.6,-41.6,84.9,-26.6C91.2,-11.5,87.4,7.8,80,24.6C72.7,41.5,61.8,55.8,47.9,65.8C33.9,75.8,17,81.5,-0.4,82.1C-17.8,82.7,-35.7,78.2,-47.8,67.6C-59.9,57,-66.3,40.3,-71,23.6C-75.6,7,-78.5,-9.7,-75.4,-26.2C-72.4,-42.7,-63.6,-59,-50,-68.7C-36.4,-78.4,-18.2,-81.5,-1.5,-79.5C15.2,-77.4,30.5,-70.2,46.3,-61.2Z;
                     " />
            </path>
        </svg>
    </body>
</html>
