<?php
function better_settings_init() {
	    elgg_register_admin_menu_item('configure', 'header', 'appearance');
	    elgg_register_admin_menu_item('configure', 'header', 'content');
            elgg_register_menu_item('admin_footer', array(
               'name' => 'better_settings',
               'text' => elgg_echo('admin:footer:better_settings'),
              'href' => 'http://community.elgg.org/pages/view/1370922/better-settings',
              ));
            $base = elgg_get_plugins_path() . 'better_settings/actions/header.php';
            elgg_register_action("better_settings/header", $base, 'admin');
            elgg_register_js('jscolor', 'mod/better_settings/vendor/jscolor/jscolor.js');
            elgg_extend_view('css/elgg', 'better_settings/css');
}
 
elgg_register_event_handler('init', 'system', 'better_settings_init');
?>