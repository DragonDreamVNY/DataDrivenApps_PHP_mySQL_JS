<!DOCTYPE html>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html;" charset="UTF-8">
<html>
<head>
<title><?php echo $tab; ?></title>
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

<!--Form-->
<form class="login" method="post" action="controller_login_manager.php">
	<div>
		<h2>Lecturer Login Form</h2>
		<table class="form">
		<tr><td>
		<label>
		<span>Lecturer ID</span><input name="lectID" type="text" >
		<span>Password</span><input name="lectPass" type="password" >
		</label>
		</td></tr>
		<tr><td>
		</td></tr>
		<tr><td>
		<label>
		<input name="login" type="submit" id="login" value="Login">
		</label>
		</td></tr>
		</table>
	</div>
</form>



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



















 



