<?php


$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
//    'enableCsrfValidation' => false,
    //配置log组件一直被加载
    'bootstrap' => ['log'],
    'aliases' => [
        '@foo' => '/path/to/foo',
        '@bar' => 'http://www.example.com',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'zhmzhmzhmzhmzhmzhmzhm',
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
            //traceLevel可以看到最多3层的调用堆栈层级
            'traceLevel' => YII_DEBUG ? 3 : 0,
            //当数量达到100的时候，将日志信息flush到targets中
            'flushInterval' => 100,
            'targets' => [
//               'file' => [
//                    'class' => 'yii\log\FileTarget',
////                    'levels' => ['error', 'warning'],
//                ],
               [
                    'class' => 'yii\log\DbTarget',
//                    'levels' => ['error','warning']
                    'db' => 'db',
                    'logTable' => 'log',
                   'exportInterval' => 100,
                ],
               [
                    'class' => 'yii\log\EmailTarget',
                    'levels' => ['error'],
                    'categories' => ['yii\db\*'],
                    'message' => [
                        'from' => ['log@example.com'],
                        'to' => ['admin@example.com', 'developer@example.com'],
                        'subject' => 'Database errors at example.com',
                    ],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        'helloWorld' => [
            'class' => 'app\components\HelloWorld',
        ],
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'tpl' => [
                    'class' => 'yii\smarty\ViewRenderer',
                    //'cachePath' => '@runtime/Smarty/cache',
                ],
            ]
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
        'session' => [
            'class' => 'yii\web\DbSession',
            'db' => 'db',
            'sessionTable' => 'session'
        ]
    ],
    'defaultRoute' => 'index/index',
    'controllerMap' => [
        // 用类名申明 "account" 控制器
        'account' => 'app\controllers\IndexController',
        ],

    'modules' => [
        'forum' => [
            'class' => 'app\modules\forum\Module',
            // ... 模块其他配置 ...
        ],
    ],

];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['218.30.116.*','127.0.0.1', '::1', '192.168.0.*', '10.18.58.223'] // 按需调整这里

    ];
}

return $config;
