<?php

    namespace Martin\SSButtons\Classes;

    use Lang;
    use Martin\SSButtons\Classes\ButtonsParameters as Buttons;

    trait Shared {

        public function onRunShared() {

            # LOAD FA CSS
            if($this->property('fa') == 'maxcdn') {
                $this->addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
            }

            # GET BUTTONS PARAMETERS
            $title = $this->property('js') ? '___title___' : $this->page->title;
            $url   = $this->property('js') ? '___url___'   : url($this->currentPageUrl());
            $this->properties['buttons_parameters'] = Buttons::getParameters($title, $url);

            # GET BUTTONS ORDER
            if($this->property('custom_order')) {
                $props = $this->getProperties();
                $order = $this->customSortButtons($props);
            } else {
                $order = $this->defaultSort;
            }

            # SET BUTTONS ORDER
            $this->properties['buttons_order'] = $order;

        }

        public function definePropertiesShared() {

            # BUTTONS FOR THIS COMPONENT
            $buttons = $this->defaultSort;

            # LOAD FA
            $properties['fa'] = $this->getPropertyFA();

            # USE JS
            $properties['js'] = $this->getPropertyJS();

            # SHOW / HIDE BUTTONS
            foreach($buttons as $button) {
                $properties[$button] = $this->getPropertyButtons($button);
            }

            # ENABLE CUSTOM ORDER
            $properties['custom_order'] = $this->getPropertyCustomOrder();

            # BUTTONS CUSTOM ORDER
            $i = 1;
            foreach($buttons as $button) {
                $properties['order_' . $button] = $this->getPropertyOrder($button, $i++, count($buttons));
            }

            return $properties;

        }

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

        public static function getPropertyJS() {
            return [
                'title'             => Lang::get('martin.ssbuttons::lang.shared.js_title'),
                'description'       => Lang::get('martin.ssbuttons::lang.shared.js_descr'),
                'type'              => 'checkbox',
                'default'           => false,
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