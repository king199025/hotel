<?php

use backend\widgets\TimePicer;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\events\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'dt_add')->textInput() */?>

    <?= $form->field($model, 'dt_event')->textInput(['id'=>'reservation']) ?>

    <?/*= Html::label('Время', 'timepicker', []) */?><!--
    --><?/*= Html::textInput('time', null, ['class'=>'form-control', 'id'=>'timepicker']) */?>
    <?= TimePicer::widget() ?>
    <br>

    <?/*= $form->field($model, 'descr')->textarea(['rows' => 6]) */?>
    <?php echo $form->field($model, 'descr')->widget(CKEditor::className(),[
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
            'preset' => 'full',
            'inline' => false,
            'path' => 'frontend/web/media/upload',
        ]),
    ]);?>

    <?/*= $form->field($model, 'user_id')->textInput() */?>

    <?= $form->field($model, 'lang_id')->dropDownList(ArrayHelper::map($lang, 'id', 'name'), ['prompt'=>'Выберите язык']) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
