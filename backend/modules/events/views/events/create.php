<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\events\models\Events */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Мероприятия', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'lang' => $lang
    ]) ?>

</div>
