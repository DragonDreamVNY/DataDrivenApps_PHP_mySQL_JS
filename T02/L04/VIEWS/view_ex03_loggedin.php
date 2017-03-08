<?php 
//this is a session protected page
include_once('../CONFIG/session_page_restrict.php');	
?>
<!DOCTYPE html>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html;" charset="UTF-8">
<html>
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo __CSS;?>">
</head>
<body>
<!----------------- HEADER SECTION ----------------------->
<!--====================================================-->
<header>
<h2><?php echo $pageHeading; ?></h2>
</header>
<?php

//----------------NAVIGATION SECTION----------------------//
//========================================================//
echo '<nav>';
echo "<h3>NAV SECTION</h3>";
echo $contentStringNAV;
echo "</nav>";

//----------------MAIN SECTION----------------------------//
//========================================================//
echo "<section>";
?>

<h2>Welcome</h2>
<p>Welcome<?php echo ' '.$_SESSION['firstName'].' ';?>to your PRIVATE home page. From here you can access parts of the website that are restricted to logged on users only.  </p>




<!--Form-->
<div>
<form  class="button" method="post" action="controller_login_manager.php">
<input name="logout3" type="submit" id="logout3" value="Logout">
</form>
</div>

</section>

<?php
//----------------RHS SECTION-----------------------------//
//========================================================//
echo '<section class="right">';
echo "<h3>LOGIN STATUS</h3>";
echo $contentStringRHS;  //display the current values of the cookies
echo '</section>';
?>





<?php
//----------------FOOTER section--------------------------//
//========================================================//

//warn DEBUG  mode is on
if (__DEBUG==1) 
	{	
	
	echo '<footer class="debug">';
	echo '<h3>DEBUG</h3>';
	
	echo '<h4>$_COOKIE Array</h4>';
	foreach($_COOKIE as $key=>$value){
		echo '$_COOKIE[\''.$key."'] = ".$value.'</br>';
	}
	
	echo '<h4>$_SESSION Array</h4>';
	foreach($_SESSION as $key=>$value){
		echo '$_SESSION[\''.$key."'] = ".$value.'</br>';
	}
	
	echo '<h4>$_POST Array</h4>';
	foreach($_POST as $key=>$value){
		echo '$_POST[\''.$key."'] = ".$value.'</br>';
	}
	
	echo "</footer>";


	}
	else
	{
	echo '<footer class="copyright">';
	echo 'Copyright 2017 Gerry Guinane';
	echo "</footer>";
	}


?>

</body>
<head>
<!--Cache Control-->
	<meta http-equiv="cache-control" content="no-cache,no-store,must-revalidate">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content=“-1">
</head>
</html>



















 



