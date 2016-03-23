<?php
/* @var $tenants */
?>

<!-- open .row -->
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
<!-- close .row -->