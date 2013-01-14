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

require($path.'/libs/db.php');
require($path.'/libs/Smarty.class.php');
require($path.'/libs/Database.class.php');
require($path.'/libs/Hooks.functions.class.php');
require($path.'/libs/Hooks.class.php');


$smarty  = new Smarty;
$db 	 = new Database($host,$user,$pass,$db);
$hook 	 = new phphooks();
$db->connect();


// Smarty config
$smarty->addPluginsDir($path.'/libs/plugins/');
$smarty->template_dir = $path.'/themes/';
$smarty->compile_dir = $path.'/cache/compile_tpl/';
$smarty->cache_dir = $path.'/cache/';
$smarty->debugging = true;
$smarty->caching = false;
$smarty->cache_lifetime = 0;


$sql = "SELECT filename FROM plugins WHERE action = '" . $db->escape (1) . "'";
$result_rows = $db->fetch_all_array ( $sql );
if($result_rows){
	foreach ( $result_rows as $result_rows )
		$plugins[] = $result_rows ['filename'];
} else
	$plugins ='';
	
$hook->active_plugins = $plugins;
$hook->set_hooks(
			array(
				'action',  
				'new_page' 
			));
$hook->load_plugins();

function add_hook($tag, $function, $priority = 10) {
	global $hook;
	$hook->add_hook($tag, $function, $priority);
}

function register_plugin($plugin_id, $data) {
	global $hook;
	$hook->register_plugin($plugin_id, $data);
}

$smarty->assign('hooks',$hook); // On assigne la sortie des hooks à smarty

