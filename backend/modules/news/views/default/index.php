<?php
use mihaildev\elfinder\InputFile;


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
?>


<?php
echo InputFile::widget([
    'language'   => 'ru',
    'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
    'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    'name'       => 'mediaUploadInputFile',
    'id' => 'itemImg',

    'template'      => '<div class="input-group">{input}<span class="span-btn">{button}</span></div>',
    'options'       => ['class' => 'form-control'],
    'buttonOptions' => ['class' => 'btn btn-primary'],
    'value' => $model->img_url,
    'buttonName' => 'Выбрать изображение'
]);
?>


