<?php
return [
    'language' => 'en-US',
    'sourceLanguage' => 'en-US',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'formatter' => [
            'class' => \common\i18n\Formatter::class,
            'datetimeFormat' => 'php:d/m/Y H:i'
        ],
        'i18n' => [
            'translations' => [
//                'yii' => [
//                    'class' => \yii\i18n\PhpMessageSource::class,
//                    'basePath' =>'@common//yii',
//                ],
                'app*' => [
                    'class' => \yii\i18n\DbMessageSource::class,
//                    'basePath' => '@common/messages',
                    'on missingTranslation' => [
                        '\common\components\TranslationEventHandler',
                        'handleMissingTranslation'
                    ]
                ],

                '*' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@common/messages',
                ]
            ],

        ]
    ],
];
