<?php
function better_settings_init() {
	    elgg_register_admin_menu_item('configure', 'header', 'appearance');
            $base = elgg_get_plugins_path() . 'better_settings/actions/header.php';
            elgg_register_action("better_settings/header", $base, 'admin');
            elgg_register_js('jscolor', 'mod/better_settings/vendor/jscolor/jscolor.js');
            elgg_extend_view('css/elgg', 'better_settings/css');
}
 
elgg_register_event_handler('init', 'system', 'better_settings_init');
?>