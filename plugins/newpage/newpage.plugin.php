<?php

/*
Plugin Name: Add new page
Plugin URI: http://code.google.com/p/phphooks/source/browse/trunk/plugins/plugin1.plugin.php
Description: This plugin add new page called <a href="?p=newpage" target="_BLANK">newpage</a>, he added the link in the header menu and sidebar
Version: 1.0
Author: Atmoner
Author URI: http://atmoner.com/
*/


//set plugin id as file name of plugin
$plugin_id = basename(__FILE__);

//some plugin data
$data['name'] = "Add new page";
$data['author'] = "Atmoner";
$data['url'] = "http://atmoner.com/";

//register plugin data
register_plugin($plugin_id, $data);

//plugin function
function addMenu_plugin() {
	global $hook;
	$hook->addMenu('newpage', 'My new page', '?p=newpage', 8); 
}

add_hook('action','addMenu_plugin');

function plugin1_testfunc() {
	global $hook;
	$hook->add_page('newpage','newpage');
}

// add hook, where to execute a function
add_hook('new_page','plugin1_testfunc');
 

