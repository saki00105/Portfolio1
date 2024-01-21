
<?php
/*
 * Template Name: 404.php
 */
?>

<?php get_header(); ?>
    <main class="l-main">
        <div class="p-404__content">
            <p>アクセスしたページは見つかりませんでした。</p><br>
            <p >
                <a href="<?php echo esc_url( home_url( '/' ) ) ; ?>">トップページへ</a>
            </p>
        </div>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>