<?php
//includes
include("CONFIG/config.php");  //include the application configuration settings
//Start/join a session
session_start();  //this must come BEFORE the <HTML> tag

//variables

$tab="L04";
$msg='';

//views
if (isset($_POST["selectController"])){
	switch ($_POST["selection"]){
		case 'ex1':  //cookie setter/viewer/killer example
		include("MODELS/model_ex01.php"); 
		include("VIEWS/view_ex01.php");
		break;

		case 'ex2':  //sessions
		include("MODELS/model_ex02.php"); 
		include("VIEWS/view_ex02.php");
		break;
	
		case 'ex3':
		if(!$_SESSION['loggedin']){//not logged in
			//display the login form
			include("MODELS/model_ex03.php"); 
			include("VIEWS/view_ex03.php");
		}
		else{//already logged in
			//display the logged in homepage
			$mag='You are already logged in!';
			include("controller_login_manager.php");
		}

		break;

	
		default:
		include("VIEWS/view_home.php");
		
	}
}
else{
	$msg='Choose an example from the drop down menu.';
	$pageHeading="L04 - Cookies,Sessions,Authentication Examples";
	include("VIEWS/view_home.php");
}

?>