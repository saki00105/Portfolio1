<?php get_header(); ?>

    <div class="p-single">
    <?php
            if (has_nav_menu('archive_nav')) {
                wp_nav_menu(
                array(
                    'theme_location' => 'archive_nav',
                    'container'       => 'nav',
                    'container_class' => 'p-nav',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                )
                );
            } 
        ?>
        <?php
            if( have_posts() ) :
                while( have_posts() ) :
                    the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
                        <?php the_content(); ?>
                        <?php $args = array (
                            'before' => '<div class="page-split">',
                            'after' => '</div>',
                            'link_before' => '<span>',
                            'link_after' => '</span>',
                            );
                            wp_link_pages( $args );
                        ?>
                    </div>
                    
                    <?php if( get_previous_post() || get_next_post() ) : ?>
                        <ul class="p-pagenation">
                            <?php if ( get_previous_post() ) : ?>
                                <li class="prevpostslink"><?php previous_post_link( '%link', '< 前へ' ); ?></li>
                            <?php endif; ?>
                            <?php if( get_next_post() ): ?>
                                <li class="prevpostslink"><?php next_post_link( '%link', '次へ >' ); ?></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                    
                <?php endwhile;
            else :
                ?><p>表示する記事がありません</p><?php
            endif; 
        ?>
        <?php get_sidebar(); ?>
    </div>

        <!-- 流体シェイプ -->
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="l-shape p-shape__left">
            <path fill="#064E93" d="M46.3,-61.2C62.2,-52.3,78.6,-41.6,84.9,-26.6C91.2,-11.5,87.4,7.8,80,24.6C72.7,41.5,61.8,55.8,47.9,65.8C33.9,75.8,17,81.5,-0.4,82.1C-17.8,82.7,-35.7,78.2,-47.8,67.6C-59.9,57,-66.3,40.3,-71,23.6C-75.6,7,-78.5,-9.7,-75.4,-26.2C-72.4,-42.7,-63.6,-59,-50,-68.7C-36.4,-78.4,-18.2,-81.5,-1.5,-79.5C15.2,-77.4,30.5,-70.2,46.3,-61.2Z" transform="translate(100 100)">
                <animate attributeType="XML" 
                    attributeName="d" 
                    dur="15s" 
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

        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="l-shape p-shape__right">
            <path fill="#064E93" d="M50.6,-77.7C65.4,-69.2,77.2,-54.9,80.7,-39.2C84.2,-23.5,79.3,-6.4,76.1,10.4C72.8,27.3,71.3,43.9,63.4,57.5C55.6,71.2,41.4,81.9,25.8,85.4C10.2,88.9,-6.8,85.1,-22.7,79.4C-38.5,73.8,-53.1,66.2,-63.8,54.8C-74.6,43.4,-81.4,28,-85,11.4C-88.7,-5.2,-89.1,-23,-81.9,-36.8C-74.7,-50.6,-59.9,-60.4,-45,-68.9C-30,-77.3,-15,-84.6,1.4,-86.8C17.9,-89,35.7,-86.2,50.6,-77.7Z" transform="translate(100 100)">
                <animate attributeType="XML" 
                    attributeName="d" 
                    dur="20s" 
                    repeatCount="indefinite" 
                    values="
                        M50.6,-77.7C65.4,-69.2,77.2,-54.9,80.7,-39.2C84.2,-23.5,79.3,-6.4,76.1,10.4C72.8,27.3,71.3,43.9,63.4,57.5C55.6,71.2,41.4,81.9,25.8,85.4C10.2,88.9,-6.8,85.1,-22.7,79.4C-38.5,73.8,-53.1,66.2,-63.8,54.8C-74.6,43.4,-81.4,28,-85,11.4C-88.7,-5.2,-89.1,-23,-81.9,-36.8C-74.7,-50.6,-59.9,-60.4,-45,-68.9C-30,-77.3,-15,-84.6,1.4,-86.8C17.9,-89,35.7,-86.2,50.6,-77.7Z;
                        M47.6,-74.1C62.3,-64.7,75,-52.4,79.6,-37.7C84.2,-23,80.7,-6,76.8,10C72.8,26,68.6,40.9,59.5,51.8C50.4,62.7,36.4,69.6,21.8,73.6C7.2,77.6,-8.1,78.6,-22.8,75.3C-37.5,72.1,-51.7,64.6,-61.4,53.3C-71.1,41.9,-76.3,26.8,-78.1,11.5C-79.9,-3.9,-78.4,-19.5,-73.3,-34.7C-68.2,-49.8,-59.6,-64.6,-46.8,-74.8C-34,-85,-17,-90.8,-0.2,-90.4C16.5,-90.1,33,-83.5,47.6,-74.1Z;
                        M48.4,-75.2C61.4,-67,69.5,-51.2,74.9,-35.4C80.3,-19.5,83.1,-3.6,80,10.8C76.9,25.3,68,38.2,58.1,51.4C48.3,64.6,37.6,78,24.1,81.9C10.7,85.7,-5.6,79.9,-22.3,75.3C-39.1,70.7,-56.4,67.3,-66.1,56.9C-75.8,46.4,-77.9,29,-80.6,11.5C-83.2,-6,-86.4,-23.4,-81.3,-38.2C-76.3,-53,-62.9,-65,-48,-72.3C-33,-79.6,-16.5,-82.1,0.6,-83C17.7,-84,35.5,-83.4,48.4,-75.2Z;
                        M49.8,-75.6C63.6,-68.5,73.5,-53.3,80.2,-37.1C86.9,-20.9,90.5,-3.7,88.6,13C86.6,29.7,79.1,45.9,68,59C56.8,72.2,42,82.4,26,85.7C10.1,89,-7,85.5,-23.6,80.5C-40.1,75.5,-56.2,69.1,-65.7,57.4C-75.2,45.6,-78.1,28.6,-77.8,12.8C-77.5,-3,-73.9,-17.6,-68.5,-32C-63,-46.4,-55.6,-60.7,-43.9,-68.8C-32.1,-76.8,-16.1,-78.7,0.9,-80.1C17.9,-81.6,35.9,-82.7,49.8,-75.6Z;
                        M50.6,-77.7C65.4,-69.2,77.2,-54.9,80.7,-39.2C84.2,-23.5,79.3,-6.4,76.1,10.4C72.8,27.3,71.3,43.9,63.4,57.5C55.6,71.2,41.4,81.9,25.8,85.4C10.2,88.9,-6.8,85.1,-22.7,79.4C-38.5,73.8,-53.1,66.2,-63.8,54.8C-74.6,43.4,-81.4,28,-85,11.4C-88.7,-5.2,-89.1,-23,-81.9,-36.8C-74.7,-50.6,-59.9,-60.4,-45,-68.9C-30,-77.3,-15,-84.6,1.4,-86.8C17.9,-89,35.7,-86.2,50.6,-77.7Z;
                    " />
            </path>
        </svg>
<?php get_footer(); ?>
