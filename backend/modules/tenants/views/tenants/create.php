<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\tenants\models\Tenants */

$this->title = 'Create Tenants';
$this->params['breadcrumbs'][] = ['label' => 'Tenants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tenants-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
