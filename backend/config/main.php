<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'language' => 'ru-RU',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'lang' => [
            'class' => 'backend\modules\lang\Lang',
        ],
        'events' => [
            'class' => 'backend\modules\events\Events'],
        'news' => [
            'class' => 'backend\modules\news\News',
        ],
        'category_news' => [
            'class' => 'backend\modules\category_news\Category_news',
        ],
        'seo' => [
            'class' => 'backend\modules\seo\Seo',
        ],
        'ms' => [
            'class' => 'backend\modules\ms\Ms',
        ],
        'materials' => [
            'class' => 'backend\modules\materials\Materials',
        ],
        'options' => [
            'class' => 'backend\modules\options\Options',
        ],
        'mercury_city_tower' => [
            'class' => 'backend\modules\mercury_city_tower\MercuryCityTower',
        ],
        'tenants' => [
            'class' => 'backend\modules\tenants\Tenants',
        ],
    ],
    'components' => [
        'request' => [
            'baseUrl' => '/secure',
        ],
        /*'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],*/
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'lang' => 'lang/lang',
                'events' => 'events/events',
                'news' => 'news/news',
                'news/create' => 'news/news/create',
                'category_news' => 'category_news/category_news',
                'ms' => 'ms/default',
                'materials' => 'materials/materials',
                'options' => 'options/options',
                'mercury_city_tower' => 'mercury_city_tower/default',
                'tenants' => 'tenants/tenants',
            ],
        ],

    ],
    'on beforeRequest' => function () {
        $pathInfo = Yii::$app->request->pathInfo;
        if (!empty($pathInfo) && substr($pathInfo, -1) === '/') {
            Yii::$app->response->redirect('/secure/' . substr(rtrim($pathInfo), 0, -1), 301)->send();
        }
    },
    'params' => $params,
];
