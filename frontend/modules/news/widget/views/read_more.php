<?php
/* @var $news*/
?>
<div class="content__press--main__read">
    <p>Читайте <br/>
        также</p>
</div>

<?php foreach($news as $n): ?>
    <div class="content__press--main__short">

        <div class="image">
            <img src="<?= $n->images; ?>" alt=""/>
        </div>
        <div class="description">
            <p><?= $n['category_news']->title; ?></p>

            <a href="<?= \yii\helpers\Url::to(['view','id'=>$n->id]); ?>"><?= $n->title; ?></a>
        </div>

    </div>
<?php endforeach; ?>



