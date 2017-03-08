<?php
 
//this is a session protected page
include_once('../CONFIG/session_page_restrict.php');	


//this model:
//-gets the user and shortlife cookie values
//-puts them into a string for display in the view

//template values
$title='LOGIN';
$pageHeading='Example 03 - Login using a Database';

//nav section content
$contentStringNAV='<a href="http://php.net/manual/en/book.mysqli.php">MySQLi Manual</a><br>';
$contentStringNAV.= '<h4>Examples</h4>';
$contentStringNAV.= '<a href="controller_main.php">HOME</a><br>';
$contentStringNAV.= '<h4>Restricted</h4>';
$contentStringNAV.= '<a href="controller_transcript_protected.php">TRANSCRIPT</a><br>';
$contentStringNAV.= '<a href="controller_login_manager.php">RELOAD</a><br>';

//main section content:
$contentStringMAIN=$msg;  //$msg comes from the controller

	
//RHS section content
$contentStringRHS='<h4>Login/Session Status</h4>';

if ($_SESSION['loggedin']==1){
	$contentStringRHS.='</br>You are logged in';
	$contentStringRHS.='</br>Nr. of Page Views='.$_SESSION['views'];
	
}
else{
	$contentStringRHS.='</br>You are not logged in';
	$contentStringRHS.='</br>Nr. of login attempts='.$_SESSION['loginAttempts'];
	$contentStringRHS.='</br>Nr. of Page Views='.$_SESSION['views'];
}

//footer section content
$contentStringFOOTER='FOOTER Section String';


?>


</body>
</html>
















 



