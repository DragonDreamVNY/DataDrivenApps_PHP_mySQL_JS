<?php


//set some application settings
$bootstrap=TRUE; //use a bootstrap template
$loggedin=TRUE;  //is a user logged in

if($loggedin){  //user is logged in
	include("models/model01.php");  //the model represents all of the data in our application
	if($bootstrap){
		include("views/view1.php"); //use the bootstrap template for user logged in
	}
	else{
		include("views/view1_no_CSS.php"); //use the plain HTML template
	}
}
else{//user is not logged in
	include("models/model00.php");  //the model represents all of the data in our application
	if($bootstrap){
		include("views/view0.php"); //use the bootstrap template for user NOT logged in
	}
	else{
		include("views/view0_no_CSS.php"); //use the plain HTML template
	}
}

?>
