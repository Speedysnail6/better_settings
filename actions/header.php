<?php
$headerbackground = $_POST['headerbackground'];
$headerbackgroundcolor = $_POST['headerbackgroundcolor'];
elgg_set_plugin_setting('headerbackground', $headerbackground, 'better_settings');
elgg_set_plugin_setting('headerbackgroundcolor', $headerbackgroundcolor, 'better_settings');
system_message(sprintf(elgg_echo("better_settings:settings:success")));