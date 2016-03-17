<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\category_news\models\CategoryNews */
/* @var $form yii\widgets\ActiveForm */
/* @var $lang */
?>

<div class="category-news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'lang_id')->textInput() */?>

    <?= $form->field($model, 'lang_id')->dropDownList(ArrayHelper::map($lang,'id','name'),['prompt' => 'Выберите язык']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
