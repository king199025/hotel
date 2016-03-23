<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\tenants\models\Tenants */

$this->title = 'Update Tenants: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tenants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tenants-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
