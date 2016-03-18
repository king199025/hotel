<?php
use yii\helpers\Html;

$i = 0;
?>
<?php foreach ($events as $event): ?>
    <!-- open .col-lg-3 col-md-3 col-sm-6 col-xs-12 pad0 -->
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pad0">
        <a href="#" class="space__event">
                    <span class="space__event--img">
                        <?= Html::img($event->photo) ?>
                    </span>
            <?php if ($i == 0): ?>
            <?php $i = 1; ?>
            <span class="space__event--desc space__event--desc">
                    <?php else: ?>
                <?php $i = 0; ?>
                <span class="space__event--desc space__event--desc-b">
                    <?php endif ?>
                    <span class="space__event--desc--data"><?= date('d-m-Y', $event->dt_event) ?></span>
                        <span class="space__event--desc--time"><?= date('H:i', $event->dt_event) ?></span>
                        <span class="space__event--desc--separator"></span>
                        <h3><?= $event->title ?></h3>
                    </span>
        </a>
    </div>
    <!-- close .col-lg-3 col-md-3 col-sm-6 col-xs-12 pad0 -->
<?php endforeach; ?>