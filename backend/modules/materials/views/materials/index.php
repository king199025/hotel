<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\materials\models\MaterialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Материалы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materials-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'id',*/
            'title',
            /*'content:ntext',*/
            [
                'attribute' => 'dt_add',
                'format' => 'text',
                'value' => function($model){
                    return date('Y-m-d H:i', $model->dt_add);
                }
            ],
            /*'dt_update',*/
            // 'type',
            [
                'attribute' => 'status',
                'format' => 'text',
                'value' => function ($model) {
                    if($model->status == 0){ return "Опубликовано"; }
                    if($model->status == 1){ return "В архиве"; }
                    if($model->status == 2){ return "Черновик"; }
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
    ],
    ]); ?>

</div>
