<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\options\models\Options */

$this->title = 'Редактировать: ' . ' ' . $model->opt_title;
$this->params['breadcrumbs'][] = ['label' => 'Опции', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->opt_title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="options-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
