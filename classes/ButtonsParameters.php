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
                ],

                'facebook' => [
                    'href'  => 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url),
                    'title' => 'Share on Facebook',
                    'class' => ['ssbuttons' => 'btn btn-facebook', 'ssbuttonsnb' => 'share-btn facebook'],
                    'icon'  => 'fa fa-facebook',
                    'label' => 'Facebook',
                ],

                'google+' => [
                    'href'  => 'https://plus.google.com/share?url=' . urlencode($url),
                    'title' => 'Share on Google+',
                    'class' => ['ssbuttons' => 'btn btn-googleplus', 'ssbuttonsnb' => 'share-btn google-plus'],
                    'icon'  => 'fa fa-google',
                    'label' => 'Google+',
                ],

                'stumbleupon' => [
                    'href'  => 'http://www.stumbleupon.com/submit?url=' . urlencode($url) . '&title=' . urlencode($title),
                    'title' => 'Share on StumbleUpon',
                    'class' => ['ssbuttons' => 'btn btn-stumbleupon', 'ssbuttonsnb' => 'share-btn stumbleupon'],
                    'icon'  => 'fa fa-stumbleupon',
                    'label' => 'Stumbleupon',
                ],

                'linkedin' => [
                    'href'  => 'https://www.linkedin.com/shareArticle?mini=true&url=' . urlencode($url) . '&title=' . urlencode($title),
                    'title' => 'Share on LinkedIn',
                    'class' => ['ssbuttons' => 'btn btn-linkedin', 'ssbuttonsnb' => 'share-btn linkedin'],
                    'icon'  => 'fa fa-linkedin',
                    'label' => 'LinkedIn',
                ],

            ];

            return $parameters;

        }

    }

?>