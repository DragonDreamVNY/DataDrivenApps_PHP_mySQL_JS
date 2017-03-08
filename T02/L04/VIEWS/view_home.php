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
echo '<a href="http://php.net/manual/en/book.mysqli.php">MySQLi Manual</a><br>';
echo '<h4>L02 Examples</h4>';
echo '<a href="'.$_SERVER["PHP_SELF"].'">HOME</a><br>';
echo "</nav>";

//----------------MAIN SECTION----------------------------//
//========================================================//
echo "<section>";
// display the new user registration form
?>
<h1>Choose an example</h1>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<select name="selection">
  <option value="ex1">Example 1 - Cookie Setter/Viewer/Killer</option>
  <option value="ex2">Example 2 - Sessions</option>
  <option value="ex3">Example 3 - Access Private web pages</option>
</select>
<input type="submit" type="button" value="Choose Example" name="selectController">
</form>
<?php
echo "</section>";


//----------------RHS SECTION-----------------------------//
//========================================================//
echo '<section class="right">';
echo '<h3>RHS SECTION</h3>';
echo $msg;
echo '<p>';
echo $contentStringRHS; 
echo '</section>';



//----------------FOOTER section--------------------------//
//========================================================//

//warn DEBUG  mode is on
if (__DEBUG==1) 
	{	
	echo '<footer class="debug">';
	echo '<h3>FOOTER SECTION</h3>';
	echo 'Debug mode is ON - try turning it off';
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
</html>
















 



