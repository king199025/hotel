<?php
use common\classes\OptionsHelper;
use frontend\modules\ms\widgets\MercurySpace;
use yii\helpers\Html;

$this->title = "Контакты";
?>


<!-- open .contacts__info -->
<section class="contacts__info">
    <!-- open .container -->
    <div class="container">
        <!-- open .row -->
        <div class="row">
            <h2>КОНТАКТНАЯ ИНФОРМАЦИЯ</h2>
            <!-- open .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- open .contacts__info--icon -->
                <div class="contacts__info--icon">
                    <span aria-hidden="true" data-icon="&#xe00b;"></span>
                </div>
                <!-- close .contacts__info--icon -->
                <h4>ОТДЕЛ ПРОДАЖ АПАРТАментов иаренды коммерческой недвижимости</h4>
                <p>Телефон: <?= OptionsHelper::get_option('sale_telephone') ?> <br />ежедневно 10:00 – 19:00</p>
            </div>
            <!-- close .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
            <!-- open .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- open .contacts__info--icon -->
                <div class="contacts__info--icon">
                    <span aria-hidden="true" data-icon="&#xe00b;"></span>
                </div>
                <!-- close .contacts__info--icon -->
                <h4>ОФИС</h4>
                <p>Телефон: <?= OptionsHelper::get_option('office_telephone') ?> <br />пн.-пт. 10:00 – 19:00</p>
            </div>
            <!-- close .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
            <!-- open .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- open .contacts__info--icon -->
                <div class="contacts__info--icon">
                    <span aria-hidden="true" data-icon="&#xe01d;"></span>

                </div>
                <!-- close .contacts__info--icon -->
                <h4>АДРЕС</h4>
                <p>123100, Москва, <br />1-й Красногвардейский проезд, дом 15 </p>
                <p>mercury@mercury-development.com</p>
            </div>
            <!-- close .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
            <!-- open .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- open .contacts__info--icon -->
                <div class="contacts__info--icon">
                    <span aria-hidden="true" data-icon="&#xe010;"></span>
                </div>
                <!-- close .contacts__info--icon -->
                <h4>E-mail</h4>
                <p>mercury@mercury-development.com</p>
            </div>
            <!-- close .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
        </div>
        <!-- close .row -->
    </div>
    <!-- close .container -->
</section>
<!-- close .contacts__info -->

<!-- open .contacts__map -->
<section class="contacts__map">
    <!-- open .container -->
    <div class="container">
        <!-- open .row -->
        <div class="row">
            <h3>КАРТА ПРОЕЗДА</h3>
        </div>
        <!-- close .row -->
    </div>
    <!-- close .container -->
    <!-- open .contacts__map--wrap -->
    <article class="contacts__map--wrap">
        <!-- open #map -->
        <div id="map"></div>
        <!-- close #map -->
    </article>
    <!-- close .contacts__map--wrap -->
</section>
<!-- close .contacts__map -->

<!-- open .contacts__form -->
<section class="contacts__form">
    <!-- open .container -->
    <div class="container">
        <!-- open .row -->
        <div class="row">
            <!-- open .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h3>Для заказа пропуска на посещение Башни Меркурий Сити Тауэр Вы можете заполнить нижеприведенную форму.</h3>
            </div>
            <!-- close .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
        </div>
        <!-- close .row -->

        <!-- open .row -->
        <div class="row">


            <!-- open .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <input type="text" class="contacts__form--input" placeholder="Фамилия, Имя, Отчество"/>
            </div>
            <!-- close .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
            <!-- open .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <input type="email" class="contacts__form--input" placeholder="Ваша электронная почта"/>
            </div>
            <!-- close .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
            <!-- open .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <select class="contacts__form--select">
                    <option selected="selected">Вас интересует просмотр</option>
                    <option>Пункт 1</option>
                    <option>Пункт 2</option>
                </select>
            </div>
            <!-- close .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
        </div>
        <!-- close .row -->
        <!-- open .row -->
        <div class="row">
            <!-- open .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <input type="text" class="contacts__form--input" placeholder="Контактный телефон"/>
            </div>
            <!-- close .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
            <!-- open .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <select class="contacts__form--select">
                    <option selected="selected">Удобные дата и время посещения</option>
                    <option>Пункт 1</option>
                    <option>Пункт 2</option>
                </select>
            </div>
            <!-- close .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
            <!-- open .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <select class="contacts__form--select">
                    <option selected="selected">Как вы узнали о нас?</option>
                    <option>Пункт 1</option>
                    <option>Пункт 2</option>
                </select>
            </div>
            <!-- close .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
        </div>
        <!-- close .row -->
        <!-- open .row -->
        <div class="row">
            <!-- open .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <textarea name="contacts__form--text" class="contacts__form--text" placeholder="Сообщение"></textarea>
                <a href="#"  class="contacts__form--btn">ОТПРАВИТЬ СООБЩЕНИЕ</a>
            </div>
            <!-- close .col-lg-4 col-md-4 col-sm-6 col-xs-12 -->
        </div>
        <!-- close .row -->


    </div>
    <!-- close .container -->
</section>
<!-- close .contacts__form -->