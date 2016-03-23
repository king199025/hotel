<?php $this->title = 'АРЕНДАТОРЫ'; ?>



<!-- open .renters__content -->
<section class="renters__content">
    <!-- open .container -->
    <div class="container">
        <!-- open .row -->
        <div class="row">
            <!-- open .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2>АРЕНДАТОРЫ</h2>
                <p>У «Меркурий Сити» арендуют офисные, торговые и складские помещения более ста предприятий различных видов деятельности.</p>
                <!-- open .renters__floor -->
                <h3 class="renters__floor" data-csrf="<?= Yii::$app->request->getCsrfToken()?>"><span class="floor-number">1</span> <small>этаж</small></h3>
                <!-- close .renters__floor -->

                <!-- open .renters__companies -->
                <div class="renters__companies">
                    <div class="row">
                        <?php
                        if(empty($tenants)){
                            ?>
                            <span>Арендаторов на этаже нет</span>
                            <?php
                        }else{
                        foreach($tenants as $ten): ?>
                            <!-- open .col-lg-4 col-md-4 col-sm-4 col-xs-6 -->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <!-- open .renters__companies--item -->
                                <div class="renters__companies--item">
                                    <!-- open .renters__companies--item--logo -->
                                    <div class="renters__companies--item--logo">
                                        <img src="<?= $ten->logo_company; ?>" alt="" />
                                    </div>
                                    <!-- close .renters__companies--item--logo -->
                                    <a target="_blank" href="<?= $ten->site_company; ?>"><?= Yii::t('button', 'BUTTON_ABOUT_COMPANY'); ?></a>
                                </div>
                                <!-- close .renters__companies--item -->
                            </div>
                        <?php endforeach; } ?>
                    </div>
                </div>
                <!-- close .renters__companies -->
            </div>
            <!-- close .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
            <!-- open .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="tower-scheme"></div>
                <!--<img src="/img/1.png" alt="" class="renters__building" />-->
            </div>
            <!-- close .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
        </div>
        <!-- close .row -->
    </div>
    <!-- close .container -->
</section>
<!-- close .renters__content -->

