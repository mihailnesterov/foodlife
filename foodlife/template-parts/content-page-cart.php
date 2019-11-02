<?php
/**
 * Template part for displaying WC cart in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foodlife.shop
 */

?>


<!-- Page Content -->
<div class="container animated fadeIn">

    <div class="row">
        <div class="col-12">

            <!-- вывод корзины-->
            <div class="row">
                <div class="col-12" style="margin-top:6em;">
                    <?php  
                    $args = array(
                        'delimiter'  => null,
                        'wrap_before'  => '<ol class="breadcrumb bg-light small">',
                        'wrap_after' => '</ol>',
                        'before'   => '<li class="breadcrumb-item">',
                        'after'   => '</li>',
                        //'home'    => null
                    );
                    ?>
                    <?php woocommerce_breadcrumb( $args ); ?>
                </div>
                
                <div class="col-12 mb-5">
                    <?= the_content() ?>
                </div>
                <!-- /.col-12 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
