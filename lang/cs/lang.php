<?php

    return [

        'plugin' => [
            'name'              => 'Social Sharing Buttons',
            'description'       => 'Zobrazí tlačítka pro sdílení obsahu na různých sociálních sítích',
            'permissions'       => 'Přihlášení do administrace pomocí jednoho tlačítka',
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
            'email'       => 'E-mail',
        ],

        'components' => [
            'ssbuttons' => [
                'name'        => 'Sdílení aktuální stránky',
                'description' => 'Zobrazí tlačítka pro sdílení aktuální stránky (vyžaduje Bootstrap)',
            ],
            'ssbuttonsnb' => [
                'name'        => 'Sdílení aktuální stránky (Alternativně)',
                'description' => 'Zobrazí tlačítka pro sdílení aktuální stránky (nevyžaduje Bootstrap)',
            ],
            'ssbuttonsssb' => [
                'name'        => 'Sdílecí tlačítka',
                'description' => 'Zobrazí tlačítka pro sdílení aktuální stránky (možnost výběru více vzhledů)',
            ],
        ],

        'shared' => [
            'buttons_group' => 'Zobrazit / skrýt tlačítka',
            'order_custom'  => 'Aktivovat vlastní pořadí',
            'order_customd' => 'Zobrazit tlačítka s vlastním pořadím',
            'order_group'   => 'Vlastní pořadí',
            'order_descr'   => 'Použít pouze čísla',
            'order_valid'   => 'Pořadí musí být číslo 1 až 5',
            'js_title'      => 'Použít JS pro titulek a URL',
            'js_descr'      => 'Použít JS pro vygenerování titulku stránky a URL. Vhodné pro SEO pluginy',
        ],

    ];

?>