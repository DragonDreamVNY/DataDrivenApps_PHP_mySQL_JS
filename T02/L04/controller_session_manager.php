<?php
//includes
include("CONFIG/config.php");  //include the application configuration settings


//============================
//Start/join a session
session_start();  //this must come BEFORE the <HTML> tag

//set up a session variable to count the page views if the user loggedin variable is set
if(isset($_SESSION['loggedin'])){
	$msg='You are still Logged In';
	if(isset($_SESSION['views']))
		$_SESSION['views']++;
	else
		$_SESSION['views'] = 1;
}
else{
	$msg='NOT Logged In';
}

// Logout methods:

//has the logout1 button been pressed
if(isset($_POST['logout1']))
{
	if(isset($_SESSION['loggedin'])) unset($_SESSION['loggedin']);
	$msg="Logout Method 1 - Kills a specific session variable (‘loggedin’). Other session variable ('views') remains available. The session is not destroyed.The client machine cookie in which the session ID is stored is not killed.";
}

//has the logout2 button been pressed
if(isset($_POST['logout2']))
{
	session_destroy();  
	/*
	*	session_destroy() 
	*	destroys all of the data associated with the current session. 
	*	It does not unset any of the global variables associated with the session, 
	*	or unset the session cookie. To use the session variables again, 
	*	session_start() has to be called
	*/
	$msg="Logout Method 2 - Kills ALL the session variables.Kills the session.Does not kill the session ID COOKIE on the client machine.";
}

//has the logout3 button been pressed
if(isset($_POST['logout3']))
{
	
	
	$_SESSION = array(); // Unset all of the session variables.
	session_destroy();  //session_destroy() destroys all of the data associated with the current session. It does not unset any of the global variables associated with the session, or unset the session cookie.
	
	// If it's desired to kill the session, also delete the session cookie.
	// Note: This will destroy the session, and not just the session data!
	if (ini_get("session.use_cookies")) { //checks ini server to see what it assigns to sessionID,
        $params = session_get_cookie_params(); 
        setcookie(session_name(), '', time() - 42000, // then kills the value called session_name
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]);
	} //end kill session
	

	$msg="Logout Method 3 - Kills the session. Kills ALL the session variables.Kills the COOKIE on the client machine containing the session ID.";
}

//Has the login button been pressed?
if(isset($_POST['login']))
{ //later include check against database 
	$_SESSION['loggedin']=1;
	$msg='You have just Logged In for the first time';
}



	
//DISPLAY the COOKIE Status and the FORM again
include("MODELS/model_ex02.php"); 
include("VIEWS/view_ex02.php");

?>