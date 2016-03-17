<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\events\models\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мероприятия';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить мероприятие', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'id',*/
            'title',
            /*'dt_add',*/
            'dt_event',
            'descr:ntext',
            // 'user_id',
            // 'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
