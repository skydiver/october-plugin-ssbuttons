<?php

    namespace Martin\SSButtons;

    use System\Classes\PluginBase;
    use System\Classes\SettingsManager;

    class Plugin extends PluginBase {

        public function pluginDetails() {
            return [
                'name'        => 'martin.ssbuttons::lang.plugin.name',
                'description' => 'martin.ssbuttons::lang.plugin.description',
                'author'      => 'Martin',
                'icon'        => 'icon-share-alt'
            ];
        }

/*
        public function registerSettings() {
            return [
                'settings' => [
                    'label'       => 'martin.ssbuttons::lang.plugin.name',
                    'description' => 'martin.ssbuttons::lang.plugin.description',
                    'icon'        => 'icon-share-alt',
                    'class'       => '\Martin\SSButtons\Models\Settings',
                    'order'       => 1,
                    'permissions' => ['martin.ssbuttons.access'],
                    'category'    => 'system::lang.system.categories.system'
                ],
            ];
        }
*/

        public function registerPermissions() {
            return [
                'martin.ssbuttons.access'  => ['tab' => 'system::lang.permissions.name', 'label' => 'martin.ssbuttons::lang.plugin.permissions'],
            ];
        }

        public function registerComponents() {
            return [
                'Martin\SSButtons\Components\SSButtons'    => 'ssbuttons',
                'Martin\SSButtons\Components\SSButtonsNB'  => 'ssbuttonsnb',
                'Martin\SSButtons\Components\SSButtonsSSB' => 'ssbuttonsssb'
            ];
        }

    }

?>