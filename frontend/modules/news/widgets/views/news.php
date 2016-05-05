<?php
/* @var $news*/
use common\classes\Debug;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="container">
    <div class="row">
        <!--<div class="content__press">-->


            <h3 class="section--title"><span>ПРЕСС ЦЕНТР</span></h3>
<?//= Debug::prn($news); ?>
        <?php $i=1; foreach($news as $n):?>
<?php $cat = \common\models\db\CategoryNews::find()->where(['id'=>$n->cat_id])->one()->title; ?>
            <?php if($i == 2): ?>
                <div class="col-lg-6 col-sm-6 col-xs-12" style="margin: 20px auto">
                    <div class="content__press--center">
                        <div class="content__press--center__category">
                            <p><?= $cat ?></p>
                        </div>
                        <img class="content__press--center__img img_mix" src="<?= $n->images; ?>" alt=""/>
                        <div class="content__press--center__text">
                            <p class="content__press--center__title"><?= $n->title;?></p>
                            <p class="content__press--center__subtitle"><?= substr(strip_tags($n->text),0,70); ?></p>
                            <!--<p>Peter Dinklage’s porn ‘tache, Jennifer Lawrence’s brilliance and more. Some (tiny)-->
                            <!--spoilers ahead</p>-->

                            <div class="content__press--center__link">
                                <a href="<?= Url::to(['/news/' . $n->id]); ?>"><img src="img/watch_photo.png" alt="Wath photo"/>

                                    <p>WATCH PHOTOS</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <?php if(empty($n->images)): ?>
                    <div class="col-lg-3 col-sm-3 col-xs-12" style="margin: 20px auto">

                        <div class="content__press--right">

                            <p><?= $cat ?></p>

                            <h3 class="content__press--right__title"><?= $n->title;?></h3>
                            <p class="content__press--right__subtitle"><?= substr(strip_tags($n->text),0,70); ?></p>
                            <!--<p><span>Light a bonfire in the garden, and step bravely into your best-dressed decade</span>
                            </p>-->

                            <button class="footer__send--btn">
                                <a href="<?= Url::to(['/news/' . $n->id]); ?>"><?= Yii::t('button', 'BUTTON_READ');?></a></button>

                        </div>

                    </div>
                <?php else: ?>
                    <div class="col-lg-3 col-sm-3 col-xs-12" style="margin: 20px auto">
                        <a href="<?= Url::to(['/news/' . $n->id]); ?>">
                            <div class="content__press--left">

                                <div class="content__press--left__img">
                                <div class="content__press--left__category">
                                    <p><?= $cat ?></p>
                                </div>
                                <img src="<?= $n->images; ?>" class="img_mix" alt="Travel">
                                </div>
                                <p class="content__press--left__title"><?= $n->title;?></p>
                                <p class="content__press--left__subtitle"><?= substr(strip_tags($n->text),0,70); ?></p>
                                <!--<p>With its gaping mouth, needle-sharp teeth</p>-->

                            </div>
                        </a>
                    </div>
                <?php endif ?>
            <?php endif ?>
        <?php $i++; endforeach; ?>
       <!-- </div>-->
    </div>
</div>


<!--<div class="container">
    <div class="row">
        <div class="content__press">


            <h3 class="section--title"><span>ПРЕСС ЦЕНТР</span></h3>
            <?php /*$i=1; foreach($news as $n):*/?>
                <?php /*if($i == 2 || $i == 9): */?>
                    <div class="col-lg-6 col-sm-6 col-xs-12" style="margin: 20px auto">

                        <div class="content__press--center">
                            <img class="content__press--center__img" src="<?/*= $n->images; */?>" alt=""/>
                            <p class="content__press--date2"><?/*= date('d-m-Y', $n->dt_add); */?></p>

                            <div class="content__press--center__text">
                                <p><?/*= $n->title;*/?></p>

                                <a class="content__press--link" href="<?/*= Url::to(['view','id'=>$n->id]); */?>"><?/*= Yii::t('button', 'BUTTON_READ');*/?> &rarr;</a>
                            </div>
                        </div>
                    </div>
                <?php /*else: */?>
                    <?php /*if(empty($n->images)): */?>
                        <div class="col-lg-3 col-sm-3 col-xs-12" style="margin: 20px auto">
                            <div class="content__press--right">
                                <p class="content__press--date"><?/*= date('d-m-Y', $n->dt_add); */?></p>
                                <h3><?/*= $n->title;*/?></h3>
                                <a href="<?/*= Url::to(['view','id'=>$n->id]); */?>"><?/*= Yii::t('button', 'BUTTON_READ');*/?> &rarr;</a>
                            </div>
                        </div>
                    <?php /*else: */?>
                        <div class="col-lg-3 col-sm-3 col-xs-12" style="margin: 20px auto">
                            <div class="content__press--left">
                                <div class="content__press--left__img">
                                    <img src="<?/*= $n->images; */?>" alt="News">
                                    <p class="content__press--date"><?/*= date('d-m-Y', $n->dt_add); */?></p>
                                </div>
                                <p><?/*= $n->title;*/?></p>
                                <a class="content__press--link" href="<?/*= Url::to(['view','id'=>$n->id]); */?>"><?/*= Yii::t('button', 'BUTTON_READ');*/?> &rarr;</a>
                            </div>
                        </div>
                    <?php /*endif */?>
                <?php /*endif; */?>
            <?php /*$i++; endforeach; */?>
        </div>
    </div>
</div>-->
