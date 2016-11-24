<?php

    namespace Martin\SSButtons\Components;

    use Lang;
    use Cms\Classes\ComponentBase;
    use Cms\Classes\Page;
    use Martin\SSButtons\Classes\ButtonsParameters as Buttons;
    use Martin\SSButtons\Classes\Shared;

    class SSButtonsSSB extends ComponentBase {

        public $defaultSort = ['facebook', 'twitter', 'google+', 'tumblr', 'pinterest', 'pocket', 'reddit', 'linkedin', 'wordpress', 'pinboard', 'email'];

        public function componentDetails() {
            return [
                'name'        => 'martin.ssbuttons::lang.components.ssbuttonsssb.name',
                'description' => 'martin.ssbuttons::lang.components.ssbuttonsssb.description'
            ];
        }

        public function onRun() {

            # LOAD COMPONENT CUSTOM CSS
            $this->addCss('/plugins/martin/ssbuttons/assets/css/social-sharing-ssb.css');

            # GET BUTTONS PARAMETERS
            $title = $this->page->title;
            $url   = url($this->page->url);
            $this->properties['buttons_parameters'] = Buttons::getParameters($title, $url);

            # GET BUTTONS ORDER
            if($this->properties['custom_order']) {
                $props = $this->getProperties();
                $order = Shared::customSortButtons($props);
            } else {
                $order = $this->defaultSort;
            }

            # SET BUTTONS ORDER
            $this->properties['buttons_order'] = $order;

        }

        public function onRender() {
            # ICONS TYPE
            $this->page['type'] = (strpos($this->properties['theme'], 'svg') ? 'svg' : 'png');
        }

        public function defineProperties() {

            # BUTTONS FOR THIS COMPONENT
            $buttons = $this->defaultSort;

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

            # SHOW / HIDE BUTTONS
            foreach($buttons as $button) {
                $properties[$button] = Shared::getPropertyButtons($button);
            }
            # ENABLE CUSTOM ORDER
            $properties['custom_order'] = Shared::getPropertyCustomOrder();

            # BUTTONS CUSTOM ORDER
            $i = 1;
            foreach($buttons as $button) {
                $properties['order_' . $button] = Shared::getPropertyOrder($button, $i++, count($buttons));
            }

            return $properties;

        }

    }

?>
