
<?php
/*
 * Template Name: 404.php
 */
?>

<?php get_header(); ?>
    <main class="l-main">
        <div class="p-404__content">
            <p class="c-text--h3">アクセスしたページは見つかりませんでした。</p><br>
            <p class="c-text--p c-button--archive c-button--form c-fw-700">
                <a href="<?php echo esc_url( home_url( '/' ) ) ; ?>">トップページへ</a>
            </p>
        </div>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>