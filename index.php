<?php
/*
        __                        ________        
_____ _/  |_  _____   ____   ____ \_____  \______ 
\__  \    __\/     \ /  _ \ /    \  _(__  <_  __ \
 / __ \|  | |  Y Y  (  <_> )   |  \/       \  | \/
(____  /__| |__|_|  /\____/|___|  /______  /__|   
     \/           \/            \/       \/    

Website:  http://atmoner.com/
Contact:  contact@atmoner.com     
Twitter:  @atmon3r 
Fix1 && Fix1
          
*/




$path = dirname(__FILE__); 

require($path.'/libs/startup.php');
 
$smarty->assign("Name","First app",true);

// Hook assign
$hook->addMenu('home', 'Home', '/', 4);
$hook->addMenu('documentation', 'Documentation', '?p=documentation', 6, 
				array(
					'hooks' => array(
						'title' => 'Hooks', 
						'url' => '?p=documentation&section=hooks'
					),
					'hooks_functions' => array(
						'title' => 'Hooks functions', 
						'url' => '?p=documentation&section=hook-functions'
					)					
				));

$hook->addMainsidebar('main_links', 'Main links', '/', 5);
$hook->addMainsidebar('other_links', 'Other links', '/', 6);

$hook->addCss('bootstrap','bootstrap.css',5);
$hook->addCss('style','style.css',6);
$hook->addCss('bootstrap-responsive','bootstrap-responsive.css',7);

$hook->addJs('jquerymin','http://code.jquery.com/jquery-1.8.3.min.js',5);
$hook->addJs('bootstrap','bootstrap.js',6);

if ($hook->hook_exist('action'))  
		$hook->execute_hook('action'); 

switch (isset($_GET["p"])?$_GET["p"]:"") {

	case 'admin':
		require($path.'/pages/admin.main.php');
		$smarty->display('admin.main.html');
	break;

	case 'documentation':
		require($path.'/pages/doc.php');
		$smarty->display('doc.html');
	break;
		
    case '':  
    case 'home': 
		require($path.'/pages/main.php');
		$smarty->display('index.html');
	break;

    default:
		if ($hook->hook_exist('new_page'))  
				$hook->execute_hook('new_page'); 
		else 
			die('404');
    break;	
}

