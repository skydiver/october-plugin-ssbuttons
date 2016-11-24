<?php

    namespace Martin\SSButtons\Classes;

    use Lang;

    class ButtonsParameters {

        public static function getParameters($title, $url) {

            $parameters = [

                'twitter' => [
                    'href'  => 'https://twitter.com/share?url=' . urlencode($url) . '&text=' . urlencode($title),
                    'title' => 'Share on Twitter',
                    'class' => ['ssbuttons' => 'btn btn-twitter', 'ssbuttonsnb' => 'share-btn twitter'],
                    'icon'  => 'fa fa-twitter',
                    'label' => 'Twitter',
                    'image' => 'twitter',
                ],

                'facebook' => [
                    'href'  => 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url),
                    'title' => 'Share on Facebook',
                    'class' => ['ssbuttons' => 'btn btn-facebook', 'ssbuttonsnb' => 'share-btn facebook'],
                    'icon'  => 'fa fa-facebook',
                    'label' => 'Facebook',
                    'image' => 'facebook',
                ],

                'google+' => [
                    'href'  => 'https://plus.google.com/share?url=' . urlencode($url),
                    'title' => 'Share on Google+',
                    'class' => ['ssbuttons' => 'btn btn-googleplus', 'ssbuttonsnb' => 'share-btn google-plus'],
                    'icon'  => 'fa fa-google',
                    'label' => 'Google+',
                    'image' => 'googleplus',
                ],

                'stumbleupon' => [
                    'href'  => 'http://www.stumbleupon.com/submit?url=' . urlencode($url) . '&title=' . urlencode($title),
                    'title' => 'Share on StumbleUpon',
                    'class' => ['ssbuttons' => 'btn btn-stumbleupon', 'ssbuttonsnb' => 'share-btn stumbleupon'],
                    'icon'  => 'fa fa-stumbleupon',
                    'label' => 'Stumbleupon',
                    'image' => '',
                ],

                'linkedin' => [
                    'href'  => 'https://www.linkedin.com/shareArticle?mini=true&url=' . urlencode($url) . '&title=' . urlencode($title),
                    'title' => 'Share on LinkedIn',
                    'class' => ['ssbuttons' => 'btn btn-linkedin', 'ssbuttonsnb' => 'share-btn linkedin'],
                    'icon'  => 'fa fa-linkedin',
                    'label' => 'LinkedIn',
                    'image' => 'linkedin',
                ],

                'tumblr' => [
                    'href'  => 'https://www.tumblr.com/share?v=3&u=' . urlencode($url) . '&t=' . urlencode($title) . '&s=',
                    'title' => 'Post to Tumblr',
                    'class' => '',
                    'icon'  => '',
                    'label' => 'Tumblr',
                    'image' => 'tumblr',
                ],

                'pinterest' => [
                    'href'  => 'https://pinterest.com/pin/create/button/?url=' . urlencode($url) . '&description=' . urlencode($title),
                    'title' => 'Pin it',
                    'class' => '',
                    'icon'  => '',
                    'label' => 'Pinterest',
                    'image' => 'pinterest',
                ],

                'pocket' => [
                    'href'  => 'https://getpocket.com/save?url=' . urlencode($url) . '&title=' . urlencode($title),
                    'title' => 'Add to Pocket',
                    'class' => '',
                    'icon'  => '',
                    'label' => 'Pocket',
                    'image' => 'pocket',
                ],

                'reddit' => [
                    'href'  => 'https://www.reddit.com/submit?url=' . urlencode($url) . '&title=' . urlencode($title),
                    'title' => 'Submit to Reddit',
                    'class' => '',
                    'icon'  => '',
                    'label' => 'Reddit',
                    'image' => 'reddit',
                ],

                'wordpress' => [
                    'href'  => 'https://wordpress.com/press-this.php?u=' . urlencode($url) . '&t=' . urlencode($title) . '&s=' . urlencode($title),
                    'title' => 'Publish on WordPress',
                    'class' => '',
                    'icon'  => '',
                    'label' => 'WordPress',
                    'image' => 'wordpress',
                ],

                'pinboard' => [
                    'href'  => 'https://pinboard.in/popup_login/?url=' . urlencode($url) . '&title=' . urlencode($title) . '&description=' . urlencode($title),
                    'title' => 'Save to Pinboard',
                    'class' => '',
                    'icon'  => '',
                    'label' => 'Pinboard',
                    'image' => 'pinboard',
                ],

                'email' => [
                    'href'  => 'mailto:?subject=' . urlencode($title) . '&body=' . urlencode($title) . ':%20' . urlencode($url),
                    'title' => 'Email',
                    'class' => '',
                    'icon'  => '',
                    'label' => 'Email',
                    'image' => 'email',
                ],

            ];

            return $parameters;

        }

    }

?>