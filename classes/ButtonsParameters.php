<?php

    namespace Martin\SSButtons\Classes;

    use Lang;

    class ButtonsParameters {

        public static function getParameters($title, $url) {

            $parameters = [

                'twitter' => [
                    'href'  => 'http://twitter.com/home?status=' . urlencode($title . ' | ' . $url),
                    'title' => 'Share on Twitter',
                    'class' => 'btn btn-twitter',
                    'icon'  => 'fa fa-twitter',
                    'label' => 'Twitter',
                ],

                'facebook' => [
                    'href'  => 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url),
                    'title' => 'Share on Facebook',
                    'class' => 'btn btn-facebook',
                    'icon'  => 'fa fa-facebook',
                    'label' => 'Facebook',
                ],

                'google+' => [
                    'href'  => 'https://plus.google.com/share?url=' . urlencode($title . ' | ' . $url),
                    'title' => 'Share on Google+',
                    'class' => 'btn btn-googleplus',
                    'icon'  => 'fa fa-google',
                    'label' => 'Google+',
                ],

                'stumbleupon' => [
                    'href'  => 'http://www.stumbleupon.com/submit?url=' . urlencode($title . ' | ' . $url),
                    'title' => 'Share on StumbleUpon',
                    'class' => 'btn btn-stumbleupon',
                    'icon'  => 'fa fa-stumbleupon',
                    'label' => 'Stumbleupon',
                ],

                'linkedin' => [
                    'href'  => 'http://www.linkedin.com/shareArticle?mini=true&url=' . urlencode($url) . '&title=&summary=' . urlencode($title),
                    'title' => 'Share on LinkedIn',
                    'class' => 'btn btn-linkedin',
                    'icon'  => 'fa fa-linkedin',
                    'label' => 'LinkedIn',
                ],

            ];

            return $parameters;

        }

    }

?>