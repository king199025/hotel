<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\news\models\News */
/* @var $lang */

$this->title = 'Создать новость';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'lang' =>$lang,
    ]) ?>

</div>
