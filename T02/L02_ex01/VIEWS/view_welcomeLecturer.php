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
<h2>Welcome Lecturer</h2>
</header>
<?php

//----------------NAVIGATION SECTION----------------------//
//========================================================//
echo '<nav>';
echo "<h3>Welcome</h3>";
echo '<h4>L02 Log In Examples (with no cookies)</h4>';
echo '<a href="'.$_SERVER["PHP_SELF"].'">HOME</a><br>';
echo "</nav>";

//----------------MAIN SECTION----------------------------//
//========================================================//
echo "<section>";
// display the message for Logged In
echo "<h3>MAIN SECTION - below is the message from the LoginExample Model</h3>";
echo $loggedInMSG;

echo "</section>";


//----------------RHS SECTION-----------------------------//
//========================================================//
echo '<section class="right">';
echo '<h3>RHS SECTION</h3>';

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
