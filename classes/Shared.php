<?php

    namespace Martin\SSButtons\Classes;

    use Lang;

    class Shared {

        public static function getPropertyFA() {
            return [
                'title'             => 'Load Font Awesome?',
                'type'              => 'dropdown',
                'default'           => 'maxcdn',
                'placeholder'       => 'Select source',
                'options'           => ['maxcdn' => 'Yes, from MaxCDN', 'no' => 'No'],
                'showExternalParam' => false
            ];
        }

        public static function getPropertyButtons($button) {
            return [
                'title'             => Lang::get('martin.ssbuttons::lang.settings.'.$button),
                'description'       => 'Display ' . Lang::get('martin.ssbuttons::lang.settings.'.$button) . ' button',
                'default'           => true,
                'type'              => 'checkbox',
                'showExternalParam' => false,
                'group'             => Lang::get('martin.ssbuttons::lang.shared.buttons_group')
            ];
        }

        public static function getPropertyCustomOrder() {
            return [
                'title'             => Lang::get('martin.ssbuttons::lang.shared.order_custom'),
                'description'       => Lang::get('martin.ssbuttons::lang.shared.order_customd'),
                'default'           => false,
                'type'              => 'checkbox',
                'showExternalParam' => false,
                'group'             => Lang::get('martin.ssbuttons::lang.shared.order_group'),
            ];
        }

        public static function getPropertyOrder($button, $position, $max) {
            return [
                'title'             => Lang::get('martin.ssbuttons::lang.settings.'.$button),
                'description'       => Lang::get('martin.ssbuttons::lang.shared.order_descr'),
                'default'           => $position,
                'type'              => 'string',
                'showExternalParam' => false,
                'group'             => Lang::get('martin.ssbuttons::lang.shared.order_group'),
                'validation'        => [
                    'integer' => [
                        'message' => Lang::get('martin.ssbuttons::lang.shared.order_valid'),
                        'min'     => ['value' => 1],
                        'max'     => ['value' => $max]
                    ]
                ]
            ];
        }

        public static function customSortButtons($properties) {
            foreach($properties as $prop => $value) {
                $is = explode('_', $prop);
                if($is[0] != 'order') { continue; }
                $order[$is[1]] = $value;
            }
            asort($order);
            return array_keys($order);
        }

    }

?>