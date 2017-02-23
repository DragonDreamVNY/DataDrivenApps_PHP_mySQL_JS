<?php
$title='MySQLi Ex1';
$bodyText='<h2>MySQLi Tutorial Examples - Example 1<h2>';
$bodyText.='<p>For MySQLi Manual click <a href="http://php.net/manual/en/book.mysqli.php">here</a>';
$bodyText.= "<hr>";
$bodyText.= '<h3>Connect to a DB (Object Oriented)</h3>';

//============================

//Define Connection Parameters
//
// $DBServer = 'localhost'; // e.g 'localhost'
// $DBUser   = 'root';  //username
// $DBPass   = '';  //password
// $DBName   = 'k00223361_itschool';  //database name
//
// //connect using object oriented method
//
// $conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);  //-->mysqli::__construct � Open a new connection to the MySQL server

// check connection
//
if ($conn->connect_error) {   //--->mysqli::$connect_errno � Returns the error code from last connect call
	echo "<p>Database connection failed: $conn->connect_error";
	exit("<p>PHP script terminated");
}

?>
