<?php use yii\helpers\Url; ?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-12">

                <div  class="header__container-left">

                    <!--<a href=""><img src="img/rf.png" alt="Russian"/></a>
                    <a href=""><img src="img/gb.png" alt="English"/></a>-->
                    <?= \frontend\widgets\ShowLang::widget(); ?>

                    <h3><span>8.495.</span>651.651.0</h3>

                    <p>123100, г. Москва, 1-й Красногвардейский проезд, д. 15</p>
                    <button id="request_call" class="footer__send--btn"><?= Yii::t('button', 'REQUEST_A_CALL') ?></button>
                </div>

            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="header__logo">
                    <img src="/img/logo.png" alt="Logo"/>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12">

                <div class="header__container-right">

                    <div class="header__container-right--social">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-rss"></i>
                    </div>

                    <ul class="header__container-right--menu">
                        <li><a href="<?= Url::to(['/materials/default/show', 'id'=>20]);?>"><?= Yii::t('menu', 'HEADER_MENU_REP'); ?></a></li>
                        <li><a href="<?= Url::to(['/materials/default/show', 'id'=>21]);?>"><?= Yii::t('menu', 'HEADER_MENU_RECOMMENDATIONS'); ?></a></li>
                        <li><a href="<?= Url::to(['/materials/default/show', 'id'=>22]);?>"><?= Yii::t('menu', 'HEADER_MENU_CUSTOMER_REVIEWS'); ?></a></li>
                        <li><a href="<?= Url::to(['/materials/default/show', 'id'=>23]);?>"><?= Yii::t('menu', 'HEADER_MENU_OPINION_FAMOUS_PEOPLE'); ?></a></li>
                        <li><a href="<?= Url::to(['/news']); ?>"><?= Yii::t('menu', 'HEADER_MENU_NEWS'); ?></a></li>
                    </ul>

                    <ul class="header__container-right--menu">
                        <li><a href="<?= Url::to(['/materials/default/show', 'id'=>24]);?>"><?= Yii::t('menu', 'HEADER_MENU_PARTNERS'); ?></a></li>
                        <li><a href="<?= Url::to(['/materials/default/show', 'id'=>25]);?>"><?= Yii::t('menu', 'HEADER_MENU_CONCIERGE_SERVICE'); ?></a></li>
                        <li><a href="<?= Url::to(['/materials/default/show', 'id'=>26]);?>"><?= Yii::t('menu', 'HEADER_MENU_CLUB'); ?></a></li>
                        <li><a href="<?= Url::to(['/site/mercury_city_tower']);?>"><?= Yii::t('menu', 'HEADER_MENU_MOSCOW_CITY'); ?></a></li>
                    </ul>

                </div>

            </div>


            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--<a class="navbar-brand" href="#">Brand</a>-->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a class="nav__link" href="/"><?= Yii::t('menu', 'HEADER_MENU_HOME'); ?></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle nav__link"
                                   data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false"><?= Yii::t('menu', 'HEADER_MENU_M_C_T'); ?></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>10]);?>">О проекте</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>11]);?>">Структура</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>12]);?>">Технические
                                            характеристики</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>13]);?>">Архитекторы</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>14]);?>">Участники</a></li>
                                    <!--<li class="dropdown__link"><a class="nav__link" href="<?/*= Url::to(['/site/mercury_city_tower']);*/?>">Управляющая компания</a>-->
                                    </li>
                                </ul>
                            </li>
                            <li><a class="nav__link" href="<?= Url::to(['/news']); ?>"><?= Yii::t('menu', 'HEADER_MENU_NEWS'); ?></a></li>
                            <li>
                                <a href="#" class="dropdown-toggle nav__link" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false"><?= Yii::t('menu', 'HEADER_MENU_OFFICES'); ?></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>15]);?>">Технические
                                            характеристики</a></li>
                                    <!--<li class="dropdown__link"><a class="nav__link" href="<?/*= Url::to(['/site/planning']);*/?>">Планировки </a></li>-->
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>16]);?>">Варианты планировки plans</a>
                                    </li>
                                   <!-- <li class="dropdown__link"><a class="nav__link" href="offices.html">3-d экскурсия по этажу</a>
                                    </li>
                                    <li class="dropdown__link"><a class="nav__link" href="offices.html">Выбрать вид</a></li>-->
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/site/tenants']);?>">Арендаторы</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>17]);?>">Бизнес притяжение</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle nav__link" data-toggle="dropdown"
                                   role="button"
                                   aria-haspopup="true" aria-expanded="false"><?= Yii::t('menu', 'HEADER_MENU_APARTMENTS'); ?></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/site/plan']);?>">Планировки</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>18]);?>">Отделка</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>19]);?>">Услуги</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/site/excursion']);?>">3-d экскурсия по
                                            апартаментам</a></li>
                                    <!--<li class="dropdown__link"><a class="nav__link" href="#">Выбрать вид </a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="apartments.html">Консьерж-сервис</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="#">Обратная связь</a></li>-->
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle nav__link" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false"><?= Yii::t('menu', 'HEADER_MENU_RETAIL'); ?></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/site/retail']);?>"><?= Yii::t('menu', 'HEADER_MENU_RETAIL'); ?></a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/site/planirovkariteil']);?>">Планировки</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/site/excursionretail']);?>">3-d экскурсия по этажу</a>
                                    </li>
                                   <!-- <li class="dropdown__link"><a class="nav__link" href="retail.html">Преимущества</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="renters.html">Арендаторы</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="#">Обратная связь по
                                            ритейлу</a></li>-->
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle nav__link" data-toggle="dropdown"
                                   role="button"
                                   aria-haspopup="true" aria-expanded="false"><?= Yii::t('menu', 'HEADER_MENU_M_S'); ?></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>27]);?>">Календарь мероприятий</a>
                                    </li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/ms/events']) ?>">Мероприятия</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>28]);?>">Билеты и пакеты</a></li>
                                    <!--<li class="dropdown__link"><a class="nav__link" href="mercury-space.html">Запланировать визит</a>-->
                                    </li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>29]);?>">Забронировать экскурсию</a>
                                    </li>
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/materials/default/show', 'id'=>30]);?>">Подарочная карта</a></li>
                                    <!--<li class="dropdown__link"><a class="nav__link" href="mercury-space.html">Туризм и группы</a></li>
                                    <li class="dropdown__link"><a class="nav__link" href="mercury-space.html">Магазин</a></li>-->
                                    <li class="dropdown__link"><a class="nav__link" href="<?= Url::to(['/contacts']) ?>">Контакты</a></li>
                                </ul>
                            </li>
                            <li><a class="nav__link" href="<?= Url::to(['/galleries']) ?>"><?= Yii::t('menu', 'HEADER_MENU_GALLERY'); ?></a></li>
                            <li><a class="nav__link" href="<?= Url::to(['/contacts']) ?>"><?= Yii::t('menu', 'HEADER_MENU_CONTACTS'); ?></a></li>
                        </ul>

                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</header>