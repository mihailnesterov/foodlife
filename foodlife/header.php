<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foodlife.shop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_deregister_script('jquery'); ?>
	<?php wp_head(); ?>
	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '900838930271864');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=900838930271864&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="<?= get_template_directory_uri() ?>/images/logo1.png" alt="foodlife.shop" class="img-fluid">
            </a>
            <div class="d-none d-md-block p-3 align-middle small">
                <p class="p-0 m-0">
                    <i class="fa fa-truck text-danger mr-2"></i>Бесплатная доставка при заказе от 5000 р.
                    <br>
                    <i class="fa fa-clock text-danger mr-2"></i>Доставка по Москве и МО
                </p>
            </div>
            <div class="d-none d-md-block p-3 align-middle small">
                <p class="p-0 m-0">
                    <a href="#" data-toggle="modal" data-target="#showMap" class="text-dark text-underline"><i class="fa fa-map-marker-alt text-danger mr-2"></i>г. Москва ул. Новодмитровская д. 5А стр. 1</a>
                    <br>
                    <i class="fa fa-clock text-danger mr-2"></i>с 09:00 до 20:00
                </p>
            </div>
            <div class="d-none d-md-block pl-5 mt-2 text-right">
                <h6 class="p-0 m-0 mb-2 mr-1">
                    <a href="tel:+74993944623" onclick="ym(50325610, 'reachGoal', 'Phoneclick'); return true;" class="text-dark"><i class="fa fa-phone text-danger mr-1"></i>8 (499) 394 46 23</a>
                </h6>
                <a href="#" onclick="ym(50325610, 'reachGoal', 'Callback'); return true;" data-toggle="modal" data-target="#feedback" class="text-right small bg-primary rounded text-light py-1 px-3 mr-1">обратный звонок</a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto d-md-none text-center">
                    <li class="nav-item">
                        <a class="nav-link border-top border-bottom" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-bottom" href="/shop">Каталог товаров</a>
                    </li>
                    <?php 
                    // в массиве перечисляем id категорий, которые выводим в меню
                    $categories_mobile = array(19,20,21,22,23);
                    for($i=0;$i<count($categories_mobile);$i++){
                        $category = get_term( $categories_mobile[$i], 'product_cat' ); ?>
                        <li class="nav-item border-bottom">
                            <a class="nav-link" href="<?= get_term_link($category->term_id) ?>">
                               <?= $category->name ?> 
                                <span class="badge badge-pill badge-primary"><?= $category->count ?> </span>
                            </a>
                        </li>
                    <?php } ?>
                    <li class="nav-item border-bottom">
                        <a class="nav-link" href="/contacts">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-primary py-2 fixed-top shadow-lg" style="margin-top:6em;z-index:998;">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 text-white d-none d-md-block">
                            <ul class="nav nav-pills">
                                <?php 
                                // в массиве перечисляем id категорий, которые выводим в меню
                                $categories = array(19,20,21,22,23);
                                for($i=0;$i<count($categories);$i++){
                                    $category = get_term( $categories[$i], 'product_cat' ); ?>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?= get_term_link($category->term_id) ?>">
                                           <?= $category->name ?> 
                                            <span class="badge badge-pill badge-warning"><?= $category->count ?> </span>
                                        </a>
                                    </li>
                                <?php } ?>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="/contacts">Контакты</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-2 text-center">
                            <a id="phone-on-mobile" href="tel:+74993944623" class="text-light d-block d-md-none pt-2"><i class="fa fa-phone text-danger mr-2"></i>8 (499) 394 46 23</a>
                            <!-- WC cart -->
                            <div class="s-header__basket-wr woocommerce">
                                <?php global $woocommerce; ?>
                                <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="basket-btn basket-btn_fixed-xs text-white bg-danger btn btn-danger text-center">
                                    <i class="fa fa-shopping-basket text-white mr-1"></i>
                                    <span class="basket-btn__label">Корзина</span>
                                    <span class="basket-btn__counter badge badge-light p-1"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
                                </a>
                            </div>
                            <!-- /.WC cart -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


	<main id="main">
