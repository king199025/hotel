<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\lang\models\Lang */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Языки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
