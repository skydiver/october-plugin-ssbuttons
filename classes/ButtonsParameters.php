<?php

    namespace Martin\SSButtons\Classes;

    use Lang;

    class ButtonsParameters {

        public static function getParameters($title, $url) {

            $parameters = [

                'twitter' => [
                    'href'  => 'https://twitter.com/share?url=' . urlencode($url) . '&text=' . urlencode($title),
                    'title' => Lang::get('martin.ssbuttons::lang.settings.twitter.title'),
                    'class' => ['ssbuttons' => 'btn btn-twitter', 'ssbuttonsnb' => 'share-btn twitter'],
                    'icon'  => 'fa fa-twitter',
                    'label' => Lang::get('martin.ssbuttons::lang.settings.twitter.name'),
                    'image' => 'twitter',
                ],

                'facebook' => [
                    'href'  => 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url),
                    'title' => Lang::get('martin.ssbuttons::lang.settings.facebook.title'),
                    'class' => ['ssbuttons' => 'btn btn-facebook', 'ssbuttonsnb' => 'share-btn facebook'],
                    'icon'  => 'fa fa-facebook',
                    'label' => Lang::get('martin.ssbuttons::lang.settings.facebook.name'),
                    'image' => 'facebook',
                ],

                'google+' => [
                    'href'  => 'https://plus.google.com/share?url=' . urlencode($url),
                    'title' => Lang::get('martin.ssbuttons::lang.settings.google+.title'),
                    'class' => ['ssbuttons' => 'btn btn-googleplus', 'ssbuttonsnb' => 'share-btn google-plus'],
                    'icon'  => 'fa fa-google',
                    'label' => Lang::get('martin.ssbuttons::lang.settings.google+.name'),
                    'image' => 'googleplus',
                ],

                'stumbleupon' => [
                    'href'  => 'http://www.stumbleupon.com/submit?url=' . urlencode($url) . '&title=' . urlencode($title),
                    'title' => Lang::get('martin.ssbuttons::lang.settings.stumbleupon.title'),
                    'class' => ['ssbuttons' => 'btn btn-stumbleupon', 'ssbuttonsnb' => 'share-btn stumbleupon'],
                    'icon'  => 'fa fa-stumbleupon',
                    'label' => Lang::get('martin.ssbuttons::lang.settings.stumbleupon.name'),
                    'image' => '',
                ],

                'linkedin' => [
                    'href'  => 'https://www.linkedin.com/shareArticle?mini=true&url=' . urlencode($url) . '&title=' . urlencode($title),
                    'title' => Lang::get('martin.ssbuttons::lang.settings.linkedin.title'),
                    'class' => ['ssbuttons' => 'btn btn-linkedin', 'ssbuttonsnb' => 'share-btn linkedin'],
                    'icon'  => 'fa fa-linkedin',
                    'label' => Lang::get('martin.ssbuttons::lang.settings.linkedin.name'),
                    'image' => 'linkedin',
                ],

                'tumblr' => [
                    'href'  => 'https://www.tumblr.com/share?v=3&u=' . urlencode($url) . '&t=' . urlencode($title) . '&s=',
                    'title' => Lang::get('martin.ssbuttons::lang.settings.tumblr.title'),
                    'class' => '',
                    'icon'  => '',
                    'label' => Lang::get('martin.ssbuttons::lang.settings.tumblr.name'),
                    'image' => 'tumblr',
                ],

                'pinterest' => [
                    'href'  => 'https://pinterest.com/pin/create/button/?url=' . urlencode($url) . '&description=' . urlencode($title),
                    'title' => Lang::get('martin.ssbuttons::lang.settings.pinterest.title'),
                    'class' => '',
                    'icon'  => '',
                    'label' => Lang::get('martin.ssbuttons::lang.settings.pinterest.name'),
                    'image' => 'pinterest',
                ],

                'pocket' => [
                    'href'  => 'https://getpocket.com/save?url=' . urlencode($url) . '&title=' . urlencode($title),
                    'title' => Lang::get('martin.ssbuttons::lang.settings.pocket.title'),
                    'class' => '',
                    'icon'  => '',
                    'label' => Lang::get('martin.ssbuttons::lang.settings.pocket.name'),
                    'image' => 'pocket',
                ],

                'reddit' => [
                    'href'  => 'https://www.reddit.com/submit?url=' . urlencode($url) . '&title=' . urlencode($title),
                    'title' => Lang::get('martin.ssbuttons::lang.settings.reddit.title'),
                    'class' => '',
                    'icon'  => '',
                    'label' => Lang::get('martin.ssbuttons::lang.settings.reddit.name'),
                    'image' => 'reddit',
                ],

                'wordpress' => [
                    'href'  => 'https://wordpress.com/press-this.php?u=' . urlencode($url) . '&t=' . urlencode($title) . '&s=' . urlencode($title),
                    'title' => Lang::get('martin.ssbuttons::lang.settings.wordpress.title'),
                    'class' => '',
                    'icon'  => '',
                    'label' => Lang::get('martin.ssbuttons::lang.settings.wordpress.name'),
                    'image' => 'wordpress',
                ],

                'pinboard' => [
                    'href'  => 'https://pinboard.in/popup_login/?url=' . urlencode($url) . '&title=' . urlencode($title) . '&description=' . urlencode($title),
                    'title' => Lang::get('martin.ssbuttons::lang.settings.pinboard.title'),
                    'class' => '',
                    'icon'  => '',
                    'label' => Lang::get('martin.ssbuttons::lang.settings.pinboard.title'),
                    'image' => 'pinboard',
                ],

                'email' => [
                    'href'  => 'mailto:?subject=' . urlencode($title) . '&body=' . urlencode($title) . ':%20' . urlencode($url),
                    'title' => Lang::get('martin.ssbuttons::lang.settings.email.title'),
                    'class' => '',
                    'icon'  => '',
                    'label' => Lang::get('martin.ssbuttons::lang.settings.email.title'),
                    'image' => 'email',
                ],

            ];

            return $parameters;

        }

    }

?>