<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
        /*'css/bootstrap.css',*/
        'css/animate.css',
        'css/fotorama.css',
        'css/styles.css',
        'css/style.min.css',
        'css/site.css',
    ];
    public $js = [
        'js/jquery-2.1.4.js',
        'js/bootstrap.min.js',
        'http://api-maps.yandex.ru/2.1/?lang=ru_RU',
        'js/fotorama.js',
        'js/skript.js',
        'js/application.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
