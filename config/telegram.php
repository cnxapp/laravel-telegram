<?php

return [
    'api_url' => env('TELEGRAM_API_URL', 'https://api.telegram.org'),

    'connect_timeout' => (int) env('TELEGRAM_CONNECT_TIMEOUT', 5),

    'timeout' => (int) env('TELEGRAM_TIMEOUT', 30),

    'default_bot_config' => 'default',

    'bot_configs' => [
        'default' => [
            'bot_token' => env('TELEGRAM_BOT_TOKEN'),
        ],

        //        'second_bot' => [
        //            'bot_token' => 'second_bot_token',
        //        ],
    ],
];
