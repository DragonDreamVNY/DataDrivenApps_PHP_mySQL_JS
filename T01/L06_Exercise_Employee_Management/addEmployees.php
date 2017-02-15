<!DOCTYPE html>
<html>
<head>
  <title>EMS - Add New Employees</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class ="container">
  <a href="test_home.php"> <button type="button" class="btn btn-default" name="goHome"> Go back to Home </button></a>

  <h1>Add New Employee</h1>
  <p>Please Enter Details below</p>

  <div id = "employeeForm" class ="form-group">
    <form action="functions/addEmployee_functions.php" method="post">
      <label for ="inputName:">Enter a NAME</label> <input type="text" class="form-control" id="nameInput" name="name" placeholder="Enter name ie. Joe Blogs"><br>
      <label for = "inputPPSN">Enter a PPSN</label> <input type="text" class="form-control" id="ppsnInput" name="pps_Nr" placeholder="Enter PPSN ie. 12345678U"><br>
      <label for = "inputPIN">Enter a PIN</label>  <input type="text" class="form-control" id="pinInput" name="personalID_Nr"  placeholder="Enter PIN ie. 1234"><br>
      <label for = "inputPIN">Enter a DOB</label>  <input type="text" class="form-control" id="dobInput" name="dob_In" placeholder="Enter D.O.B. ie. 01-Jan-81">
      <div class="">
        <button type="submit" class="btn btn-default" name="newEmployeeData_submitted"> Add New Employee </button>
      </div>
    </form>
  </div> <!--end Form Group-->

  <hr>
  <span id ="statusMessageField">
    <p> Please Enter new Employee details</p>
  </span>


</div> <!--end Container-->


<?php

// define variables and set to empty values
$name = $pps_Nr = $personalID_Nr = $dob_In = "";

if ( isset($_POST['newEmployeeData_submitted']) )  {  //check that the button has been pressed
$name = $_POST['name'];
$pps_Nr = $_POST['PPS_Number'];
$personalID_Nr = $_POST['Personal_ID_Nr'];
$dob_In = $_POST['dob_In'];


//check name is set
  if($name ==''){
      $error[] = 'Name is required';
  }

  $newEmployee = new Employee($name, $pps_Nr, $personalID_Nr, $dob_In); //hello new guy, details incoming..
  //put the object(s) into an array
//		$newGuyArray = array($newEmployee);

  //this wont work if the property is not public - so its commented out
  //echo "Try to access the object property directly: ".$person1->name;
  $csv = ""; //empty String
//  foreach ($newGuyArray as $newEmployee){
    //get the properties of each object , put into CSV
  $csv.=$newEmployee->get_name().",".$newEmployee->get_ppsn().",".$newEmployee->get_pin().$newEmployee->get_dob()."\n";
  //}
  echo('This is the new guy : '.$csv);
  //Persist the object properties to a CSV file
  $dataFile = fopen("data/employee_data.csv", "a+") or die("Unable to open file!");
  // read every line in the file...
  // while( !feof($dataFile) ){
  // 	$line = fgets($dataFile);
  // }
  // fseek($dataFile, 0, SEEK_END); //move file pointer to end
  fwrite($dataFile, $csv) or die("Could not write to file");
  fclose($dataFile);
  echo "<hr>";
  echo "<p>Done! 'person_data.csv' successfully updated</p>";


}
else { //the form has not been submitted
  echo "<p>Please enter some values in the form.</p>";
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


<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
