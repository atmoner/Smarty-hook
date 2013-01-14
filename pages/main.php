<?php
/*
        __                                      
_____ _/  |_  _____   ____   ____   ___________ 
\__  \    __\/     \ /  _ \ /    \_/ __ \_  __ \
 / __ \|  | |  Y Y  (  <_> )   |  \  ___/|  | \/
(____  /__| |__|_|  /\____/|___|  /\___  >__|   
     \/           \/            \/     \/     

Website:  http://atmoner.com/
Contact:  contact@atmoner.com     
          
*/

 

$code = '
<?php

/*
Plugin Name: My first plugin
Plugin URI: http://your-url.com/your-plugin.html
Description: This is the short description of your plugin
Version: 1.0
Author: Your Name
Author URI: http://www.your-website.com/
*/

//set plugin id as file name of plugin
$plugin_id = basename(__FILE__);

//some plugin data
$data[\'name\'] = "My first plugin";
$data[\'author\'] = "Your Name";
$data[\'url\'] = "http://www.your-website.com/";

//register plugin data
register_plugin($plugin_id, $data);
';

$code2 = '
function add_New_page() {
	global $hook;
	$hook->add_page(\'newpage\',\'newpage\');
}

// add hook, where to execute a function
add_hook(\'new_page\',\'add_New_page\');
';

$code3 = '
function addMenu_plugin() {
	global $hook;
	$hook->addMenu(\'newpage\', \'My new page\', \'?p=newpage\', 8); 
}

add_hook(\'action\',\'addMenu_plugin\');
';

$code4 = '
$hook->set_hooks(
	array(
		\'action\',  
		\'new_page\',
		\'my_new_hook\' // My new hook
	));
';

$code5 = '
if ($hook->hook_exist(\'my_new_hook\'))  
	$hook->execute_hook(\'my_new_hook\'); 
';

$smarty->assign('highlight',htmlspecialchars($code));
$smarty->assign('functionplugin',htmlspecialchars($code2));
$smarty->assign('functionplugin_addlink',htmlspecialchars($code3));
$smarty->assign('addNewHook',htmlspecialchars($code4));
$smarty->assign('testNewHook',htmlspecialchars($code5));
 
