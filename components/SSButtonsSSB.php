<?php

    namespace Martin\SSButtons\Components;

    use Cms\Classes\ComponentBase;
    use Cms\Classes\Page;
    use Lang;

    class SSButtonsSSB extends ComponentBase {

        public function componentDetails() {
            return [
                'name'        => 'martin.ssbuttons::lang.components.ssbuttonsssb.name',
                'description' => 'martin.ssbuttons::lang.components.ssbuttonsssb.description'
            ];
        }

        public function onRun() {
            $this->addCss('/plugins/martin/ssbuttons/assets/css/social-sharing-ssb.css');
        }
        
        public function onRender() {
            $this->page['type'] = (strpos($this->properties['theme'], 'svg') ? 'svg' : 'png');
        }        

        public function defineProperties() {

            $buttons = ['facebook', 'twitter', 'google+', 'tumblr', 'pinterest', 'pocket', 'reddit', 'linkedin', 'wordpress', 'pinboard', 'email'];

            foreach($buttons as $button) {
                $properties[$button] = [
                    'title'             => Lang::get('martin.ssbuttons::lang.settings.'.$button),
                    'description'       => 'Display ' . Lang::get('martin.ssbuttons::lang.settings.'.$button) . ' button',
                    'default'           => true,
                    'type'              => 'checkbox',
                    'showExternalParam' => false
                ];
            }
            $properties['theme'] = [
                'title'             => 'Icons theme',
                'type'              => 'dropdown',
                'default'           => 'flat_web_icon_set_color',
                'placeholder'       => 'Select icons theme',
                'options'           => [
                    'flat_web_icon_set_color'       => 'Flat Web Icon Set - Color',
                    'flat_web_icon_set_black'       => 'Flat Web Icon Set - Black',
                    'flat_web_icon_set_inverted'    => 'Flat Web Icon Set - Inverted',
                    'social_flat_rounded_rects_svg' => 'Social Flat Rounded Rects SVG',
                    'simple_icons'                  => 'Simple Icons',
                    'simple_icons_black'            => 'Simple Icons - Black',
                ],
                'showExternalParam' => false
            ];
            return $properties;
        }

    }

?>
