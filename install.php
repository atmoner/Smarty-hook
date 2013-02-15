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
Twitter:  @atmon3r 
Facebook: http://www.facebook.com/atmoner
Date:     13/02/2013
fix1
          
*/ 

session_start(); ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - PHP Plugins System Solution &rsaquo; <?php
	echo $title;
	?></title>
<meta name="keywords" content="php,hook,plugin" />
<link rel='stylesheet' href='themes/css/install.css' type='text/css' /> 
</head>
<body>
<div id="dcpage">
<div id="header">
	<a href="install.php"> <h1>SMARTY HOOKS - Plugin system solution</h1></a>
</div>
<br /><br />
 
<?php 

	$path = dirname(__FILE__);

	if (empty($_GET["step"])) {
	    echo "<div class='section_box'>Welcome to the installation of SMARTY HOOKS.<br />
	To install this scirpt, you must have:<br /><br />
	- server Web (<a href='http://en.wikipedia.org/wiki/Web_server' target='_BLANK'>more info</a>)<br />
	- server Mysql (<a href='http://en.wikipedia.org/wiki/MySQL' target='_BLANK'>more info</a>)</div><br /><br />
	
	<a href=\"install.php?step=1\" class=\"button\">Start installation</a>  <br />
	";
	} 
 
	function executeQueryFile($filesql) {
		$query = file_get_contents($filesql);
		$array = explode(";\n", $query);
		$b = true;
		for ($i=0; $i < count($array) ; $i++) {
			$str = $array[$i];
			if ($str != '') {
			     $str .= ';';
			     $b &= mysql_query($str);	
			}	
		}	
		return $b;
	}
 
 
	function is__writable($path) {
	  $i = 0;
	  $error = "";
	  while($i < count($path)){
		if (is_writable($path[$i])) 
		  echo '- '.$path[$i].' -> <img src="themes/img/ok.png"> <font color="green">The file is writable</font><br />';
		else {
		  echo '- '.$path[$i].' -> <img src="themes/img/no.png"> <font color="red">The file is not writable</font><br />';
		  $error .= "1";
		}
		$i++;
	  }
	  if(empty($error))
	      return true;
	  else
	      return false;
	}		
	function redirect($location){
		header("location:".$location);
	}	
 
 

if ($_GET["step"] == "1") {
    
    echo " <div class='section_box'>Check chmod:<br /><br />";
    $error = "1";
    $path = 'upload';
    echo "<b><u>Folders:</u></b><br />\n";
    $path_check = array('cache', 'cache/compile_tpl','libs/db.php' );
    if (is__writable($path_check)){
      echo "</div><br /><a href=\"install.php?step=2\" class=\"button\">Step 2</a>\n";
      $_SESSION['step_one'] = 'ok';
    }
    else 
      echo "</div><br /><a href=\"install.php?step=1\" class=\"button\">Permissions test</a>\n";
     
} 

if ($_GET["step"] == "2") {
 
if (empty($_GET["action"])) { ?>
 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?step=2&action=test" id="mail" method="post">

	<table cellpadding="2">
		<tr>
			<td>Hostname</td>
			<td><input type="text" name="hostname" id="hostname" value="" size="30" tabindex="1" /></td>
			<td>(usually "localhost")</td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" id="username" value="" size="30" tabindex="2" /></td>
			<td></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" id="password" value="" size="30" tabindex="3" /></td>
			<td></td>
		</tr>
		<tr>
			<td>Database</td>
			<td><input type="text" name="database" id="database" value="" size="30" tabindex="4" /></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" id="submit" value="Test Connection" tabindex="5" class="button"/></td>
			<td></td>
		</tr>
	</table>

</form>

<?php }
if (!empty($_GET["action"]) and $_GET["action"] == "test") {
	$hostname = trim(htmlentities($_POST['hostname']));
	$username = trim(htmlentities($_POST['username']));
	$password = trim(htmlentities($_POST['password']));
	$database = trim(htmlentities($_POST['database']));

	$link = mysql_connect($hostname,$username,$password);
		if (!$link || empty($hostname)) {
			echo "<img src=\"themes/img/no.png\"> Could not connect to the server \n";
        		echo mysql_error();
		} else 
			echo "<img src=\"themes/img/ok.png\"> Successfully connected to the server <br />\n";
 
		if ($link && !$database) {
		echo "<br /><br /><img src=\"themes/img/no.png\"> No database name was given. <br />Available databases:</p>\n";
		$db_list = mysql_list_dbs($link);
		echo "<pre>\n";
		while ($row = mysql_fetch_array($db_list)) {
     		echo $row['Database'] . "\n";
		}
		echo "</pre>\n";
	}
		if ($database) {
    $dbcheck = mysql_select_db("$database");
		if (!$dbcheck) {
        	echo "<img src=\"lib/icons/no.png\"> ".mysql_error();
		}else{
			echo "<img src=\"themes/img/ok.png\"> Successfully connected to the database '" . $database . "' \n<br /><br />";
			echo "<form action=\"install.php?step=2&action=w\" id=\"mail\" method=\"post\">\n";
			echo "<input type=\"hidden\" name=\"hostname\" value=\"".$hostname."\">\n";
			echo "<input type=\"hidden\" name=\"username\" value=\"".$username."\">\n";
			echo "<input type=\"hidden\" name=\"password\" value=\"".$password."\">\n";
			echo "<input type=\"hidden\" name=\"database\" value=\"".$database."\">\n";
			echo "<input type=\"submit\" id=\"submit\" value=\"Install database !\" tabindex=\"5\" />\n";
			echo "</form>\n";
			}
		}
	
}

    if (!empty($_GET["action"]) and $_GET["action"] == "w") {
      if (is_writable($path."/libs/db.php"))
      
         {
         $fd = fopen($path."/libs/db.php", "w+");
         $foutput = "<?php\n";
         $foutput.= "// Generate the ".date("j F, Y, h-i-s")."\n";
         $foutput.= "// For Smarty hook\n";
         $foutput.= "\$host = \"".$_POST["hostname"]."\";\n";
         $foutput.= "\$user = \"".$_POST["username"]."\";\n";
         $foutput.= "\$pass = \"".$_POST["password"]."\";\n";
         $foutput.= "\$db = \"".$_POST["database"]."\";\n";
         $foutput.= "// Please ! manipulate this file if you know what you made​​!\n";
         $foutput.= "";
         fwrite($fd,$foutput);
         fclose($fd); 
         }
         
    	require($path.'/libs/startup.php');
	executeQueryFile($path."/libs/db.sql");

        // Install OK :) 
	$_SESSION['step_two'] = 'ok';
	redirect("install.php?step=3");
       } 
}

    if ($_GET["step"] == "3") {
	if(empty($_SESSION['step_two']))
	    header('Location: install.php?step=2');
	else{
	    echo "Your install is ok ! <br />";        
	    echo "Thinks to: <br /><br />";
	    echo "- remove install.php of your ftp <br />";
	    echo "- remove inc/db.sql <br />";	    
	    echo "- chmod 644 inc/db.php";

	    
	    echo "<br /><br /><a href=\"/\" target=\"_blank\" class=\"button\">Go to your website</a>";
        }
    }

?>
 
 		<br /><br /><br />
 
 
</div>
</body>
</html>
