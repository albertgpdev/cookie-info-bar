<?php

return [
    /**
     * Defines if cookie-info-bar is active or inactive
     */
    'enabled' => env('COOKIE_INFO_BAR_ENABLED', true),

    /**
     * Allows to modify the cookies individually
     */
    'allow_customize' => env('COOKIE_INFO_BAR_CUSTOMIZABLE', false),

    /**
     * Define whether it goes to show a modal or a bar
     */
    'type' => env('COOKIE_INFO_BAR_TYPE', 'bar'), // [modal, bar]

    /**
     * Define the name of the cookie that will store the data used by this library
     */
    'cookie_name' => env('COOKIE_INFO_BAR_NAME', 'laravel_cookie_consent'),

    /**
     * Defines the lifetime of the cookie
     */
    'cookie_lifetime' => env('COOKIE_INFO_BAR_LIFETIME', 365 * 20),
    
    /**
     * Define an array with all the cookies used by our application
     */
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
