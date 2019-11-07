<?php
/**
 * Template part for displaying WC category content in page.php
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

            <!-- вывод товаров каталога -->
            <div class="row">
                <div class="col-12" style="margin-top:6em;">
                    <nav class="d-none" aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light small">
                            <!--<li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item"><a href="#">Каталог товаров</a></li>
                            <li class="breadcrumb-item"><a href="#">Икра</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Икра черная</li>-->
                            <?= the_breadcrumb() ?>
                            
                        </ol>
                    </nav>
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

                <!-- action banner -->
                <div class="col-12 d-none border my-2 animated fadeIn">
                    <div class="row p-2">
                        
                        <div class="col-8 col-md-11 text-center p-2">
                            <h4 class="mb-3">Подарок при заказе от 5000 руб.</h4>

                            <p class="mb-1">Банка семги в оливковом масле (стекло / 200 гр)</p>
                            <p class="mb-1">Бесплатная доставка</p>
                            <p class="mb-1">Купон на скидку 300 руб.</p>
                        </div>
                        <div class="col-4 col-md-1 p-3 align-middle">
                            <img src="/wp-content/uploads/2019/10/semga-200-shirota-50-1.jpg" alt="Семга в масле в подарок" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center p-3 my-3">
                    <h1><?= the_title() ?></h1>
                    <?php 
                    // вывести блок под заголовком категории по id
                    global $wp_query;
                    // get the query object
                    $cat_obj = $wp_query->get_queried_object();
                    //print_r($cat_obj);
                    if ($cat_obj->term_id == 19) {
                        echo '
                            <div class="d-block text-center mt-5 mb-3 p-0">
                                <div class="d-inline-block border p-3 mx-2 mb-2"><i class="fa fa-check fa-2x text-success mr-3 align-middle"></i>100% натуральное мясо краба</div>
                                <div class="d-inline-block border p-3 mx-2 mb-2"><i class="fa fa-shield-alt fa-2x text-success mr-3 align-middle"></i>Продукция <a href="#" data-toggle="modal" data-target="#sertificates" class="text-dark text-underline">сертифицирована</a></div>
                            </div>
                        ';
                    }
                    ?>
                </div>
                
                <?php
                // вывод дочерних категорий
                // https://stackoverflow.com/questions/47632124/only-display-woocommerce-child-product-categories
                $parentid = get_queried_object_id();
                $args = array(
                    'parent' => $parentid
                );
                $terms = get_terms( 'product_cat', $args );
                if ( $terms ) {
                    $col_width = (12 / count($terms));
                    echo '<div class="col-12 my-3 pb-3"><div class="row">';
                        foreach ( $terms as $term ) {
                            echo '<div class="col-12 col-md-'.$col_width.' text-center p-1 m-0">';
                                echo '<div class="m-2 p-3 border">';
                                    echo '<h3>';
                                        echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
                                            echo $term->name . '<span class="badge badge-warning ml-2">' . $term->count . '</span>';
                                        echo '</a>';
                                    echo '</h3>';
                                    echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="px-5 my-3 d-block">';
                                        woocommerce_subcategory_thumbnail( $term );
                                    echo '</a>';
                                    echo '<p>'.$term->description.'</p>';
                                echo '</div>';
                            echo '</div>';
                    }
                    echo '</div></div>';
                }
                ?>
                
                <?php
                // вывод продукции
                global $post;
                $post_slug = $post->post_name;
                $args = array(
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'posts_per_page' => 30,
                    'orderby' => 'menu_order',
                    /*'sort_column' => 'menu_order',*/
                    /*'orderby'   => 'meta_value_num',
                    'meta_key'  => '_price',*/
                    'order' => 'ASC',
                    'product_cat' => $post->post_name,
                    );
                $loop = new WP_Query( $args );
                
                while( $loop->have_posts()): $loop->the_post();
                ?>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= get_permalink() ?>">
                            <img class="card-img-top" src="<?php
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size',true);
                            echo $thumb_url[0];
                            ?>" alt="<?= the_title() ?>">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="<?= get_permalink() ?>"><?= the_title() ?></a>
                            </h4>
                            <h5>
                                <b class="text-default">
                                <?php 
                                    $product_id = get_the_ID();
                                    $product = wc_get_product( $product_id );
                                    echo $product->get_price(); ?>
                                </b>
                                <i class="fa fa-ruble-sign small text-secondary"></i>
                            </h5>
                            <?php
                                if (get_post_meta(get_the_ID(), '_stock_status', true) == 'outofstock') {
                                    echo '<p class="text-danger m-0 p-0 small"><i class="fa fa-check mr-2"></i> нет в наличии</p>';
                                } else {
                                  echo '<p class="text-success m-0 p-0 small"><i class="fa fa-check mr-2"></i> в наличии</p>';
                                }
                            ?>
                        </div>
                        <div class="card-footer clearfix">
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
                            <a href="#" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#oneClickOrder">Купить в 1 клик</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <!-- /.row -->
            <!-- /.вывод товаров каталога -->
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
