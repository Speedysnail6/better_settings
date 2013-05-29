<script type="text/javascript" src="<?php echo elgg_get_site_url(); ?>mod/better_settings/vendor/jscolor/jscolor.js"></script>
Header background:
<form method="POST" action="<?php echo elgg_get_site_url(); ?>action/better_settings/header">
<?php
$plugin = elgg_get_plugin_from_id('better_settings');
$ts = time();
$token = generate_action_token($ts);
?>
<?php echo elgg_view('input/hidden', array('name' => '__elgg_token', 'value' => $token)); ?>
<?php echo elgg_view('input/hidden', array('name' => '__elgg_ts', 'value' => $ts)); ?>
<?php
$headerbackground = elgg_get_plugin_setting('headerbackground', 'better_settings');
$headerbackgroundcolor = elgg_get_plugin_setting('headerbackgroundcolor', 'better_settings');
echo elgg_view('input/dropdown',array(

'name' => 'headerbackground', 

'options_values'=> array( '0' => 'Leave it alone', '1'=>'Color','2'=>'Image'),

'value'=> $headerbackground));
echo "<br>Header background color:";
echo elgg_view('input/text', array(

    'name'  => 'headerbackgroundcolor',
    
    'class' => 'color',
    
    'style' => 'width: 100px;',

    'value' => $headerbackgroundcolor,

));
?>
<br>
<?php
echo elgg_view('input/submit', array('value' => elgg_echo("save")));
?>