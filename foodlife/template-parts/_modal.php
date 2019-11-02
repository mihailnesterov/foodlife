<?php
/**
 * modal forms
 */
?>

<!-- modal one click order -->
<div id="oneClickOrder" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form id="one-click-order-form" action="" method="POST">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h5 class="modal-title">Купить в 1 клик</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img id="one-click-img" src="" alt="" class="img-fluid mb-3" style="max-width:300px;">
                    <h4 id="one-click-name" class="p-1 mb-2">Товар</h4>
                    <input type="hidden" id="input-item-name" name="input-item-name" />
                    <h5><span id="one-click-price">0</span> руб.</h5>
                    <input type="hidden" id="input-item-price" name="input-item-price" />
                    <div class="form-group">
                        <p class="small bg-light p-2 text-center">Введите ваш номер телефона и наш менеджер свяжется с Вами для уточнения деталей заказа</p>
                        <input type="text" class="form-control form-control-lg" id="input-one-click-order" name="input-one-click-order" placeholder="+7 (___) ___-____" required>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input checked class="form-check-input" type="checkbox" id="policy-agree-one-click-order">
                            <label class="form-check-label small" for="policy-agree-one-click-order">Согласен с условиями <a href="/privacy-policy" target="_blank" class="text-dark">Политики конфиденциальности</a></label>
                        </div>
                    </div>
                </div>
                <div class="-modal-footer text-center border-top py-3">
                    <button type="button" class="btn btn-secondary d-none" data-dismiss="modal">Отмена</button>
                    <button id="btn-one-click-order-submit" name="btn-one-click-order-submit" type="submit" class="btn btn-primary btn-lg">Купить</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ./modal one click order -->

<!-- modal feedback -->
<div id="feedback" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form id="feedback-form" action="" method="POST">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h5 class="modal-title">Заказать обратный звонок</h5>
                    <button type="button" class="close  text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="form-group">
                        <p class="small bg-light p-2 text-center">Оставьте ваш номер телефона и наш менеджер свяжется с Вами для уточнения деталей заказа</p>
                        <input type="text" class="form-control form-control-lg" id="input-feedback" name="input-feedback" placeholder="+7 (___) ___-____" required>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input checked class="form-check-input" type="checkbox" id="policy-agree-feedback">
                            <label class="form-check-label small" for="policy-agree-feedback">Согласен с условиями <a href="/privacy-policy" target="_blank" class="text-dark">Политики конфиденциальности</a></label>
                        </div>
                    </div>
                </div>
                <div class="-modal-footer text-center p-4 border-top">
                    <button id="btn-feedback-submit" name="btn-feedback-submit" type="submit" class="btn btn-primary btn-lg">Оставить заявку</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ./modal feedback -->

<!-- modal showMap -->
<div id="showMap" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <form id="feedback-form" action="" method="POST">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h5 class="modal-title">Как к нам проехать</h5>
                    <button type="button" class="close  text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div>
                       <script type="text/javascript" charset="utf-8" async="" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aec6a54b06ae16f9e0b4d5c9f195e1f1d82f3c25cb3d034ef428217b2c38c0701&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
                <div class="-modal-footer text-center p-4 border-top d-none">
                    <button id="btn-feedback-submit" name="btn-feedback-submit" type="submit" class="btn btn-primary btn-lg">Оставить заявку</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ./modal showMap -->

<!-- modal sertificates -->
<div id="sertificates" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <form id="feedback-form" action="" method="POST">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h5 class="modal-title">Сертификаты на продукцию</h5>
                    <button type="button" class="close  text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <a href="/wp-content/uploads/2019/10/sertificat_1.png" data-lightbox="image-sertificates" data-title="Sertificate of conformity">
                                <img src="/wp-content/uploads/2019/10/sertificat_1.png" alt="Sertificate of conformity" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-12 col-md-4">
                            <a href="/wp-content/uploads/2019/10/sertificat_2.png" data-lightbox="image-sertificates" data-title="Сертификат соответствия">
                                <img src="/wp-content/uploads/2019/10/sertificat_2.png" alt="Сертификат соответствия" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-12 col-md-4">
                            <a href="/wp-content/uploads/2019/10/sertificat_3.png" data-lightbox="image-sertificates" data-title="Разрешение на использование знака МРТ-ИСО">
                                <img src="https:/wp-content/uploads/2019/10/sertificat_3.png" alt="Разрешение на использование знака МРТ-ИСО" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="-modal-footer text-center p-4 border-top d-none">
                    <button id="btn-feedback-submit" name="btn-feedback-submit" type="submit" class="btn btn-primary btn-lg">Оставить заявку</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ./modal sertificates -->

<!-- modal added-to-cart -->
<div id="added-to-cart" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title">Товар добавлен в корзину</h5>
                <button type="button" class="close  text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div class="col-12 py-5 px-2 mb-4 border-bottom">
                        <h3><i class="fa fa-check mr-2 text-success"></i>Товар добавлен в корзину</h3>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <a href="/cart" class="btn btn-success">Перейти в корзину</a>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
                            Продолжить покупки
                        </button>
                    </div>
                </div>
            </div>
            <div class="-modal-footer text-center p-4 border-top d-none">
                <button id="btn-feedback-submit" name="btn-feedback-submit" type="submit" class="btn btn-primary btn-lg">Оставить заявку</button>
            </div>
        </div>
    </div>
</div>
<!-- ./modal added-to-cart -->

<?php
    // получатели
    $mail_to = 'info@foodlife.shop,trade@fishmeet.ru,realty2010@mail.ru';
    
    // заголовки писем
    $headers = array(
    	'From: foodlife.shop <info@foodlife.shop>',
    	'Content-type: text/html; charset=utf-8',
    	//'Cc: Copy <one@list.ru>',	// можно так отправлять копию
		//'Cc: any@mail.ru', // можно подключить другие копии, но использовать только простой email адрес
    );
	
	// получаем url
	global $post;
    $url = $_SERVER['REQUEST_URI'];

    // 1 click
	if (isset($_POST['btn-one-click-order-submit'])) {

		$phone=$_POST['input-one-click-order'];
		$item=$_POST['input-item-name'];
		$price=$_POST['input-item-price'];
		
		$theme_1 = 'Купить в 1 клик - сайт foodlife.shop';
		$message_1='
		  <h3>Получена заявка Купить в 1 клик:</h3>
		  <h4>Телефон: '.$phone.'</h4>
		  <br>
		  <h4>'.$item.'</h4>
		  <h4>Цена: '.$price.' руб.</h4>
		  <br>
		  <p>URL, с которого была отправлена заявка: <b>'.$url.'</b></p>';
		
		wp_mail($mail_to, $theme_1, $message_1, $headers);
		
		
		echo '<script>location.replace("'."/thankyou".'");</script>';
	}
	
	// feedback
	if (isset($_POST['btn-feedback-submit'])) {
		
		$phone=$_POST['input-feedback'];
		
		$theme_2 = 'Заказ обратного звонка - сайт foodlife.shop';
		$message_2='
		  <h3>Получена заявка на обратный звонок:</h3>
		  <br>
		  <p>телефон: <b>'.$phone.'</b></p>
		  <p>URL, с которого была отправлена заявка: <b>'.$url.'</b></p>';
		
		wp_mail($mail_to, $theme_2, $message_2, $headers);
		
		echo '<script>location.replace("'."/thankyou".'");</script>';
	}
	
?>