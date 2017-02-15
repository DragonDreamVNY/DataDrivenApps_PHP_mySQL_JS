<?php include("../classlib/Person.php");?>
<?php include("../classlib/Employee.php");?>
<?php include("functions/ChromePhp.php");?>

<!DOCTYPE html>
<html>
<head>
  <title>EMS - Add New Employees</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<div class ="container">
  <a href="../test_home.php"> <button type="button" class="btn btn-default" name="goHome"> Go back to Home </button></a>


  <?php
// define variables and set to empty values
//$name = $pps_Nr = $personalID_Nr = $dob_In = "";
  $pinChecker = 0; //init the PIN you want to delete
  $data = file("../data/employee_data.csv");
  $outPut = array();
  $thisEmployee = ""; //to get values from Employee object in current loop of the Button pressed


  if ( isset($_POST['changePIN']) )  {  //check that the Change PIN button has been pressed
    $thisEmployee = current($employee); // gets current value taken from this iteration of the foreach in deleteEmployees
    //$thisEmployee = new Employee($name, $pps_Nr, $personalID_Nr, $dob_In); //hello new guy, details incoming..
    echo "Employee's PPSN: " . $thisEmployee->get_ppsn()."<br>";


    $deleteMe.= $thisEmployee->get_name().",".$thisEmployee->get_ppsn().",".$newEmployee->get_pin().','.$newEmployee->get_dob()."\n";


  $dataFile = fopen("../data/employee_data.csv", "w+") or die("Unable to open file!");
  flock($dataFile, LOCK_EX);
  foreach($outPut as $line) {
     fwrite($dataFile, $line) or die("Could not write to file");
  }
  flock($dataFile, LOCK_UN);
  fclose($dataFile);


  //check the employees PIN number
  if($employee1->verify_pin($pinChecker)){
  echo "Employee's PIN check:OK <br>";
  }
  else {
  echo "Employee's PIN check:FAIL <br>";
  }


  echo "<hr>";
  echo('<p> Changed PIN  : '.$deleteMe.'</p>');
  echo "<p>Done! 'employee_data.csv' successfully updated. Employee Deleted</p>";
} // end if
else { //the form has not been submitted
    echo "<p>Error occured. Couldn't Delete</p>";
}


function sanitizeString($var){
	if ( get_magic_quotes_gpc() )  $var = stripcslashes($var);
	$var = htmlentities($var);
	$var = strip_tags($var);
	return $var;
} //end Sanitize String

function sanitizeMySQL($var){
	$var = mysql_real_escape_string($var);
	$var = sanitizeString($var);
	return $var;
} // end sanitize MySQL

?>



</div> <!--end Container-->
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
