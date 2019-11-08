<?php
/**
 * Template part for displaying home page content in page.php
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
            <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel"
                style="margin-top:8em;">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="<?= get_template_directory_uri() ?>/images/1.jpg" alt="slide 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Мясо краба с доставкой по Москве</h2>
							<h4 class="d-none">100% настоящего камчатского краба</h4>
                            <a href="<?= get_term_link(19) ?>" class="btn btn-danger btn-2x">Подробнее</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="<?= get_template_directory_uri() ?>/images/2.jpg" alt="slide 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Рыбные деликатесы с доставкой по Москве</h2>
                            <a href="<?= get_term_link(21) ?>" class="btn btn-danger btn-2x">Подробнее</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="<?= get_template_directory_uri() ?>/images/3.jpg" alt="slide 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Красная икра с доставкой по Москве</h2>
                            <a href="<?= get_term_link(22) ?>" class="btn btn-danger btn-2x">Подробнее</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="<?= get_template_directory_uri() ?>/images/4.jpg" alt="slide 4">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Черная икра с доставкой по Москве</h2>
                            <a href="<?= get_term_link(23) ?>" class="btn btn-danger btn-2x">Подробнее</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="<?= get_template_directory_uri() ?>/images/5.jpg" alt="slide 5">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Семга в масле с доставкой по Москве</h2>
                            <a href="<?= get_term_link(20) ?>" class="btn btn-danger btn-2x">Подробнее</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            <div class="col-12 text-center p-2 my-3 text-dark">
                <h1>Мясо краба, красная и черная икра, морские деликатесы с доставкой по Москве</h1>
            </div>


            <div class="card-group mb-4">
                <div class="card border text-center mx-2 mb-2">
                  <div class="card-body">
                    <p class="m-0 p-0"><svg class="svg-inline--fa fa-truck fa-w-20 text-secondary fa-3x" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="truck" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h16c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path></svg><!-- <i class="fa fa-truck text-secondary fa-3x"></i> --></p>
                    <h5 class="card-title text-uppercase text-success mt-3">курьерская доставка</h5>
                    <p class="card-text m-0 p-0 small">
                      Доставка по Москве и Московской области
                    </p>
    				<p class="card-text m-0 p-0 small">
                      бесплатно от 5000 руб.
                    </p>
                  </div>
                </div> <!-- ./card -->
                <div class="card border text-center mx-2 mb-2">
                  <div class="card-body">
                    <p class="m-0 p-0"><svg class="svg-inline--fa fa-shield-alt fa-w-16 text-secondary fa-3x" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="shield-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path></svg><!-- <i class="fa fa-shield-alt text-secondary fa-3x"></i> --></p>
                    <h5 class="card-title text-uppercase text-success mt-3">гарантия качества</h5>
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
                    <p class="m-0 p-0"><svg class="svg-inline--fa fa-money-check fa-w-20 text-secondary fa-3x" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="money-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M0 448c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V128H0v320zm448-208c0-8.84 7.16-16 16-16h96c8.84 0 16 7.16 16 16v32c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-32zm0 120c0-4.42 3.58-8 8-8h112c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H456c-4.42 0-8-3.58-8-8v-16zM64 264c0-4.42 3.58-8 8-8h304c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16zm0 96c0-4.42 3.58-8 8-8h176c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16zM624 32H16C7.16 32 0 39.16 0 48v48h640V48c0-8.84-7.16-16-16-16z"></path></svg><!-- <i class="fa fa-money-check text-secondary fa-3x"></i> --></p>
                    <h5 class="card-title text-uppercase text-success mt-3">удобная оплата</h5>
                    <p class="card-text m-0 p-0 small">
                      наличными при получении заказа
                    </p>
    				<p class="card-text m-0 p-0 small d-none">
                      картой при получении
                    </p>
                  </div>
                </div> <!-- ./card -->
            </div>

            <div class="card-group mb-4">
                <div class="card border mr-3 ">
                  <a href="/product-category/konservatsiya/myaso_kraba/"><img src="<?= get_template_directory_uri() ?>/images/crab.jpg" class="card-img-top" style="object-fit:cover;height:230px" alt="мясо краба"></a>
                  <div class="card-body">
                    <h5 class="card-title">Мясо краба</h5>
                    <p class="card-text">Мясо краба - это ценнейший продукт, который способствует снижению холестерина, улучшает работу сердца и сердечно-сосудистой системы...</p>
    				<a href="/product-category/konservatsiya/myaso_kraba/" class="btn btn-primary">Подробнее</a>
                  </div>
                </div> <!-- ./card -->
                <div class="card mr-3 border">
                  <a href="/product-category/ikra/"><img src="<?= get_template_directory_uri() ?>/images/ikra3.jpg" class="card-img-top" style="object-fit:cover;height:230px" alt="икра красная и черная"></a>
                  <div class="card-body">
                    <h5 class="card-title">Икра</h5>
                    <p class="card-text">Красная и черная икра содержит целый комплекс нужных для организма человека витаминов, минералов, заменимых и незаменимых аминокислот...</p>
    				<a href="/product-category/ikra/" class="btn btn-primary">Подробнее</a>
                  </div>
                </div> <!-- ./card -->
                <div class="card border">
                    <a href="/product-category/konservatsiya/delikatesy/"><img src="<?= get_template_directory_uri() ?>/images/osminog.jpg" class="card-img-top" style="object-fit:cover;height:230px" alt="морские деликатесы"></a>
                    <div class="card-body">
                      <h5 class="card-title">Морские деликатесы</h5>
                      <p class="card-text">Употребление в пищу таких продуктов, как осьминог и морской гребешок способствует укреплению сосудов, мышц сердца, обновлению клеток...</p>
    				<a href="/product-category/konservatsiya/delikatesy/" class="btn btn-primary">Подробнее</a>
                    </div>
                </div> <!-- ./card -->
            </div>


            <!-- вывод товаров каталога -->
            <div class="row">

                <!-- action banner -->
                <div class="col-12 -d-none shadow-sm mt-4 mb-4">
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

                <div class="col-12 text-center p-3 my-3">
                    <h2>Каталог продукции</h2>
                </div>
                
                <?php 
                    //echo do_shortcode('[product_category per_page="4" orderby="date" order="desc" category="myaso_kraba"]');
                ?>
                
                <?php
                // вывод продукции
                $args = array(
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'posts_per_page' => 30,
                    /*'orderby' => 'menu_order',
                    'sort_column' => 'menu_order',*/
                    'orderby'   => 'meta_value_num',
                    'meta_key'  => '_price',
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

            <div class="row my-4">
                <div class="col-12 text-center my-4">
                    <h2>Попробуйте наши деликатесы</h2>
                </div>
                <div class="col-12">
                    <div class="card-group">
                          <div class="card border mr-3 ">
                            <a href="<?= get_permalink(55) ?>"><img src="<?= get_template_directory_uri() ?>/images/morskie-grebeshki.jpg" class="card-img-top" style="object-fit:cover;height:300px" alt="..."></a>
                            <div class="card-body">
                              <h5 class="card-title">Гребешок в солевой заливке</h5>
                              <p class="card-text">Входящие в состав морского гребешка витамины группы В укреляютят стенки сосудов и мышцу сердца, нормализуют артериальное давление...</p>
                              <a href="<?= get_permalink(55) ?>" class="btn btn-primary">Подробнее</a>
                            </div>
                          </div> <!-- ./card -->
                          <div class="card mr-3 border">
                            <a href="<?= get_permalink(57) ?>"><img src="<?= get_template_directory_uri() ?>/images/osminog.jpg" class="card-img-top" style="object-fit:cover;height:300px" alt="..."></a>
                            <div class="card-body">
                              <h5 class="card-title">Осьминог в солевой заливке</h5>
                              <p class="card-text">Употребление в пищу мяса осьминога повышает иммунитет, оптимизируется деятельность поджелудочной железы, способствует обновлению клеток...</p>
                              <a href="<?= get_permalink(57) ?>" class="btn btn-primary">Подробнее</a>
                            </div>
                          </div> <!-- ./card -->
                        </div> <!-- ./card-group -->
                    </div>
            </div>


        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->