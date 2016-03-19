<?php

/* @var $news */
/* @var $newsCount */
/* @var $page */
/* @var $limit */

use yii\helpers\Url;
?>

<?php $i=1; foreach($news as $n): ?>
    <?php if($i == 2 || $i == 9): ?>
        <div class="col-lg-6 col-sm-6 col-xs-12" style="margin: 20px auto">

            <div class="content__press--center">
                <img class="content__press--center__img" src="<?= $n->images; ?>" alt=""/>
                <p class="content__press--date2"><?= date('d-m-Y', $n->dt_add); ?></p>

                <div class="content__press--center__text">
                    <p><?= $n->title;?></p>

                    <a class="content__press--link" href="<?= Url::to(['view','id'=>$n->id]); ?>">читать &rarr;</a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <?php if(empty($n->images)): ?>
            <div class="col-lg-3 col-sm-3 col-xs-12" style="margin: 20px auto">
                <div class="content__press--right">
                    <p class="content__press--date"><?= date('d-m-Y', $n->dt_add); ?></p>
                    <h3><?= $n->title;?></h3>
                    <a href="<?= Url::to(['view','id'=>$n->id]); ?>">читать &rarr;</a>
                </div>
            </div>
        <?php else: ?>
            <div class="col-lg-3 col-sm-3 col-xs-12" style="margin: 20px auto">
                <div class="content__press--left">
                    <div class="content__press--left__img">
                        <img src="<?= $n->images; ?>" alt="News">
                        <p class="content__press--date"><?= date('d-m-Y', $n->dt_add); ?></p>
                    </div>
                    <p><?= $n->title;?></p>
                    <a class="content__press--link" href="<?= Url::to(['view','id'=>$n->id]); ?>">читать &rarr;</a>
                </div>
            </div>
        <?php endif ?>
    <?php endif; ?>
    <?php $i++; endforeach;?>
    </div>

<?php if (($limit * $page) < $newsCount): ?>
        <div class="space--more">
            <a href="#" data-csrf="<?= Yii::$app->request->getCsrfToken()?>" id="more-news" data-count="<?= $page; ?>">ПОСМОТРЕТЬ ЕЩЕ НОВОСТИ</a>
        </div>
<?php endif; ?>