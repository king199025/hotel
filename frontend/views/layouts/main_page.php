<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\widgets\FooterMain;
use frontend\widgets\Header;
use frontend\widgets\ShowLang;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
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
<?php $this->beginBody() ?>

<!--Новая верстка-->
<?= Header::widget(); ?>

<section class="content">
    <div id="content_photo" class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="content__photo">
                        <img class="content__photo--left" src="img/mercury_sity.png" alt=""/>

                        <div class="content__photo--text">
                            <h3>MERCURY city</h3>
                            <a href="<?= Url::to(['/site/mercury_city_tower']);?>"><button class="footer__send--btn">ПОСМОТРЕТЬ</button></a>
                        </div>

                    </div>
                    <div class="content__photo">
                        <img class="content__photo--left" src="img/mercury_space.png" alt=""/>

                        <div class="content__photo--text">
                            <h3>MERCURY SPACE</h3>
                            <a href="<?= Url::to(['/site/mc']);?>"><button class="footer__send--btn">ПОСМОТРЕТЬ</button></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="content__photo">
                        <img class="content__photo--right" src="img/apartments.png" alt=""/>

                        <div class="content__photo--text">
                            <h3>АПАРТАМЕНТЫ</h3>
                            <a href="<?= Url::to(['/site/apartments']);?>"><button class="footer__send--btn">ПОСМОТРЕТЬ</button></a>
                        </div>
                    </div>
                    <div class="content__photo">
                        <img class="content__photo--right" src="img/office.png" alt=""/>

                        <div class="content__photo--text">
                            <h3>ОФИСЫ</h3>
                            <a href="<?= Url::to(['/site/offices']);?>"><button class="footer__send--btn">ПОСМОТРЕТЬ</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div id="content__about-left" class="content__about">
                        <div class="content__about--left">
                            <img class="content__about--img" src="img/bottom_view.png" alt=""/>
                        </div>
                        <div class="content__about--descr">
                            <h3>1500</h3>

                            <p>счастливых клиентов</p>
                        </div>

                        <div class="content__about--descrip">
                            <h3>26</h3>

                            <p>скоростных лифтов ThyssenKrupp Elevator</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div id="content__about-right" class="content__about">

                        <div class="content__about--right">
                            <img class="content__about--img" src="img/apartment2.png" alt=""/>
                        </div>

                        <div class="content__about--descrip">
                            <h3>75</h3>

                            <p>надземных этажей</p>
                        </div>
                        <div class="content__about--descr">
                            <h3>137</h3>

                            <p>апартаментов и пентхаусов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="content__gold">

                <div class="content__gold--text">
                    <h3>Золотая башня Москвы</h3>

                    <p>338 метров 82 сантиметра — этого московской башне «Меркурий Сити» хватило, чтобы, согласно рейтингу
                        высотных зданий немецкой аналитической компании Emporis, стать самым высоким зданием Европы. Прежний
                        рекордсмен, лондонский The Shard положен на лопатки: по окончании строительства российский небоскреб
                        будет выше британского на 29 м.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="row">

                    <h3 class="section--title"><span>ВИДЕО ПРЕЗЕНТАЦИЯ</span></h3>

                    <div class="content__video">


                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/QHhTrpR_1rU" frameborder="0"
                                allowfullscreen></iframe>

                        <button class="footer__send--btn">еще посмотреть видео</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?= \frontend\modules\news\widgets\NewsWidgetMain::widget(); ?>


</section>

<?= FooterMain::widget(); ?>

<a href="#" id='Go_Top'><img alt="up" src="/img/up.png"></a>
<!--Новая верстка конец-->




<!--<div class="wrap">
    <?php
/*    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    */?>

    <div class="container">
        <?/*= ShowLang::widget(); */?>
        <?/*= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) */?>
        <?/*= Alert::widget() */?>
        <?/*= $content */?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?/*= date('Y') */?></p>

        <p class="pull-right"><?/*= Yii::powered() */?></p>
    </div>
</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
