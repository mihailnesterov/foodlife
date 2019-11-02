<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<div class="col-112 my-4 d-none">
    <h2 class="text-center"><i class="fa fa-check-circle text-danger mr-3 small"></i>Оформить заказ</h2>
</div>

<div class="col-12 my-4">
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
    <div class="row border">
        <div class="col-12 col-md-5 p-4">
        <?php if ( $checkout->get_checkout_fields() ) : ?>
            <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
            <?php do_action( 'woocommerce_checkout_billing' ); ?>
            <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
    	<?php endif; ?>
    	
    	<?php //do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
    	
    	<!--<h3 id="order_review_heading"><?php //esc_html_e( 'Your order', 'woocommerce' ); ?></h3>-->
    	
    	<?php //do_action( 'woocommerce_checkout_before_order_review' ); ?>
    
    	<!--<div id="order_review" class="woocommerce-checkout-review-order">
    		<?php //do_action( 'woocommerce_checkout_order_review' ); ?>
    	</div>-->
    
    	<?php //do_action( 'woocommerce_checkout_after_order_review' ); ?>
    	</div>
    	<!-- /.col -->
        
        <div class="col-12 col-md-7 p-4">
            
            <!-- способ доставки -->
            <h3 class="mb-4 mt-4"><i class="far fa-check-circle text-success mr-2"></i> Выберите способ доставки</h3>
            <div class="py-2 px-3 mb-4 border">
                <div id="order_review" class="woocommerce-checkout-review-order form-check my-3">
            		    <?php 
            		        /* вывод способов доставки из checkout/review-order */
            		        do_action( 'woocommerce_checkout_order_review' ); 
            		    ?>
            	    </div>
                <!--<div class="form-check my-3">
                    <input class="form-check-input" type="radio" name="shipping" id="shipping1"
                        value="shipping1" checked>
                    <label class="form-check-label" for="shipping1">
                        Доставка курьером в пределах МКАД
                    </label>
                    <span class="badge badge-success text-light px-2 py-1 float-right">300
                        руб.</span>
                </div>
                <div class="form-check my-3">
                    <input class="form-check-input" type="radio" name="shipping" id="shipping2"
                        value="shipping2">
                    <label class="form-check-label" for="shipping2">
                        Доставка курьером за МКАД
                    </label>
                    <span class="badge badge-success text-light px-2 py-1 float-right">500
                        руб.</span>
                </div>
                <div class="form-check my-3">
                    <input class="form-check-input" type="radio" name="shipping" id="shipping3"
                        value="shipping3">
                    <label class="form-check-label" for="shipping3">
                        Доставка курьером по России
                    </label>
                </div>-->
            </div>
            <!-- /.способ доставки -->

            <!-- способ оплаты -->
            <h3 class="mb-4">
                <i class="far fa-check-circle text-success mr-2"></i>
                Способ оплаты
            </h3>
            <div class="py-2 px-3 border">
                <h5 class="m-2"><i class="fa fa-check text-success mr-2"></i> Наличными при получении заказа</h5>
                <!--<div class="form-check my-3">
                    <input class="form-check-input" type="radio" name="payment" id="payment1"
                        value="payment1" checked>
                    <label class="form-check-label" for="payment1">
                        Наличными при получении заказа
                    </label>
                </div>
                <div class="form-check my-3">
                    <input class="form-check-input" type="radio" name="payment" id="payment2"
                        value="payment2">
                    <label class="form-check-label" for="payment2">
                        Картой при получении
                    </label>
                </div>-->
            </div>
            <!-- /.способ оплаты -->

            <!-- подтверждение заказа -->
            <div class="text-center text-md-left my-4">
                <div class="form-group text-left mb-4">
                    <div class="form-check">
                        <input checked class="form-check-input" type="checkbox" id="policy-agree-order" />
                        <label class="form-check-label small" for="policy-agree-order">
                            Согласен с условиями <a href="/privacy-policy" target="_blank" class="text-dark">Политики конфиденциальности</a>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger btn-lg">Подтвердить заказ</button>
            </div>
        </div>
        
    </div>
    <!-- /.row -->

</form>
</div>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
