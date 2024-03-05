<?php
/*
 * @copyright Copyright (c) 2023 AltumCode (https://altumcode.com/)
 *
 * This software is exclusively sold through https://altumcode.com/ by the AltumCode author.
 * Downloading this product from any other sources and running it without a proper license is illegal,
 *  except the official ones linked from https://altumcode.com/.
 */

return [
    'link' => [
        'icon' => 'fa fa-link',
        'color' => '#8e44ad',
    ],
    'biolink' => [
        'icon' => 'fa fa-fw fa-link',
        'color' => '#2980b9',
    ],
    'file' => [
        'icon' => 'fa fa-file',
        'color' => '#27ae60',
    ],
    'vcard' => [
        'icon' => 'fa fa-id-card',
        'color' => '#d35400',
        'fields' => [
            'first_name' => [
                'max_length' => 64,
            ],
            'last_name' => [
                'max_length' => 64,
            ],
            'email' => [
                'max_length' => 320,
            ],
            'url' => [
                'max_length' => 1024,
            ],
            'company' => [
                'max_length' => 64,
            ],
            'job_title' => [
                'max_length' => 64,
            ],
            'birthday' => [
                'max_length' => 16,
            ],
            'street' => [
                'max_length' => 128,
            ],
            'city' => [
                'max_length' => 64,
            ],
            'zip' => [
                'max_length' => 32,
            ],
            'region' => [
                'max_length' => 32,
            ],
            'country' => [
                'max_length' => 32,
            ],
            'note' => [
                'max_length' => 256,
            ],
            'phone_number' => [
                'max_length' => 32,
            ],
            'social_label' => [
                'max_length' => 32
            ],
            'social_value' => [
                'max_length' => 1024
            ]
        ]
    ],
    'event' => [
        'icon' => 'fa fa-calendar-alt',
        'color' => '#7f8c8d',
        'fields' => [
            'name' => [
                'max_length' => 128,
            ],
            'note' => [
                'max_length' => 256,
            ],
            'url' => [
                'max_length' => 1024,
            ],
            'location' => [
                'max_length' => 128,
            ],
            'start_datetime' => [],
            'end_datetime' => [],
            'timezone' => [],
        ]
    ],
];
