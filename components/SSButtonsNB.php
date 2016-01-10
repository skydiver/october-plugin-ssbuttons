<?php

    namespace Martin\SSButtons\Components;

    use Cms\Classes\ComponentBase;
    use Cms\Classes\Page;
    use Lang;

    class SSButtonsNB extends ComponentBase {

        public function componentDetails() {
            return [
                'name'        => 'martin.ssbuttons::lang.components.ssbuttonsnb.name',
                'description' => 'martin.ssbuttons::lang.components.ssbuttonsnb.description'
            ];
        }

        public function onRun() {
            if($this->properties['fa'] == 'maxcdn') {
                $this->addCss('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
            }
            $this->addCss('/plugins/martin/ssbuttons/assets/css/social-sharing-nb.css');
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
            $properties['fa'] = [
                'title'             => 'Load Font Awesome?',
                'type'              => 'dropdown',
                'default'           => 'maxcdn',
                'placeholder'       => 'Select source',
                'options'           => ['maxcdn' => 'Yes, from MaxCDN', 'no' => 'No'],
                'showExternalParam' => false
            ];
            return $properties;
        }

    }

?>