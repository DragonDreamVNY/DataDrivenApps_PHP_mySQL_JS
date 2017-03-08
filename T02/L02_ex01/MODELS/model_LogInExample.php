<?php
//Query string
$table = 'lecturer';
$lectID = $_POST["LectID"]; //from HTML Form
$password = $_POST['password']; //from HTML Form
//$sqlData="SELECT LectID FROM $table";
$sqlData = "SELECT * FROM $table
            WHERE LectID='$lectID' AND password ='$password'";
//get the data from the table

//$sqlData="SELECT LectID FROM $table WHERE LectID='$lectID' AND password ='$password'";  //get the data from the table
$sqlTitles="SHOW COLUMNS FROM $table";  //get the table column descriptions

//execute the 2 queries
$rsData = getTableData($conn,$sqlData);
$rsTitles = getTableData($conn,$sqlTitles);

//check the results
$arrayData = checkResultSet($rsData);
$arrayTitles = checkResultSet($rsTitles);

$loggedInMSG = '';  //this is an empty message initially
$loggedInStatus = 0; //this is used for the status message in LogIn view. 
$lecturerFirstName = $arrayData[0]['FirstName']; 

// Associative arrays use a name as a reference instead of number. arrayData[][], first is the Field column,
// Columns index are [0]'Field' [1]'Type' [2]'NULL' [3]'Key' [4]'Default' 
// then second are the values for the reference 'LectID'
if( $lectID === $arrayData[0]["LectID"] ) { // Array ( [0] => Array ( [Field] => LectID
    $loggedInStatus = 1;
    $loggedInMSG .= "<h3>Lecturer for entered LectID and password found!<br>WELCOME $lecturerFirstName</h3>";
    include("VIEWS/view_welcomeLecturer.php");
}
else{
    $loggedInStatus = 2;
    $loggedInMSG .=  "<h3> - a record for this LecturerID and Password not Found<br>Please Try Again</h3>";
    include("VIEWS/view_LogInExample_query.php"); //display the form again together with the above error message
}


if (__DEBUG==1) {
	echo '<hr><h2>Debug Information:</h2>';
	echo '<h4>Post Array:</h4>';
	print_r($_POST);
	echo '<h4>SQL:</h4>';
	echo '$sqlData string:'.$sqlData.'<br>';
	echo '$sqlTitles string:'.$sqlTitles.'<br>';
	echo '<h4>Titles Array:</h4>';
	print_r($arrayTitles);
	echo '<h4>Data Array:</h4>';
	print_r($arrayData);
	}

//close the connection
$conn->close();
?>


</body>
</html>
