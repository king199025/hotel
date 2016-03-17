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
    'language'=>'ru-RU',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'lang' => [
            'class' => 'backend\modules\lang\Lang',
        ],
        'news' => [
            'class' => 'backend\modules\news\News',
        ],
        'category_news' => [
            'class' => 'backend\modules\category_news\Category_news',
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
                'news' => 'news/news',
                'news/create' => 'news/news/create',
                'category_news' => 'category_news/category_news',
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
