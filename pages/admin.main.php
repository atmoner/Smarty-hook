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



$sub=(isset($_GET["sub"])?$_GET["sub"]:"");

if (!empty($sub)) {

	
} else {


	function getPlugins($where,$value){	
		$sql = "SELECT filename, action FROM plugins";
		if($where === 'action')
		$sql .= " WHERE action = '$value' ";
		if($where === 'filename')
		$sql .= " WHERE filename = '$value' ";
 
		$items = mysql_query($sql) or die("Database Error: ".mysql_error());
		//Populate the array
		while ($obj = mysql_fetch_object($items)) {
        		$array[$obj->filename]['filename'] = $obj->filename;
        		$array[$obj->filename]['action'] = $obj->action;
	        }
 
		return $array;
	}



switch ($_GET ['action']) {
	case "deactivate" :
		$data ['action'] = 0;
		$db->query_update ( "plugins", $data, "filename='" . $_GET['filename'] . "'" );
		header("Location: ?p=admin");
		break;
	case "activate" :
		$sql = "SELECT * FROM " . $table_prefix . "plugins WHERE filename = '" . $db->escape ( $_GET['filename'] ) . "'";
		$count = count ( $db->fetch_all_array ( $sql ) );
		if ($count < 1) {
			$data['filename'] = $_GET['filename'];
			$data['action'] = 1;
			$db->query_insert("plugins", $data);
		} else {
			$data ['action'] = 1;
			$db->query_update("plugins", $data, "filename='" . $_GET['filename'] . "'");
			header("Location: ?p=admin");
		}
		break;
}
 
 
$smarty->assign("language",$language);
$plugin_list = new phphooks();
$plugin_headers = $plugin_list->get_plugins_header();

$api=array();
$i=0;

 
  foreach ($plugin_headers as $tid=>$plugin_header) { 
			$action = false;		
	foreach ( getPlugins() as $result_row )  
		if ($plugin_header['filename'] == $result_row['filename'] && $result_row['action'] == 1)
			$action = true;
 
		if ($action)
			$api[$i]["active"]="class='active'";
			else
			$api[$i]["active"]="";
		// Name
		$api[$i]["Name"]=$plugin_header['Name'];
		$api[$i]["Version"]=$plugin_header['Version'];
		$api[$i]["Description"]=$plugin_header['Description'];
		$api[$i]["AuthorURI"]=$plugin_header['AuthorURI'];
		$api[$i]["Author"]=$plugin_header['Author'];
		if ($action) {
			$api[$i]["linkAdd"]='<a href="?p=admin&action=deactivate&filename=' . $plugin_header['filename'] . '" title="'.$language["DEACTIVATE_PLUGIN"].'">DEACTIVATE</a>';
			$api[$i]["Use"]='Use it !';
			} else {
			$api[$i]["linkAdd"]='<a href="?p=admin&action=activate&filename=' . $plugin_header['filename'] . '" title="'.$language["ACTIVATE_PLUGIN"].'"> ACTIVATE </a>';
			$api[$i]["Use"]='';			 
   		}
   
  $i++;   
  } 
$smarty->assign("api",$api);  
 }
