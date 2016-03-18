<?php

use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\lang\models\Lang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lang-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="imgUpload">
        <div class="media__upload_img"><img src="<?=$model->img;?>" width="100px"/></div>

        <?php
        echo InputFile::widget([
            'language'   => 'ru',
            'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
            'name'       => 'Lang[img]',
            'id' => 'lang-images',

            'template'      => '<div class="input-group">{input}<span class="span-btn">{button}</span></div>',
            'options'       => ['class' => 'form-control itemImg'],
            'buttonOptions' => ['class' => 'btn btn-primary'],
            'value' => $model->img,
            'buttonName' => 'Выбрать изображение'
        ]);
        ?>
    </div>


    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'local')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'default')->textInput() ?>

    <?= $form->field($model, 'date_update')->textInput() ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
