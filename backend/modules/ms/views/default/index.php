<?php

use yii\helpers\Url;

$this->title = "Меркурий Сити Тауэр";

?>
<div class="row">
    <div class="col-lg-12 col-xs-12">
        <h2>Слайдер</h2>
        <a href="<?= Url::to(['/ms/default/add_slide']) ?>" class="btn btn-success">Добавить слайд</a>
        <table class="table table-bordered">
            <tr>
                <th>Слайд</th>
                <th>Изображение</th>
                <th>Удалить</th>
            </tr>
        </table>
    </div>
</div>
