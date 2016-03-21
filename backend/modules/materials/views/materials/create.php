<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\materials\models\Materials */

$this->title = 'Добавить материал';
$this->params['breadcrumbs'][] = ['label' => 'Материалы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materials-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
