<?php

use App\Models\Config;

$mailConfigs = Config::where('type', 'smtp_email')->whereIn('name', [
    'MAIL_USERNAME', 'MAIL_DRIVER', 'MAIL_PORT', 'MAIL_PASSWORD', 'MAIL_HOST', 'MAIL_ENCRYPTION'
])->get();

$mailerSettings = [];

foreach ($mailConfigs as $config) {
    $mailerSettings[$config->name] = $config->value;
}

return [
    'default' => env('MAIL_MAILER', 'smtp'),

    'mailers' => [
        $mailerSettings['MAIL_DRIVER'] => [
            'transport' => $mailerSettings['MAIL_DRIVER'],
            'url' => env('MAIL_URL'),
            'host' => $mailerSettings['MAIL_HOST'],
            'port' => $mailerSettings['MAIL_PORT'],
            'encryption' => $mailerSettings['MAIL_ENCRYPTION'],
            'username' => $mailerSettings['MAIL_USERNAME'],
            'password' => $mailerSettings['MAIL_PASSWORD'],
            'timeout' => null,
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],
    ],

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    'markdown' => [
        'theme' => 'default',
        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
