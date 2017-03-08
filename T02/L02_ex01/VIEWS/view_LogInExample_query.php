<html>
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo __CSS;?>">
</head>
<body>

<h2>Lecturer Log In example (no cookies)<h2>
<hr>

<?php

if($loggedInStatus == 2){ echo $loggedInMSG; } //didn't use true or false because message would always show on false even on first time on LogIn view

//use resultsets to generate HTML tables
include("FORMS/loginLecturerForm.html");

?>
<hr>
<a href="<?php echo $_SERVER["PHP_SELF"];?>">Home</a>
</body>
</html>

<?php
//if DEBUG  mode is on - process some debug code here
if (__DEBUG==1) {
	echo '<hr><h2>Debug Information:</h2>';
	echo '<h4>Post Array:</h4>';
	print_r($_POST);
	};

?>
