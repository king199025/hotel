<?php
use yii\helpers\Html;
?>
<!--<div id="lang">
    <span id="current-lang">
        <?/*= $current->name;*/?> <span class="show-more-lang">▼</span>
    </span>
    <ul id="langs">
        <?php /*foreach ($langs as $lang):*/?>
            <li class="item-lang">
                <?/*= Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) */?>
            </li>
        <?php /*endforeach;*/?>
    </ul>
</div>-->

<!--<a href="<?/*= \yii\helpers\Url::base($lang->url.Yii::$app->getRequest()->getLangUrl()); */?>"><img src="/img/rf.png" alt="Russian"/></a>
<a href=""><img src="/img/gb.png" alt="English"/></a>-->
<?= Html::a(Html::img($current->img), '/'.$current->url.Yii::$app->getRequest()->getLangUrl(),['alt'=>$current->name]) ?>
<?php foreach ($langs as $lang):?>
        <?= Html::a(Html::img($lang->img), '/'.$lang->url.Yii::$app->getRequest()->getLangUrl(),['alt'=>$lang->name]) ?>
<?php endforeach;?>