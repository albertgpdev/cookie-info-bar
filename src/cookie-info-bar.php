<?php

return [

    'enabled' => env('COOKIE_INFO_BAR_ENABLED', true),

    'allow_customize' => env('COOKIE_INFO_BAR_CUSTOMIZABLE', false),

    'type' => env('COOKIE_INFO_BAR_TYPE', 'bar'), //modal

    'cookie_name' => env('COOKIE_INFO_BAR_NAME', 'laravel_cookie_consent'),

    'cookie_lifetime' => env('COOKIE_INFO_BAR_LIFETIME', 365 * 20),
    
    'used_cookies' => [
        'technical_cookies' => [
            'customizable' => true,
            'values' => [
                [
                    'key' => '',
                    'default' => null,
                ],
            ]
        ],
        'personalization_cookies' => [
            'customizable' => true,
            'values' => [
                [
                    'key' => '',
                    'default' => null,
                ],
            ]
        ],
        'analysis_cookies' => [
            'customizable' => true,
            'values' => [
                [
                    'key' => '',
                    'default' => null,
                ],
            ]
        ],
        'advertising_cookies' => [
            'customizable' => true,
            'values' => [
                [
                    'key' => '',
                    'default' => null,
                ],
            ]
        ],
        'behavioral_advertising_cookies' => [
            'customizable' => true,
            'values' => [
                [
                    'key' => '',
                    'default' => null,
                ],
            ]
        ]
    ]
];
