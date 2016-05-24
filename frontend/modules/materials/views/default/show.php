<?php
/**
 * @var $model object common\models\db\Materials
 */
?>

<?php $this->title = $model->title; ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div id="content__photo--tower" class="content__photo--tower">

                        <img src="<?= $model->photo ?>" alt=""/>

                        <div class="content__photo--tower__name">
                            <h3><?= $model->title ?></h3>

                            <p><?= $model->short_description ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="content__about--text" id="oproekte">

                        <h3><?= $model->title; ?></h3>

                       <?= $model->content; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


</section>



<a href="#" id='Go_Top'><img alt="up" src="/img/up.png"></a>