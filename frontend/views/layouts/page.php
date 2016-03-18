<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\widgets\FooterMain;
use frontend\widgets\FooterPages;
use frontend\widgets\Header;
use frontend\widgets\ShowLang;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?= Header::widget();?>

<!--<section class="content">-->
    <?= $content ?>
    <!--<div class="container">
        <div class="row">
            <div class="content__press">

                <h3 class="section--title"><span>Новости</span></h3>


                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="row">

                        <div class="content__press--left">

                            <div class="content__press--left__img">
                                <img src="img/news1.png" alt="News">

                                <p class="content__press--date">4 марта 2016</p>


                            </div>

                            <p>Горно-металлургическая компания стала ключевым арендатором «Меркурий Сити»</p>

                            <a class="content__press--link" href="news_in.html">читать &rarr;</a>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="content__press--center">
                            <img class="content__press--center__img" src="img/news2.png" alt=""/>
                            <p class="content__press--date2">4 марта 2016</p>

                            <div class="content__press--center__text">
                                <p>В Меркурий Сити Тауэр открывается театральный сезон:</p>

                                <a class="content__press--link" href="news_in.html">читать &rarr;</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="row">
                        <div class="content__press--right">

                            <p class="content__press--date">4 марта 2016</p>



                            <h3>Новый российский офис компании JTI  признан самым зеленым</h3>

                            <a href="news_in.html">читать &rarr;</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="content__press">
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="content__press--left">

                        <div class="content__press--left__img">
                            <img src="img/news1.png" alt="News">

                            <p class="content__press--date">4 марта 2016</p>


                        </div>

                        <p>Горно-металлургическая компания стала ключевым арендатором «Меркурий Сити»</p>

                        <a class="content__press--link" href="#">читать &rarr;</a>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="row">
                        <div class="content__press--left">

                            <div class="content__press--left__img">
                                <img src="img/news1.png" alt="News">

                                <p class="content__press--date">4 марта 2016</p>


                            </div>

                            <p>Горно-металлургическая компания стала ключевым арендатором «Меркурий Сити»</p>

                            <a class="content__press--link" href="news_in.html">читать &rarr;</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="row">
                        <div class="content__press--right">

                            <p class="content__press--date">4 марта 2016</p>



                            <h3>Новый российский офис компании JTI  признан самым зеленым</h3>

                            <a href="news_in.html">читать &rarr;</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="row">
                        <div class="content__press--left">

                            <div class="content__press--left__img">
                                <img src="img/news1.png" alt="News">

                                <p class="content__press--date">4 марта 2016</p>


                            </div>

                            <p>Горно-металлургическая компания стала ключевым арендатором «Меркурий Сити»</p>

                            <a class="content__press--link" href="news_in.html">читать &rarr;</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="content__press">

                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="row">

                        <div class="content__press--left">

                            <div class="content__press--left__img">
                                <img src="img/news1.png" alt="News">

                                <p class="content__press--date">4 марта 2016</p>


                            </div>

                            <p>Горно-металлургическая компания стала ключевым арендатором «Меркурий Сити»</p>

                            <a class="content__press--link" href="news_in.html">читать &rarr;</a>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="row">

                        <div class="content__press--center">
                            <img class="content__press--center__img" src="img/explorers.png" alt=""/>
                            <p class="content__press--date2">4 марта 2016</p>

                            <div class="content__press--center__text">
                                <p>В Меркурий Сити Тауэр открывается театральный сезон:</p>

                                <a class="content__press--link" href="news_in.html">читать &rarr;</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="row">
                        <div class="content__press--right">

                            <p class="content__press--date">4 марта 2016</p>



                            <h3>Новый российский офис компании JTI  признан самым зеленым</h3>

                            <a href="news_in.html">читать &rarr;</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="content__press">
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="content__press--left">

                        <div class="content__press--left__img">
                            <img src="img/news1.png" alt="News">

                            <p class="content__press--date">4 марта 2016</p>


                        </div>

                        <p>Горно-металлургическая компания стала ключевым арендатором «Меркурий Сити»</p>

                        <a class="content__press--link" href="news_in.html">читать &rarr;</a>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="row">
                        <div class="content__press--left">

                            <div class="content__press--left__img">
                                <img src="img/news1.png" alt="News">

                                <p class="content__press--date">4 марта 2016</p>


                            </div>

                            <p>Горно-металлургическая компания стала ключевым арендатором «Меркурий Сити»</p>

                            <a class="content__press--link" href="news_in.html">читать &rarr;</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="row">
                        <div class="content__press--right">

                            <p class="content__press--date">4 марта 2016</p>



                            <h3>Новый российский офис компании JTI  признан самым зеленым</h3>

                            <a href="news_in.html">читать &rarr;</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="row">
                        <div class="content__press--left">

                            <div class="content__press--left__img">
                                <img src="img/news1.png" alt="News">

                                <p class="content__press--date">4 марта 2016</p>


                            </div>

                            <p>Горно-металлургическая компания стала ключевым арендатором «Меркурий Сити»</p>

                            <a class="content__press--link" href="news_in.html">читать &rarr;</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
<!--</section>-->

<?= FooterPages::widget(); ?>

<a href="#" id='Go_Top'><img alt="up" src="/img/up.png"></a>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>



