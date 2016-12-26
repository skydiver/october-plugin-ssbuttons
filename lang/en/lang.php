<?php

    return [

        'plugin' => [
            'name'              => 'Social Sharing Buttons',
            'description'       => 'Display buttons to share content on different social networks',
            'permissions'       => 'Single Sign-on login for backend'
        ],

        'settings' => [
            'twitter'     => 'Twitter',
            'facebook'    => 'Facebook',
            'google+'     => 'Google+',
            'stumbleupon' => 'StumbleUpon',
            'linkedin'    => 'LinkedIn',
            'tumblr'      => 'Tumblr',
            'pinterest'   => 'Pinterest',
            'pocket'      => 'Pocket',
            'reddit'      => 'Reddit',
            'wordpress'   => 'WordPress',
            'pinboard'    => 'Pinboard',
            'email'       => 'Email',
        ],

        'components' => [
            'ssbuttons' => [
                'name'        => 'Share current page',
                'description' => 'Display buttons to share the current page (Bootstrap required)',
            ],
            'ssbuttonsnb' => [
                'name'        => 'Share current page (Alt)',
                'description' => 'Display buttons to share the current page (No Bootstrap required)'
            ],
            'ssbuttonsssb' => [
                'name'        => 'Simple Sharing Buttons',
                'description' => 'Display buttons to share the current page (Multiple themes included)'
            ]
        ],

        'shared' => [
            'buttons_group' => 'Show / Hide Buttons',
            'order_custom'  => 'Enable custom order',
            'order_customd' => 'Display buttons with your own custom order',
            'order_group'   => 'Custom Order',
            'order_descr'   => 'Use only numbers',
            'order_valid'   => 'The order position needs to be a number between 1 - 5',
            'js_title'      => 'Use JS for Title & URL',
            'js_descr'      => 'Use JavaScript to generate page Title and URL. Useful for SEO extensions',
        ]

    ];

?>