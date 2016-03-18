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
        'css/site.css',
        /*'css/bootstrap.css',*/
        'css/animate.css',
        'css/fotorama.css',
        'css/styles.css',
        'css/style.min.css',
    ];
    public $js = [
        'js/jquery-2.1.4.js',
        'js/bootstrap.min.js',
        'js/fotorama.js',
        'js/skript.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
