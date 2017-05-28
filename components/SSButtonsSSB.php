<?php

    namespace Martin\SSButtons\Components;

    use Lang;
    use Cms\Classes\ComponentBase;

    class SSButtonsSSB extends ComponentBase {

        use \Martin\SSButtons\Classes\Shared;

        public $defaultSort = ['facebook', 'twitter', 'google+', 'tumblr', 'pinterest', 'pocket', 'reddit', 'linkedin', 'wordpress', 'pinboard', 'email'];

        public function componentDetails() {
            return [
                'name'        => 'martin.ssbuttons::lang.components.ssbuttonsssb.name',
                'description' => 'martin.ssbuttons::lang.components.ssbuttonsssb.description'
            ];
        }

        public function onRun() {

            # LOAD SHARED "onRun"
            $this->onRunShared();

            # LOAD COMPONENT CUSTOM CSS
            $this->addCss('/plugins/martin/ssbuttons/assets/css/social-sharing-ssb.css');

        }

        public function onRender() {
            # ICONS TYPE
            $this->page['type'] = (strpos($this->properties['theme'], 'svg') ? 'svg' : 'png');
        }

        public function defineProperties() {

            # GET SHARED PROPERTIES
            $properties = $this->definePropertiesShared();
            
            # REMOVE FA ON THIS COMPONENT
            unset($properties['fa']);

            # THEME
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
