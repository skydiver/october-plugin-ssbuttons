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
            $this->addCss('/plugins/martin/ssbuttons/assets/css/social-sharing.css');
        }

        public function defineProperties() {
            $buttons = ['twitter', 'facebook', 'google+', 'stumbleupon', 'linkedin'];
            foreach($buttons as $button) {
                $properties[$button] = [
                    'title'             => Lang::get('martin.ssbuttons::lang.settings.'.$button),
                    'description'       => 'Display ' . Lang::get('martin.ssbuttons::lang.settings.'.$button) . ' button',
                    'default'           => true,
                    'type'              => 'checkbox',
                    'showExternalParam' => false
                ];
            }
            return $properties;
        }

    }

?>