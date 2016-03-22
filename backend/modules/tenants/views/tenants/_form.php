<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\tenants\models\Tenants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tenants-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <?= $form->field($model, 'images')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_company')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
