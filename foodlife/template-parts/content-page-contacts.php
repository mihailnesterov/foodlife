<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foodlife.shop
 */

?>

<!-- Page Content -->
<div class="container animated fadeIn">

    <div class="row">
        <div class="col-12 mb-5">

            <!-- вывод страницы -->
            <div class="row">
                <div class="col-12" style="margin-top:6em;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light small">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-12 text-center p-3 my-3">
                    <h1><?= the_title() ?></h1>
                </div>
                
                <div class="col-12 p-3 my-3">
                    <?= the_content() ?>
                </div>
                
               
                
            </div>
            <!-- /.row -->
            <!-- /.вывод страницы -->
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->