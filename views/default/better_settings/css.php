<?php
$headerbackground = elgg_get_plugin_setting('headerbackground', 'better_settings');
$headerbackgroundcolor = elgg_get_plugin_setting('headerbackgroundcolor', 'better_settings');
?>
/***** PAGE HEADER ******/
.elgg-page-header {
	<?php
	if ( $headerbackground = '2' ) {
	echo 'background-color: #' . $headerbackgroundcolor . ';';
	}
	?>
}
