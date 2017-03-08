<?php
//Query string
$tableStudents='students';
$tableModules='modules';
$tableResults='results';

$table = 'students'; //for the 'field' columns
$StudID = $_POST["studID"]; //from HTML form

// $sqlData="SELECT * FROM $table WHERE studentID='$studentID'";  //get the data from the table
// $sqlTitles = "SHOW COLUMNS FROM $table";  //get the table column descriptions from 'Field'

//$sqlData = "SELECT students.StudentID, CONCAT(students.FirstName,' ',students.LastName) AS StudentName, modules.ModuleID, modules.ModuleTitle, results.Grade"
//        . "FROM ($tableStudents JOIN $tableResults ON students.StudentID = results.StudID)"
//        . "JOIN $tableModules ON modules.ModuleID = results.ModID"
//        . "WHERE (students.StudentID = '$StudID')";
//
//$sqlTitles = "SELECT DISTINCT COLUMN_NAME "
//        . "FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA ='k00223361_itschool' "
//        . "AND TABLE_NAME IN ('students','modules','results') "
//        . "AND COLUMN_NAME IN ('StudentID', 'FirstName', 'LastName', 'ModuleID', 'ModuleTitle', 'Grade')";

$sqlData="SELECT students.StudentID, students.FirstName, students.LastName, modules.ModuleID, modules.ModuleTitle, results.Grade
        FROM $tableStudents, $tableModules, $tableResults
        WHERE students.StudentID = '$StudID'
        AND modules.ModuleID = results.ModID
        AND students.StudentID = results.StudID";  

$sqlTitles = "SELECT `COLUMN_NAME`
    FROM `INFORMATION_SCHEMA`.`COLUMNS`
    WHERE `TABLE_SCHEMA` = 'k00223361_itschool' 
    AND `TABLE_NAME` IN ('students', 'modules', 'results')
    AND `COLUMN_NAME` IN ('StudentID', 'FirstName', 'LastName', 'ModuleID', 'ModuleTitle','Grade')";


//execute the 2 queries and get resultsets
$rsTitles = getTableData($conn,$sqlTitles);
$rsData = getTableData($conn,$sqlData);

//check the results
$arrayTitles = checkResultSet($rsTitles);
$arrayData = checkResultSet($rsData);

$transcriptsMSG='';  //empty message
$tranScriptFoundStatus = 0; // to show error status after reshow the form when wrong StudentID entered
$studentName = ( $arrayData[0]['FirstName'].' '.$arrayData[0]['LastName']); //show full student name when generating table

// Associative arrays use a name as a reference instead of number. arrayData[][], first is the Field column,
// Columns index are [0]'Field' [1]'Type' [2]'NULL' [3]'Key' [4]'Default' 
// then second are the values for the reference 'StudentID', 'FirstName', 'LastName' 
//if( $studentID === $arrayData[0]["StudentID"] ){
if( !empty($arrayData) ){
    $transcriptsMSG .= "<h3>Student Transcripts found for $StudID</h3>";
    $tranScriptFoundStatus = 1;
    include("VIEWS/view_Transcript_result.php"); //view will contain a table generated from the above SQL queries
}
else{
    $transcriptsMSG .=  "<h3> - a record for this StudentID not Found<br>Please Enter a Valid ID</h3>";
    $tranScriptFoundStatus = 2;
    include("VIEWS/view_Transcript_query.php"); //display the form page again
}


//if DEBUG  mode is on - process some debug code here
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
        
        echo 'Invalid query: ' . mysql_error() . "\n";
        echo 'Whole query: ' . $sqlData;
	}

//close the connection
$conn->close();
?>


</body>
</html>
