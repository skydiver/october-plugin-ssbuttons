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

        ],

        'components' => [
            'ssbuttons' => [
                'name'        => 'Share current page',
                'description' => 'Display buttons to share the current page'
            ]
        ]

    ];

?>