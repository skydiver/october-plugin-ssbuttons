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
                'description' => 'Display buttons to share the current page (Bootstrap required)'
            ],
            'ssbuttonsnb' => [
                'name'        => 'Share current page (Alt)',
                'description' => 'Display buttons to share the current page (No Bootstrap required)'
            ],
            'ssbuttonsssb' => [
                'name'        => 'Simple Sharing Buttons',
                'description' => 'Display buttons to share the current page (Multiple themes included)'
            ]
        ]

    ];

?>