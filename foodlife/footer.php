<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foodlife.shop
 */

?>

	</main><!-- #main -->
    
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 footer-block">
                    <h5 class="text-primary">Навигация</h5>
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="/shop">Каталог товаров</a></li>
                        <!--<li><a href="/uslugi">Услуги</a></li>-->
                        <li><a href="/contacts">Контакты</a></li>
                    </ul>
                    <!--<h5 class="text-primary">Услуги</h5>
                    <ul>
                        <li><a href="/">Переработка рыбы</a></li>
                        <li><a href="/shop">Консервация морепродуктов</a></li>
                        <li><a href="/uslugi">Фасовка икры</a></li>
                    </ul>-->
                </div>
                <div class="col-12 col-md-4 footer-block">
                    <h5 class="text-primary">Каталог товаров</h5>
                    <ul>
                        <?php
                        // в массиве перечисляем id категорий, которые выводим в меню
                        $categories_footer = array(19,20,21,22,23);
                        for($i=0;$i<count($categories_footer);$i++){
                            $category = get_term( $categories_footer[$i], 'product_cat' ); ?>
                            <li>
                                <a href="<?= get_term_link($category->term_id) ?>">
                                   <?= $category->name ?> 
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-12 col-md-4 footer-block">
                    <h5 class="text-primary">Контакты</h5>
                    <ul>
                        <li class="text-uppercase"><i class="fa fa-address-card mr-2 text-secondary"></i>FoodLife.shop</li>
                        <li><i class="fa fa-phone mr-2 text-secondary"></i>8 (499) 394 46 23</li>
                        <li><i class="fa fa-envelope mr-2 text-secondary"></i><a
                                href="mailto:info@foodlife.shop">info@foodlife.shop</a></li>
                        <li><i class="fa fa-map-marker-alt mr-2 text-secondary"></i>Пункт самовывоза: г. Москва ул. Новодмитровская д.5А строение 1</li>
                        <li>
                            <a href="https://vk.com/shop_foodlife" target="_blank" title="Наша группа в ВК"><i class="fab fa-vk fa-2x mr-2 text-secondary"></i></a>
                            <a href="https://www.facebook.com/Foodlifeshop-113480393344992/" target="_blank" title="Наша страница в Facebook"><i class="fab fa-facebook fa-2x mr-2 text-secondary"></i></a>
                            <a href="https://www.instagram.com/foodlife.shop/" target="_blank" title="Наша страница в Instagram"><i class="fab fa-instagram fa-2x mr-2 text-secondary"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 text-center text-white mt-4">
                    <p class="m-0">&copy; 2017 - <?= date('Y') ?> <a href="/">FoodLife.shop</a> интернет-магазин, Все права защищены</p>
                    <p class="m-0 small">ОГРНИП: 317774600557484 ИНН: 025508758283</p>
                    <p class="m-0 small"><a href="/privacy-policy">Положение об обработке персональных данных</a></p>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </footer>

    <?php include __DIR__ . '/template-parts/_modal.php' ?>

    <!-- toTop button -->
    <div id="toTop"><i class="fa fa-chevron-up"></i></div>

<?php wp_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133323627-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133323627-1');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50325610 = new Ya.Metrika2({
                    id:50325610,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50325610" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
