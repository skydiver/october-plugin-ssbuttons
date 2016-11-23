<?php

    namespace Martin\SSButtons\Components;

    use Lang;
    use Cms\Classes\ComponentBase;
    use Cms\Classes\Page;
    use Martin\SSButtons\Classes\ButtonsParameters as Buttons;
    use Martin\SSButtons\Classes\Shared;

    class SSButtons extends ComponentBase {

        public $defaultSort = ['twitter', 'facebook', 'google+', 'stumbleupon', 'linkedin'];

        public function componentDetails() {
            return [
                'name'        => 'martin.ssbuttons::lang.components.ssbuttons.name',
                'description' => 'martin.ssbuttons::lang.components.ssbuttons.description'
            ];
        }

        public function onRun() {

            # LOAD FA CSS
            if($this->properties['fa'] == 'maxcdn') {
                $this->addCss('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
            }

            # LOAD CUSTOM CSS
            $this->addCss('/plugins/martin/ssbuttons/assets/css/social-sharing.css');

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

        public function defineProperties() {

            # BUTTONS FOR THIS COMPONENT
            $buttons = $this->defaultSort;

            # LOAD FA
            $properties['fa'] = Shared::getPropertyFA();

            # SHOW / HIDE BUTTONS
            foreach($buttons as $button) {
                $properties[$button] = Shared::getPropertyButtons($button);
            }

            # ENABLE CUSTOM ORDER
            $properties['custom_order'] = Shared::getPropertyCustomOrder();

            # BUTTONS CUSTOM ORDER
            $i = 1;
            foreach($buttons as $button) {
                $properties['order_' . $button] = Shared::getPropertyOrder($button, $i++);
            }

            return $properties;

        }

    }

?>