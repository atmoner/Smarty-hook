<?php

/*
Plugin Name: Remove doc link
Plugin URI: http://your-url.com/your-plugin.html
Description: This plugin remove doc link 
Version: 1.0
Author: Atmoner
Author URI: http://atmoner.com/
*/


//set plugin id as file name of plugin
$plugin_id = basename(__FILE__);

//some plugin data
$data['name'] = "Remove doc link";
$data['author'] = "Atmoner";
$data['url'] = "http://atmoner.com/";

//register plugin data
register_plugin($plugin_id, $data);

function removeHeaderlink() {
	global $hook;
	$hook->remove_addMenu('documentation');
}

// add hook, where to execute a function
add_hook('action','removeHeaderlink');
