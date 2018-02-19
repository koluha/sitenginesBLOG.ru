<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'baseUrl' => '',
            'cookieValidationKey' => 'XqmpySqCGk6Vsq7wLOQZ4As99NJ0n2SJ',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
// 'useFileTransport' to false and configure a transport
// for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true, //  запрещаем index.php
            'showScriptName' => false, // запрещаем r= routes
            'rules' => [
// '' => 'site/index',
//'<action:\w+>' => 'site/<action>',
//'/admin' => 'admin/default/index',
//'<controller:\w+>/<id:\d+>' => '<controller>/view',
//'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
//'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
//'<module:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<module>/<controller>/<action>',
//'<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
//'<module:\w+>/<controller:\w+>' => '<module>/<controller>/index',
            ],
        ],
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => 'main.php',
        // 'components' => [
//'admin' => [
//  'identityClass' => 'app\modules\admin\models\AdminIdentity',
//  'class' => 'yii\web\User',
//  'enableAutoLogin' => TRUE,
//  'loginUrl' => ['admin/default/adminlogin'],
//  'identityCookie' => [
//      'name' => 'admin', // unique for backend
//  ]
// ],
//  ],
// ... другие настройки модуля ...
        ],
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@', '?'],
            'root' => [
                'path' => 'img/',
                'name' => 'Global'
            ],
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
