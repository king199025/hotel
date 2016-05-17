<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'class' => 'frontend\components\LangRequest',
            'baseUrl' => '',
        ],
        'language' => 'ru-RU',
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/language',
                    /*'sourceLanguage' => 'en',
                    'fileMap' => [
                        'button' => 'button.php',
                    ],*/
                ],
            ],
        ],

        /*'user' => [
            'identityClass' => 'dektrium\user\Module',
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

        /*'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'mainpage/default',
            ],
        ],*/

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'frontend\components\LangUrlManager',
            'rules' => [
                '' => 'mainpage/default',
                'news' => 'news/default',
                'news/<id:\d+>' => 'news/default/view',
                '//*' => '/',
                'ms/events' => 'ms/default/events',
                'ms' => 'ms/default',
                'contacts' => 'contacts/default',
                //'mercury_city_tower' => 'mercury_city_tower/default',



                'mercury_city_tower' => '/site/mercury_city_tower',
                'infrastructure' => '/site/infrastructure',
                'members' => '/site/members',
                'officestech' => '/site/officestech',
                'planning' => '/site/planning',
                'plan' => '/site/plan',
                'plans' => '/site/plans',
                'finishing' => '/site/finishing',
                'excursion' => '/site/excursion',


                'offices' => '/site/offices',
                'apartments' => '/site/apartments',
                'retail' => '/site/retail'
            ]
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
        ],
    ],
    'modules' => [
        'mainpage' => [
            'class' => 'frontend\modules\mainpage\Mainpage',
        ],
        'news' => [
            'class' => 'frontend\modules\news\News',
        ],
        'ms' => [
            'class' => 'frontend\modules\ms\Ms',
        ],
        'contacts' => [
            'class' => 'frontend\modules\contacts\Contacts',
        ],
        'mercury_city_tower' => [
            'class' => 'frontend\modules\mercury_city_tower\mercury_city_tower',
        ],
    ],
    'params' => $params,
];
