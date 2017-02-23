<?php
//Define Connection Parameters
//


$DBServer = 'localhost'; // e.g 'localhost' or '192.168.1.100'
$DBUser   = 'root';
$DBPass   = '';
$DBName   = 'k00223361_itschool';

/*
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_DATABASE', 'k00223361_itschool');
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
*/

//connect using object oriented method
$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);  //-->mysqli::__construct — Open a new connection to the MySQL server

// check connection
//
if ($conn->connect_error) {   //--->mysqli::$connect_errno — Returns the error code from last connect call
	if (__DEBUG==1) {echo "<p>Database connection failed: $conn->connect_error, E_USER_ERROR";}
	exit("<p>PHP script terminated");

}
?>
