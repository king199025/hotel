<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],

    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\Controller',
            'access' => ['@', '?'],
            'disabledCommands' => ['netmount'],
            'roots' => [
                [
                    'baseUrl' => '',
                    'basePath' => '@frontend/web',
                    'path' => 'media/upload',
                    'name' => 'Изображения',
                ],
                // [
                // 'class' => 'mihaildev\elfinder\UserPath',
                // 'path' => 'files/user_{id}',
                // 'name' => 'My Documents'
                // ],
                // [
                // 'path' => 'image/some',
                // 'name' => ['category' => 'my', 'message' => 'Some Name'] //перевод Yii::t($category, $message)
                // ],
                // [
                // 'path' => 'image/some',
                // 'name' => ['category' => 'my', 'message' => 'Some Name'], // Yii::t($category, $message)
                // 'access' => ['read' => '*', 'write' => 'UserFilesAccess']
                // // * - для всех, иначе проверка доступа в даааном примере все могут видет а редактировать могут пользователи только с правами UserFilesAccess
                // ]
            ],
            'watermark' => [
                'source' => __DIR__ . '/logo.png', // Path to Water mark image
                'marginRight' => 5, // Margin right pixel
                'marginBottom' => 5, // Margin bottom pixel
                'quality' => 95, // JPEG image save quality
                'transparency' => 70, // Water mark image transparency ( other than PNG )
                'targetType' => IMG_GIF | IMG_JPG | IMG_PNG | IMG_WBMP, // Target image formats ( bit-field )
                'targetMinPixel' => 200 // Target image minimum pixel size
            ]
        ]
    ],

    'modules' => [
        'rbac' => [
            'class' => 'dektrium\rbac\Module',
        ],
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'enableGeneratingPassword' => true,
            'enableConfirmation' => true,
            'enableFlashMessages' => false,
            'confirmWithin' => 86400,
            'cost' => 12,
            'admins' => ['admin'],
            'mailer' => [
                'sender' => 'admin@carbax.ru', // or ['no-reply@myhost.com' => 'Sender name']
                'welcomeSubject' => ' ',
                'confirmationSubject' => 'Confirmation subject',
                'reconfirmationSubject' => 'Email change subject',
                'recoverySubject' => 'Recovery subject',
            ],
        ],
    ],
];
