<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Меркурий Сити Тауэр";

?>
<div class="row">
    <div class="col-lg-12 col-xs-12">
        <h2>Слайдер</h2>
        <a href="<?= Url::to(['/ms/default/add_slide']) ?>" class="btn btn-success">Добавить слайд</a>
        <br>
        <table class="table table-bordered border-black">
            <tr>
                <th>Слайд</th>
                <th>Изображение</th>
                <th width="50px">Удалить</th>
            </tr>
            <?php foreach($slider as $slide): ?>
                <tr>
                    <td><?= $slide->title ?></td>
                    <td><?= Html::img($slide->photo, ['width'=>'100px']) ?></td>
                    <td><?= Html::a('Удалить', Url::to(['/ms/default/del_slide', 'id'=>$slide->id]),['class'=>'btn btn-danger']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="col-lg-12 col-xs-12">
        <h2>Изображения под слайдером</h2>
        <a href="<?= Url::to(['/ms/default/add_img']) ?>" class="btn btn-success">Добавить изображение</a>
        <br>
        <table class="table table-bordered border-black">
            <tr>
                <th>Изображение</th>
                <th width="50px">Удалить</th>
            </tr>
            <?php foreach($img as $i): ?>
                <tr>
                    <td><?= Html::img($i->photo, ['width'=>'100px']) ?></td>
                    <td><?= Html::a('Удалить', Url::to(['/ms/default/del_img', 'id'=>$i->id]),['class'=>'btn btn-danger']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
