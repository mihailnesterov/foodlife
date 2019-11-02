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

            <!-- вывод корзины-->
            <div class="row">
                <div class="col-12" style="margin-top:6em;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light small">
                            <?= the_breadcrumb() ?>
                        </ol>
                    </nav>
                </div>
                
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <h1 class="float-left">Оформление заказа</h1>
                            <a href="/cart" class="float-right"><i class="fa fa-shopping-cart text-danger mr-2"></i>Вернуться в корзину</a>
                        </div>
    
                        <div class="col-12 p-3">
                            <!-- форма заказа -->
                            <?php
                            the_content();
                            
                            //echo do_shortcode('[woocommerce_checkout]');
                            /* как получить детали заказа WC
                            get_order_details($order_num);
                            или:
                            http://qaru.site/questions/279620/how-to-get-woocommerce-order-details
                            https://wp-kama.ru/function/wc_get_order
                            */
                            
                                // получаем объект WC_Order
                                //echo '123';
                                //echo $order_num;
                                
                               // $order = new WC_Order($order_num);
                                //echo $order->get_id();
                                //echo $order->get_order_number();
                                //$order = wc_get_order( $_order->get_order_number() );
                                
                               // $data = $order->get_data(); // данные заказа
                                //echo $data['id'];
                                /*echo $data['parent_id'];
                                echo $data['status'];
                                echo $data['currency'];
                                echo $data['version'];
                                echo $data['payment_method'];
                                echo $data['payment_method_title'];
                                echo $data['payment_method'];
                                echo $data['payment_method'];*/
                                
                                // получаем отформатированную дату через метод date()
                                /*echo $data['date_created']->date('Y-m-d H:i:s');
                                echo $data['date_modified']->date('Y-m-d H:i:s');*/
                                
                                // получаем метку времени через метод getTimestamp()
                                /*echo $data['date_created']->getTimestamp();
                                echo $data['date_modified']->getTimestamp();*/
                                
                                // еще данные
                                
                                /*echo $data['discount_total'];
                                echo $data['discount_tax'];
                                echo $data['shipping_total'];
                                echo $data['shipping_tax'];
                                echo $data['cart_tax'];
                                echo $data['total_tax'];
                                echo $data['customer_id'];*/ // ... and so on
                                
                                // billing - выписка счета
                                
                                /*echo $data['billing']['first_name'];
                                echo $data['billing']['last_name'];
                                echo $data['billing']['company'];
                                echo $data['billing']['address_1'];
                                echo $data['billing']['address_2'];
                                echo $data['billing']['city'];
                                echo $data['billing']['state'];
                                echo $data['billing']['postcode'];
                                echo $data['billing']['country'];
                                echo $data['billing']['email'];
                                echo $data['billing']['phone'];*/
                                
                                // shipping - доставка
                                
                                /*echo $data['shipping']['first_name'];
                                echo $data['shipping']['last_name'];
                                echo $data['shipping']['company'];
                                echo $data['shipping']['address_1'];
                                echo $data['shipping']['address_2'];
                                echo $data['shipping']['city'];
                                echo $data['shipping']['state'];
                                echo $data['shipping']['postcode'];
                                echo $data['shipping']['country'];*/
                                
                                // выводим детали заказа
                                foreach ($order->get_items() as $item_key => $item ):

                                    ## Using WC_Order_Item methods ##
                                
                                    // Item ID is directly accessible from the $item_key in the foreach loop or
                                    $item_id = $item->get_id();
                                //echo $item_id.'<br>';
                                    ## Using WC_Order_Item_Product methods ##
                                
                                    $product      = $item->get_product(); // Get the WC_Product object
                                
                                    $product_id   = $item->get_product_id(); // the Product id
                                    $variation_id = $item->get_variation_id(); // the Variation id
                                //echo $product_id.'<br>';
                                    $item_type    = $item->get_type(); // Type of the order item ("line_item")
                                
                                    $item_name    = $item->get_name(); // Name of the product
                                    $quantity     = $item->get_quantity();
                                //echo $quantity.'<br>';
                                    $tax_class    = $item->get_tax_class();
                                    $line_subtotal     = $item->get_subtotal(); // Line subtotal (non discounted)
                                    $line_subtotal_tax = $item->get_subtotal_tax(); // Line subtotal tax (non discounted)
                                    $line_total        = $item->get_total(); // Line total (discounted)
                                    $line_total_tax    = $item->get_total_tax(); // Line total tax (discounted)
                                
                                    ## Access Order Items data properties (in an array of values) ##
                                    $item_data    = $item->get_data();
                                
                                    $product_name = $item_data['name'];
                                    $product_id   = $item_data['product_id'];
                                    $variation_id = $item_data['variation_id'];
                                    $quantity     = $item_data['quantity'];
                                    $tax_class    = $item_data['tax_class'];
                                    $line_subtotal     = $item_data['subtotal'];
                                    $line_subtotal_tax = $item_data['subtotal_tax'];
                                    $line_total        = $item_data['total'];
                                    $line_total_tax    = $item_data['total_tax'];
                                echo $quantity.'<br>';
                                    // Get data from The WC_product object using methods (examples)
                                    $product        = $item->get_product(); // Get the WC_Product object
                                
                                    $product_type   = $product->get_type();
                                    $product_sku    = $product->get_sku();
                                    $product_price  = $product->get_price();
                                    $stock_quantity = $product->get_stock_quantity();
                                
                                endforeach;
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
