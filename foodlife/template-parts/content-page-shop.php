<?php
/**
 * Template part for displaying WC shop content in page.php
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
                
                <div class="col-12 text-center p-3 my-3">
                    <h1><?= the_title() ?></h1>
                </div>
                
                <?php
                // вывод всех категорий верхнего уровня
                // https://stackoverflow.com/questions/47632124/only-display-woocommerce-child-product-categories
                //$parentid = get_queried_object_id();
                $args = array(
                    'parent' => 0,
                    'order'  => 'DESC'
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
                
                
                <div class="col-12 text-center p-3 my-3">
                    <h2>Все товары</h2>
                </div>
                <?php
                // вывод продукции
                $args = array(
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'posts_per_page' => 30,
                    'orderby' => 'menu_order',
                    /*'sort_column' => 'menu_order',*/
                    /*'orderby'   => 'meta_value_num',
                    'meta_key'  => '_price',*/
                    'order' => 'ASC',
                    'product_cat' => 'konservatsiya,ikra',
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
                                rel="nofollow">
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
