<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<?php
    /*global $woocommerce;
    $items = $woocommerce->cart->get_cart();
    $total_count = 0;
    $total_summ = 0;*/
?>

<div class="row">

	<!-- action banner -->
	<div class="col-12 d-none shadow-sm mt-2 mb-3">
		<div class="row">
			<div class="col-9 col-md-11 p-2 text-center">
				<h5 class="my-1 text-primary">При заказе от 5000 рублей:</h5>
				
				<div class="mb-1">
					<div class="d-inline-block p-2 mr-2"><i class="fa fa-gift mr-2 text-success"></i>Банка семги в подарок (семга в оливковом масле / стекло / 200 гр)</div>
					<div class="d-inline-block p-2 mr-2"><i class="fa fa-truck mr-2 text-success"></i>Бесплатная доставка</div>
					<div class="d-none p-2"><i class="fa fa-tags mr-2 text-success"></i>Купон на 300 рублей</div>
				</div>
				
			</div>
			<div class="col-3 col-md-1 p-3">
				<img src="/wp-content/uploads/2019/10/semga-200-shirota-50-1.jpg" alt="Семга в масле в подарок" class="img-fluid img-thumbnail">
			</div>
		</div>
	</div>

    <div class="col-12 mb-2">
        <h1 class="text-center"><i class="fa fa-shopping-basket text-danger mr-3 small"></i><?= the_title() ?></h1>
        <!--<a href="#" class="float-right d-none"><i class="fa fa-shopping-cart text-danger mr-2"></i>Вернуться в корзину</a>-->
    </div>
    
    <div class="col-12 my-2">
        <form id="form-cart" class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
        	<?php do_action( 'woocommerce_before_cart_table' ); ?>
        
        	<table class="table border text-center p-0 m-0 shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
        		<thead class="thead-light shadow">
        			<tr class="border-none">
        				<th scope="col" class="product-thumbnail">&nbsp;</th>
        				<th scope="col" class="product-name"><?php esc_html_e( 'Наименование товара', 'woocommerce' ); ?></th>
        				<th scope="col" class="product-remove">&nbsp;</th>
        				<th scope="col" class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
        				<th scope="col" class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
        				<th scope="col"class="product-subtotal"><?php esc_html_e( 'Total', 'woocommerce' ); ?></th>
        			</tr>
        		</thead>
        		<tbody>
        			<?php do_action( 'woocommerce_before_cart_contents' ); ?>
        
        			<?php
        			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
        				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
        
        				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
        					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
        					?>
        					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

        						<td class="product-thumbnail">
        						<?php
        						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
        
        						if ( ! $product_permalink ) {
        							echo $thumbnail; // PHPCS: XSS ok.
        						} else {
        							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
        						}
        						?>
        						</td>
        
        						<td class="product-name text-left p-4" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
        						<?php
        						if ( ! $product_permalink ) {
        							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
        						} else {
        							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
        						}
        
        						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );
        
        						// Meta data.
        						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.
        
        						// Backorder notification.
        						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
        							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
        						}
        						?>
        						</td>
        						
        						<td class="product-remove">
        							<?php
        								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        									'woocommerce_cart_item_remove_link',
        									sprintf(
        										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s" title="Удалить"><i class="fa fa-times text-danger"></i></a>',
        										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
        										esc_html__( 'Remove this item', 'woocommerce' ),
        										esc_attr( $product_id ),
        										esc_attr( $_product->get_sku() )
        									),
        									$cart_item_key
        								);
        							?>
        						</td>
        
        						<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
        							<?php
        								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
        							?>
        						</td>
        
        						<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
        						<?php
        						if ( $_product->is_sold_individually() ) {
        							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
        						} else {
        							$product_quantity = woocommerce_quantity_input(
        								array(
        									'input_name'   => "cart[{$cart_item_key}][qty]",
        									'input_value'  => $cart_item['quantity'],
        									'max_value'    => $_product->get_max_purchase_quantity(),
        									'min_value'    => '1',
        									'product_name' => $_product->get_name(),
        									'classes'      => apply_filters( 'woocommerce_quantity_input_classes', array( 'input-text', 'qty', 'text', 'form-control','text-center','bg-light','font-weight-bold' ), $product ),
        								),
        								$_product,
        								false
        							);
        						}
        
        						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
        						?>
        						</td>
        
        						<td class="product-subtotal font-weight-bold" data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>">
        							<?php
        								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
        							?>
        						</td>
        					</tr>
        					<?php
        				}
        			}
        			?>
        
        			<?php do_action( 'woocommerce_cart_contents' ); ?>
        
        			
        			<tr>
        				<td colspan="2" class="text-right">
                            <h5>Итого</h5>
        				</td>
        				<td colspan="2"></td>
        				<td class="text-center">
                            <h5><?php echo WC()->cart->get_cart_contents_count(); ?></h5>
        				</td>
        				<td class="text-center">
                            <h5><?php wc_cart_totals_subtotal_html(); ?></h5>
                            <h4 class="d-none"><?php wc_cart_totals_order_total_html(); ?></h4>
        				</td>
        			</tr>
        			
        			<tr class="d-none">
        				<td colspan="6" class="actions">
        
        					<?php if ( wc_coupons_enabled() ) { ?>
        						<div class="coupon">
        							<label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
        							<?php do_action( 'woocommerce_cart_coupon' ); ?>
        						</div>
        					<?php } ?>
        
        					<button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>
        
        					<?php do_action( 'woocommerce_cart_actions' ); ?>
        
        					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
        				</td>
        			</tr>
        
        			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
        		</tbody>
        	</table>
        	<?php do_action( 'woocommerce_after_cart_table' ); ?>
        </form>
        
        <?php do_action( 'woocommerce_before_cart_collaterals' ); ?>
        
        <div class="cart-collaterals">
        	<?php
        		/**
        		 * Cart collaterals hook.
        		 *
        		 * @hooked woocommerce_cross_sell_display
        		 * @hooked woocommerce_cart_totals - 10
        		 */
        		do_action( 'woocommerce_cart_collaterals' );
        	?>
        </div>
        
        <?php do_action( 'woocommerce_after_cart' ); ?>
        
    </div> <!-- /.col-12 -->
</div>
<!-- /.row -->


