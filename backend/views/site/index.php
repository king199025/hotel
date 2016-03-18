<?php

/* @var $this yii\web\View */

use common\models\db\Events;
use common\models\db\News;
use yii\helpers\Url;

$this->title = 'Консоль';
?>
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= News::find()->count() ?></h3>
                <p>Новости</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="<?= Url::to(['/news']) ?>" class="small-box-footer">Подробнее <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= Events::find()->count() ?></h3>
                <p>Мероприятия</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= Url::to(['/events']) ?>" class="small-box-footer">Подробнее <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->
</div>