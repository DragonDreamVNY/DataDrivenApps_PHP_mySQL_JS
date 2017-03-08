<?php
//this model:
//-gets the user and shortlife cookie values
//-puts them into a string for display in the view

//template values
$title='COOKIES';
$pageHeading='Example 01 - Cookie Setter and Viewer';

//nav section content
$contentStringNAV='NAV Section String';

//main section content:
$contentStringMAIN='';
if (isset($_COOKIE["user"])){  //Check that the cookie value is set
	$contentStringMAIN.= "The <b>user</b> Cookie value is   :  ".$_COOKIE["user"];
	}
	else{$contentStringMAIN.= "The <b>user</b> cookie has expired or has not been set";}
	$contentStringMAIN.='</br>'; 

if (isset($_COOKIE["shortlife"])){  //Check that the cookie value is set
	$contentStringMAIN.= "The <b>shortlife</b> Cookie value is   :".$_COOKIE["shortlife"];
	}
	else{$contentStringMAIN.= "The <b>shortlife</b> cookie has expired or has not been set";}

	
//RHS section content
$contentStringRHS='This example demonstrates some of the features of cookies.';

//footer section content
$contentStringFOOTER='FOOTER Section String';


?>


















 



