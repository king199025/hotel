<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;

/* @var $this yii\web\View */
/* @var $model backend\modules\news\models\News */
/* @var $form yii\widgets\ActiveForm */
/* @var $lang */
/* @var $cat */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'images')->textInput(['maxlength' => true]) */?>
    <div class="imgUpload">
        <div class="media__upload_img"><img src="<?=$model->images;?>" width="100px"/></div>

        <?php
        echo InputFile::widget([
            'language'   => 'ru',
            'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
            'name'       => 'News[images]',
            'id' => 'news-images',

            'template'      => '<div class="input-group">{input}<span class="span-btn">{button}</span></div>',
            'options'       => ['class' => 'form-control itemImg'],
            'buttonOptions' => ['class' => 'btn btn-primary'],
            'value' => $model->images,
            'buttonName' => 'Выбрать изображение'
        ]);
        ?>
    </div>

    <?/*= $form->field($model, 'dt_add')->textInput() */?>

   <!-- --><?/*= $form->field($model, 'text')->textarea(['rows' => 6]) */?>

    <?php echo $form->field($model, 'text')->widget(CKEditor::className(),[
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
            'preset' => 'full',
            'inline' => false,
            'path' => 'frontend/web/media/upload',
        ]),
    ]);?>

    <?/*= $form->field($model, 'lang_id')->textInput() */?>
    <?= $form->field($model, 'lang_id')->dropDownList(ArrayHelper::map($lang,'id','name'),['prompt' => 'Выберите язык','class'=>'form-control selectLang' ]); ?>

    <span class="selectCat">
        <?php if($cat): ?>
            <?= $form->field($model,'cat_id')->dropDownList(ArrayHelper::map($cat,'id','title'),['prompt' => 'Выберите категорию']); ?>
        <?php endif; ?>
    </span>

    <?/*= $form->field($model, 'cat_id')->textInput() */?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
