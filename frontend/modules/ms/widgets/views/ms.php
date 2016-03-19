<?php

use yii\helpers\Html;

?>
<!-- open .head-slideer -->
<section class="head-slider">
    <!-- open .head-slideer -->
    <div div class="fotorama" data-width="100%"  data-ratio="1233/514" data-fit="cover" data-loop="true" data-nav="false">
        <?php foreach($slider as $slide): ?>
            <?= Html::img($slide->photo) ?>
        <?php endforeach; ?>
    </div>
    <!-- close .head-slideer -->
</section>
<!-- close .head-slideer -->

<!-- open .space--content -->
<section class="space--content">
    <!-- open .container -->
    <div class="container">
        <!-- open .row -->
        <div class="row">
            <!-- open .space--photos -->
            <article class="space--photos">
                <?php foreach($img as $i): ?>
                    <div class="space--photos--item">
                        <?= Html::img($i->photo) ?>
                    </div>
                <?php endforeach; ?>
            </article>
            <!-- close .space--photos -->
            <!-- open .col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 -->
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <p>На 40-м этаже башни «Меркурий» делового комплекса Москва-Сити прошла презентация нового многофункционального бизнес-пространства Mercury Space, который обладает широким спектром возможностей: от организации модных презентаций, фото- и видеосъемок, до проведения официальных деловых встреч и мероприятий.</p>
            </div>
            <!-- close .col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 -->
        </div>
        <!-- close .row -->
    </div>
    <!-- close .container -->
</section>
<!-- close .space--content -->