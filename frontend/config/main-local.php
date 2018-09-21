<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'LHGHfUYywaXE3TvgPQteMO8-qxFJ9PA-',
        ],
    ],
];

if (!YII_ENV_TEST) {
     // configuration adjustments for 'dev' environment
     $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
		'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20', '109.165.125.245', '*.*.*.*'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20', '109.165.125.245', '*.*.*.*'],
    ];
}

return $config;
