<?php
use common\classes\Helper;

$seo = Helper::getMainSeo();
$this->title = $seo->title;
$this->registerMetaTag([
    'name' => 'description',
    'content' => $seo->descr
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $seo->keywords
]);
?>