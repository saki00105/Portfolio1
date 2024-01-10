
<?php get_header(); ?>
       
        
        <div class="l-inner--archive">
        
            <ul class="p-card__archive">
                <?php 
                    if (have_posts(  )):
                        while(have_posts(  )):
                            the_post(  ); ?> 
                            
                            <li  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <figure class="p-card__archive-wrap c-flex">
                                    <div class="p-card__archive-img c-flex">
                                        <?php the_post_thumbnail(  );?>
                                    </div>
                                    <figcaption class="p-card__archive-content c-color--white">
                                        <h2 class="c-text--h2"><?php the_title();?></h2>
                                        
                                        <?php     
                                            if (has_excerpt()) {
                                                echo '<div class="p-card__archive-text c-text--p">';
                                                the_excerpt();
                                                echo '</div>';
                                            } 
                                            else{
                                                the_content( '',FALSE,'');
                                            }
                                        ?>
                                        <a  class="p-card__archive-button c-button--archive c-fw-700" href="<?php the_permalink( ); ?>">詳しく見る</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <?php wp_link_pages(); ?>
                        <?php endwhile;
                    else:?>
                        <p>記事はありません</p>
                <?php endif; ?>
            </ul>

            <ul class="p-pagination c-flex c-center">
                <li class="c-flex ">
                    <?php wp_pagenavi(); ?>
                </li>    
            </ul>
        </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>