<?php

    return [

        'plugin' => [
            'name'              => 'Boutons de partage social',
            'description'       => 'Boutons d\'affichage pour partager du contenu sur différents réseaux sociaux',
            'permissions'       => 'Single Sign-on login for backend'
        ],

        'settings' => [
            'twitter'    => [
                'name' => 'Twitter',
                'title' => 'Partager sur Twitter'
            ],
            'facebook'    => [
                'name' => 'Facebook',
                'title' => 'Partager sur Facebook'
            ],
            'google+'    => [
                'name' => 'Google+',
                'title' => 'Partager sur Google+'
            ],
            'stumbleupon'    => [
                'name' => 'StumbleUpon',
                'title' => 'Partager sur StumbleUpon'
            ],
            'linkedin'    => [
                'name' => 'LinkedIn',
                'title' => 'Partager sur LinkedIn'
            ],
            'tumblr'    => [
                'name' => 'Tumblr',
                'title' => 'Poster sur Tumblr'
            ],
            'pinterest'    => [
                'name' => 'Pinterest',
                'title' => 'Epingler sur Pinterest'
            ],            
            'pocket'    => [
                'name' => 'Pocket',
                'title' => 'Ajouter à Pocket'
            ],
            'reddit'    => [
                'name' => 'Reddit',
                'title' => 'Soumettre à Reddit'
            ],
            'wordpress'    => [
                'name' => 'WordPress',
                'title' => 'Publier sur WordPress'
            ],
            'pinboard'    => [
                'name' => 'Pinboard',
                'title' => 'Enregistrer sur Pinboard'
            ],
            'email'    => [
                'name' => 'Email',
                'title' => 'Envoyer par Email'
            ]
        ],

        'components' => [
            'ssbuttons' => [
                'name'        => 'Partager la page actuelle',
                'description' => 'Afficher les boutons pour partager la page courante (Bootstrap requis)',
            ],
            'ssbuttonsnb' => [
                'name'        => 'Partager la page courante (Alt)',
                'description' => 'Afficher les boutons pour partager la page courante (sans Bootstrap requis)'
            ],
            'ssbuttonsssb' => [
                'name'        => 'Boutons de partage simples',
                'description' => 'Afficher les boutons pour partager la page courante (Multiples thèmes inclus)'
            ]
        ],

        'shared' => [
            'buttons_group' => 'Afficher / Masquer les boutons',
            'order_custom'  => 'Activer la commande personnalisée',
            'order_customd' => 'Activer l\'ordre personnalisé',
            'order_group'   => 'Ordre personnalisé',
            'order_descr'   => 'N\'utilisez que des chiffres',
            'order_valid'   => 'La position de l\'ordre doit être un nombre entre 1 et 5.',
            'js_title'      => 'Utiliser JS pour Titre & URL',
            'js_descr'      => 'Utilisez JavaScript pour générer le titre de la page et l\'URL. Utile pour les extensions SEO',
            'themes'        => 'Thème des icônes'
        ]

    ];
?>