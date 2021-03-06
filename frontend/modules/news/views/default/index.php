<?php

/* @var $news */
/* @var $newsCount */
/* @var $page */
/* @var $limit */

use yii\helpers\Url;

$this->title = Yii::t('title','TITLE_NEWS');
?>
<section class="content">
<div class="container">
    <h3 class="section--title"><span><?= $this->title; ?></span></h3>
</div>
<div class="container">
    <div class="row">
        <?php $i=1; foreach($news as $n): ?>
            <?php if($i == 2 || $i == 9): ?>
                <div class="col-lg-6 col-sm-6 col-xs-12" style="margin: 10px auto">

                    <div class="content__press--center">
                        <img class="content__press--center__img" src="<?= $n->images; ?>" alt=""/>


                        <div class="content__press--center__text">
                            <p><?= $n->title;?></p>

                            <a class="content__press--link" href="<?= Url::to(['view','id'=>$n->id]); ?>"><?= Yii::t('button', 'BUTTON_READ');?> &rarr;</a>
                            <!--<p class="content__press--date2"><?/*= date('d-m-Y', $n->dt_add); */?></p>-->

                            <p class="content__press--date2"><?= \common\classes\Helper::showDate($n->dt_add); ?></p>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <?php if(empty($n->images)): ?>
                    <div class="col-lg-3 col-sm-3 col-xs-12" style="margin: 10px auto">
                        <div class="content__press--right">

                                <h3><?= $n->title;?></h3>

                            <a href="<?= Url::to(['view','id'=>$n->id]); ?>"><?= Yii::t('button', 'BUTTON_READ');?> &rarr;</a>

                            <!--<p class="content__press--date"><?/*= date('d-m-Y', $n->dt_add); */?></p>-->

                            <p class="content__press--date"><?= \common\classes\Helper::showDate($n->dt_add); ?></p>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-lg-3 col-sm-3 col-xs-12" style="margin: 10px auto">
                        <div class="content__press--left">
                            <div class="content__press--left__img">
                                <img src="<?= $n->images; ?>" alt="News">

                            </div>
                            <p><?= $n->title;?></p>
                            <a class="content__press--link" href="<?= Url::to(['view','id'=>$n->id]); ?>"><?= Yii::t('button', 'BUTTON_READ');?> &rarr;</a>

                            <!--<p class="content__press--date3"><?/*= date('d-m-Y', $n->dt_add); */?></p>-->
                            <p class="content__press--date3"><?= \common\classes\Helper::showDate($n->dt_add); ?></p>

                        </div>
                    </div>
                <?php endif ?>
            <?php endif; ?>
        <?php $i++; endforeach;?>
    </div>

   <!-- --><?php /*if (($limit * $page) < $newsCount): */?>

            <div class="space--more">
                <a href="#" data-csrf="<?= Yii::$app->request->getCsrfToken()?>" id="more-news" data-count="<?= $page; ?>">
                    <?= Yii::t('button','BUTTON_MORE_NEWS'); ?>
                    <!--ПОСМОТРЕТЬ ЕЩЕ НОВОСТИ--></a>
            </div>
        <span class="ajaxNews"></span>
    <?php /*endif; */?>

</div>
</section>