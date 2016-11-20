<?php

    namespace Martin\SSButtons\Components;

    use Cms\Classes\ComponentBase;
    use Cms\Classes\Page;
    use Lang;

    class SSButtons extends ComponentBase {

        public function componentDetails() {
            return [
                'name'        => 'martin.ssbuttons::lang.components.ssbuttons.name',
                'description' => 'martin.ssbuttons::lang.components.ssbuttons.description'
            ];
        }

        public function onRun() {
            if($this->properties['fa'] == 'maxcdn') {
                $this->addCss('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
            }
            $this->addCss('/plugins/martin/ssbuttons/assets/css/social-sharing.css');
            $this->properties['buttons_parameters'] = $this->buttonsParameters();
            $this->properties['buttons_order'] = ($this->properties['custom_order']) ? $this->customSortButtons() : $this->defaultSortButtons();
        }

        public function defineProperties() {

            $properties['fa'] = [
                'title'             => 'Load Font Awesome?',
                'type'              => 'dropdown',
                'default'           => 'maxcdn',
                'placeholder'       => 'Select source',
                'options'           => ['maxcdn' => 'Yes, from MaxCDN', 'no' => 'No'],
                'showExternalParam' => false
            ];

            $buttons = ['twitter', 'facebook', 'google+', 'stumbleupon', 'linkedin'];
            foreach($buttons as $button) {
                $properties[$button] = [
                    'title'             => Lang::get('martin.ssbuttons::lang.settings.'.$button),
                    'description'       => 'Display ' . Lang::get('martin.ssbuttons::lang.settings.'.$button) . ' button',
                    'default'           => true,
                    'type'              => 'checkbox',
                    'showExternalParam' => false,
                    'group'             => Lang::get('martin.ssbuttons::lang.components.ssbuttons.buttons_group')
                ];
            }

            $properties['custom_order'] = [
                'title'             => Lang::get('martin.ssbuttons::lang.components.ssbuttons.order_custom'),
                'description'       => Lang::get('martin.ssbuttons::lang.components.ssbuttons.order_customd'),
                'default'           => false,
                'type'              => 'checkbox',
                'showExternalParam' => false,
                'group'             => Lang::get('martin.ssbuttons::lang.components.ssbuttons.order_group'),
            ];

            $i = 1;
            foreach($buttons as $button) {
                $properties['order_' . $button] = [
                    'title'             => Lang::get('martin.ssbuttons::lang.settings.'.$button),
                    'description'       => Lang::get('martin.ssbuttons::lang.components.ssbuttons.order_descr'),
                    'default'           => $i++,
                    'type'              => 'string',
                    'showExternalParam' => false,
                    'group'             => Lang::get('martin.ssbuttons::lang.components.ssbuttons.order_group'),
                    'validation'        => [
                        'integer' => [
                            'message' => Lang::get('martin.ssbuttons::lang.components.ssbuttons.order_valid'),
                            'min'     => ['value' => 1],
                            'max'     => ['value' => 5]
                        ]
                    ]
                ];
            }

            return $properties;

        }

        private function buttonsParameters() {
            $parameters = [
                'twitter' => [
                    'href'  => 'http://twitter.com/home?status=' . urlencode($this->page->title . ' | ' . url($this->page->url)),
                    'title' => 'Share on Twitter',
                    'class' => 'btn btn-twitter',
                    'icon'  => 'fa fa-twitter',
                    'label' => 'Twitter',
                ],
                'facebook' => [
                    'href'  => 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode(url($this->page->url)),
                    'title' => 'Share on Facebook',
                    'class' => 'btn btn-facebook',
                    'icon'  => 'fa fa-facebook',
                    'label' => 'Facebook',
                ],
                'google+' => [
                    'href'  => 'https://plus.google.com/share?url=' . urlencode($this->page->title . ' | ' . url($this->page->url)),
                    'title' => 'Share on Google+',
                    'class' => 'btn btn-googleplus',
                    'icon'  => 'fa fa-google',
                    'label' => 'Google+',
                ],
                'stumbleupon' => [
                    'href'  => 'http://www.stumbleupon.com/submit?url=' . urlencode($this->page->title . ' | ' . url($this->page->url)),
                    'title' => 'Share on StumbleUpon',
                    'class' => 'btn btn-stumbleupon',
                    'icon'  => 'fa fa-stumbleupon',
                    'label' => 'Stumbleupon',
                ],
                'linkedin' => [
                    'href'  => 'http://www.linkedin.com/shareArticle?mini=true&url=' . urlencode(url($this->page->url)) . '&title=&summary=' . urlencode($this->page->title),
                    'title' => 'Share on LinkedIn',
                    'class' => 'btn btn-linkedin',
                    'icon'  => 'fa fa-linkedin',
                    'label' => 'LinkedIn',
                ],
            ];
            return $parameters;
        }

        private function defaultSortButtons() {
            return ['twitter', 'facebook', 'google+', 'stumbleupon', 'linkedin'];
        }

        private function customSortButtons() {
            $props = $this->getProperties();
            foreach($props as $prop => $value) {
                $is = explode('_', $prop);
                if($is[0] != 'order') { continue; }
                $order[$is[1]] = $value;
            }
            asort($order);
            return array_keys($order);
        }

    }

?>