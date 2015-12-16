<?php

    namespace Martin\SSButtons\Models;

    use Model;
    use Lang;

    class Settings extends Model {

        use \October\Rain\Database\Traits\Validation;

        public $rules = [];

        public $attributeNames;
        public $implement      = ['System.Behaviors.SettingsModel'];
        public $settingsCode   = 'martin_ssbuttons_settings';
        public $settingsFields = 'fields.yaml';

        public function __construct() {
            $this->attributeNames = [
                'twitter'     => Lang::get('martin.ssbuttons::lang.settings.twitter'),
                'facebook'    => Lang::get('martin.ssbuttons::lang.settings.facebook'),
                'google+'     => Lang::get('martin.ssbuttons::lang.settings.Google+'),
                'stumbleupon' => Lang::get('martin.ssbuttons::lang.settings.stumbleupon'),
                'linkedin'    => Lang::get('martin.ssbuttons::lang.settings.linkedin'),
            ];
            parent::__construct();
        }

    }

?>