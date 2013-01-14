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

switch (isset($_GET["section"])?$_GET["section"]:"") {

	case 'hooks':
		$smarty->assign('section_hook',true);
		$smarty->assign('section_hook_functions',false);
	break;	

	case 'hook-functions':
		$smarty->assign('section_hook',false);	
		$smarty->assign('section_hook_functions',true);
	break;	

	default:
		# code...
	break;
}

