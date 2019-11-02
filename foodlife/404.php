<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package foodlife.shop
 */

get_header();
?>

<!-- Page Content -->
<div class="container animated fadeIn" style="margin-top:6em;">

    <div class="row">
        <div class="col-12 text-center p-3 mb-4 border-bottom">
            <h1 class="text-danger">(404) Страница не найдена...</h1>
        </div>
        <div class="col-12 col-md-8 p-4">
            <h4 class="mb-5 text-center">Запрашиваемая страница не найдена или не существует</h4>
            <h5 class="my-4 p-4 border bg-light text-center">Для поиска нужной страницы воспользуйтесь картой сайта или навигацией</h5>
            <div class="my-5 text-center">
                <a href="/" class="btn btn-link px-4">На главную страницу</a>
                <a href="/shop" class="btn btn-link px-4">Перейти в каталог товаров</a>
                <a href="/uslugi" class="btn btn-link px-4">Наши услуги</a>
            </div>
            <div class="my-5 pt-5 border-top text-center">
                <h3 class="mb-5">Популярные товары</h3>
            <?= do_shortcode('[products limit="3" columns="3" best_selling="true" ]') ?>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-12 col-md-4 border p-4">
            <h3><i class="fa fa-sitemap text-danger mr-2"></i>Карта сайта</h3>
            <?= do_shortcode('[wp_sitemap_page]') ?>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php
get_footer();
?>