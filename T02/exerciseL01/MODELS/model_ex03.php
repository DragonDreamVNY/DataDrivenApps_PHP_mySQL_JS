<?php
$title='MySQLi Ex3';
$bodyText='<h2>MySQLi Tutorial Examples - Example 3<h2>';


//Define Connection Parameters
//
// $DBServer = 'localhost'; // e.g 'localhost' or '192.168.1.100'
// $DBUser   = 'root';
// $DBPass   = '';
// $DBName   = 'K00223361_itschool';
//
//
// //connect using object oriented method
// $conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);  //-->mysqli::__construct — Open a new connection to the MySQL server

// check connection
//
if ($conn->connect_error) {   //--->mysqli::$connect_errno — Returns the error code from last connect call
	echo "<p>Database connection failed: $conn->connect_error, E_USER_ERROR";
	exit("<p>PHP script terminated");
    //trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);   //--->mysqli::$connect_error — Returns a string description of the last connect error
}


//Query string
$sql='SELECT * FROM students';

//execute the query in a try..catch block
try {
  $rs=$conn->query($sql);
}
catch(Exception $e) { //catch exception
  $bodyText.='Message: ' .$e->getMessage();
  exit("<p>PHP script terminated");
}

//close the connection
$conn->close();

//check that there is a valid result set
if($rs === false) {
  echo 'Wrong SQL: ' . $sql . ' Error: ' . $conn->error;
  exit("<p>PHP script terminated");
}

?>
