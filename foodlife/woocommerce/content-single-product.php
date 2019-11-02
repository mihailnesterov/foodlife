<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'col-12 mb-5', $product ); ?> >
    <div class="row">
        <div class="col-12 mb-2">
            <!-- блок под названием товара -->
            <p class="float-left">Артикул: 
            <b>
            	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
            		<?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?>
            	<?php endif; ?>
            </b></p>
            <p class="text-success float-right"><i class="fa fa-check mr-2"></i>в наличии</p>
        </div>
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<!--<div class="summary entry-summary d-none">-->
		<?php
		// все хуки заменены на верстку (см. ниже)
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		//do_action( 'woocommerce_single_product_summary' );
		?>
	<!--</div>-->
	
	<!-- right 2/3 -->
    <div class="col-12 col-md-8 p-2">
        <div class="row mb-2">
            <!-- mobile -->
            <div class="col-12 d-md-none">
                <div class="row">
                    <div class="col-4 border p-2 text-center">
                        <p class="m-0 p-0"><i class="fa fa-truck text-secondary fa-2x"></i></p>
                        <p class="text-uppercase text-success m-0 p-0 mt-1 small">курьерская доставка
                        </p>
                    </div>
                    <div class="col-4 border p-2 text-center">
                        <p class="m-0 p-0"><i class="fa fa-shield-alt text-secondary fa-2x"></i></p>
                        <p class="text-uppercase text-success m-0 p-0 mt-1 small">гарантия качества</p>
                    </div>
                    <div class="col-4 border p-2 text-center">
                        <p class="m-0 p-0"><i class="fa fa-money-check text-secondary fa-2x"></i></p>
                        <p class="text-uppercase text-success m-0 p-0 mt-1 small">удобная оплата</p>
                    </div>
                </div>
            </div>
            <!-- desktop -->
            <div class="col-12 d-none d-md-block">
                <div class="card-group mb-4">
                    <div class="card border text-center mx-2 mb-2">
                        <div class="card-body">
                            <p class="m-0 p-0"><i class="fa fa-truck text-secondary fa-2x"></i></p>
                            <p class="card-title text-uppercase text-success mt-2 mb-1 pb-1 small">
                                курьерская доставка</p>
                            <p class="card-text m-0 p-0 small">
                                Доставка по Москве и МО
                            </p>
                            <p class="card-text m-0 p-0 small">
                                бесплатно от 5000 руб.
                            </p>
                        </div>
                    </div> <!-- ./card -->
                    <div class="card border text-center mx-2 mb-2">
                        <div class="card-body">
                            <p class="m-0 p-0"><i class="fa fa-shield-alt text-secondary fa-2x"></i></p>
                            <p class="card-title text-uppercase text-success mt-2 mb-1 pb-1 small">
                                гарантия качества</p>
                            <p class="card-text m-0 p-0 small">
                                товар от производителя
                            </p>
                            <p class="card-text m-0 p-0 small">
                                <a href="#" data-toggle="modal" data-target="#sertificates" class="text-dark text-underline">сертификаты</a>
                            </p>
                        </div>
                    </div> <!-- ./card -->
                    <div class="card border text-center mx-2 mb-2">
                        <div class="card-body">
                            <p class="m-0 p-0"><i class="fa fa-money-check text-secondary fa-2x"></i>
                            </p>
                            <p class="card-title text-uppercase text-success mt-2 small">удобная оплата
                            </p>
                            <p class="card-text m-0 p-0 small">
                                курьеру наличными при получении заказа
                            </p>
                            <p class="card-text m-0 p-0 small d-none">
                                курьеру на карту
                            </p>
                        </div>
                    </div> <!-- ./card -->
                </div>
            </div>

            <div class="col-12 col-md-4 p-0 mt-2 text-center">
                <!-- цена товара -->
                <h3 class="py-0 pt-4">
                    <b id="item-price" <?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) );?>><?php echo $product->get_price(); ?></b>
                    <i class="fa fa-ruble-sign small text-secondary ml-1"></i>
                </h3>
            </div>
            <div class="col-12 col-md-8 py-0 mt-2 text-center text-md-right">
                <!-- количество товара  (- 1 +) кнопки купить и заказать в 1 клик -->
                <?php
                echo wc_get_stock_html( $product ); // WPCS: XSS ok.
                if ( $product->is_in_stock() ) : ?>
                	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
                	<form id="single-product-add-to-cart" class="cart pt-4" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
                		<?php
                		do_action( 'woocommerce_before_add_to_cart_quantity' );
                		woocommerce_quantity_input( array(
                			'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                			'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                			'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
							'classes'     => apply_filters( 'woocommerce_quantity_input_classes', array( '-input-text', 'qty-single', 'text', 'form-control','text-center','bg-light','font-weight-bold' ), $product ),
                		) );
                		do_action( 'woocommerce_after_add_to_cart_quantity' );
                		?>
                		<a href="?add-to-cart=<?= get_the_ID() ?>" 
                            class="btn btn-danger mr-3 float-left --button product_type_simple add_to_cart_button ajax_add_to_cart"
                            data-quantity="1" 
                            data-product_id="<?= $product->get_id() ?>" 
                            data-product_sku="<?= $product->get_sku() ?>" 
                            aria-label="Добавить <?= $product->get_name() ?> в корзину" 
                            rel="nofollow" 
                            data-toggle="modal" data-target="#added-to-cart" 
                            >
                            <i class="fa fa-cart-plus mr-2"></i>В корзину
                        </a>
                		<!--<button type="submit" id="add-to-cart" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button -button alt btn btn-danger mr-2"><i class="fa fa-cart-plus mr-2"></i><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>-->
                        <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#oneClickOrder">Купить в 1 клик</a>
                        
                		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                	</form>
                
                	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
                <?php endif; ?>
                
            </div>
            <div class="item-text col-12 pl-4 pr-3 pt-4 mb-4 text-left">
                <div class="mb-3 px-1 py-3 -bg-light shadow-sm">
                    <?php // категории товара ?>
                	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in font-weight-bold p-2">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
                	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
                </div>
                <!-- описание товара -->
                <?= the_content() ?>
                <!-- /.описание товара -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-12 -->

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
	</div>
	<!-- /.row -->
</div>
<!-- /.product col -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
