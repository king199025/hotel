<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\tenants\models\Tenants */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Арендаторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tenants-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
