<?php
/**
 * Template part for displaying WC checkout in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foodlife.shop
 */

?>
<?php
    global $woocommerce;
    $WC_Order = new WC_Order();
    $order_num = $WC_Order->get_order_number();
    $order = new WC_Order($order_num);
    $order_id = $order->get_id();
?>
<!-- Page Content -->
<div class="container animated fadeIn">

    <div class="row">
        <div class="col-12">

            <!-- вывод оформления или результата заказа-->
            <div class="row">
                <div class="d-none col-12" style="margin-top:6em;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light small">
                          <li></li>
                        </ol>
                    </nav>
                </div>
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
                    <div class="row">
                        <div class="col-12 mb-2">
                            <h1 class="float-left"><?= the_title() ?></h1>
                            <a href="/shop" class="float-right"><i class="fa fa-bars text-danger mr-2"></i>Каталог товаров</a>
                            <a href="/" class="float-right  mr-3"><i class="fa fa-home text-danger mr-2"></i>Главная страница</a>
                        </div>
    
                        <div class="col-12 p-3">
                            
                            <?php
                            the_content();
                            ?>
                            
                        </div>
                        <!-- /.col-12 -->
                    </div>
                    <!-- /.row -->
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
