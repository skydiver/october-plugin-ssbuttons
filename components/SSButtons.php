<?php

    namespace Martin\SSButtons\Components;

    use Lang;
    use Cms\Classes\ComponentBase;

    class SSButtons extends ComponentBase {

        use \Martin\SSButtons\Classes\Shared;
        
        public $defaultSort = ['twitter', 'facebook', 'google+', 'stumbleupon', 'linkedin'];

        public function componentDetails() {
            return [
                'name'        => 'martin.ssbuttons::lang.components.ssbuttons.name',
                'description' => 'martin.ssbuttons::lang.components.ssbuttons.description'
            ];
        }

        public function onRun() {

            # LOAD SHARED "onRun"
            $this->onRunShared();
            
            # LOAD COMPONENT CUSTOM CSS
            $this->addCss('/plugins/martin/ssbuttons/assets/css/social-sharing.css');

        }

        public function defineProperties() {
            # RETURN SHARED PROPERTIES
            return $this->definePropertiesShared();
        }

    }

?>