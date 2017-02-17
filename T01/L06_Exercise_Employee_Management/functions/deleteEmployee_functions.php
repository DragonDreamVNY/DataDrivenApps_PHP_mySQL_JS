<?php include("../classlib/Person.php");?>
<?php include("../classlib/Employee.php");?>

<!DOCTYPE html>
<html>
<head>
  <title>EMS - Employees</title>
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
  <h1>Delete Employee</h1>


  <?php
// define variables and set to empty values
//$name = $pps_Nr = $personalID_Nr = $dob_In = "";
  $deleteMe = ""; //the line you want to delete
  $outPut = ""; //for output to CSV
  $data = file("../data/employee_data.csv");

  //trim white space strip html and slashes from the variables coming from Hidden Input Form
  $deleteButtonPOST = sanitizeString( $_POST['deleteSelected'] );

  if ( isset($deleteButtonPOST) )  {  //check that the delete button has been pressed
    $name = sanitizeString( $_POST['name'] );
    $ppsn = sanitizeString( $_POST['ppsn'] );
    $pin = sanitizeString( $_POST['pin'] );
    $dob = sanitizeString( $_POST['dob'] );
    $deleteMe = $name.','.$ppsn.','.$pin.','.$dob;
    echo '<p>To be deleted : '.$deleteMe.'</p>'; // hidden variables come from deleteEmployees.php form

/*
    // Read Objects from CSV data file, clears contents, Write to it later
    $dataFile = fopen("../data/employee_data.csv", "w+") or die("Unable to open file!");
    flock($dataFile, LOCK_EX); //LOCK makes sure only one resource/user is updating this file

    // $group = array();  // empty array to contain each Employee object
    $i = 0;  //index for the array
    while( !feof($dataFile) ) {
      $csvLines = fgets($dataFile); //read a line from the CSV file
      if( !feof($dataFile) ) { //make sure not at end
        if( $csvLines != $deleteMe ) {
          //$employeeProperties = explode(",",$csvLines); //parse values to an array
          //$group[$i] = new Employee( $employeeProperties[0], $employeeProperties[1], $employeeProperties[2], $employeeProperties[3] );// create new employee objects with Name, PPSN, PIN, DOB

          $outPut .= $csvLines;  //store every line in the output String except one being deleted. Possibly could have used Arrays
        }
        $i++;
      }
    } //end While
*/
/*
    // using Arrays...
    foreach($data as $line) {
        if(trim($line) != $deleteMe){ //trim removes whitespace or ,specified charlist
           $outPut[] .= $line; //store every line in the array except one being deleted
        }
    } //end store lines without the one being Deleted

  foreach($outPut as $line) {
     fwrite($dataFile, $line) or die("Could not write to file");
  }
*/
/*
  fwrite($dataFile, $outPut);
  flock($dataFile, LOCK_UN);
  fclose($dataFile);
*/
  echo "<hr>";
  echo('<p> Deleted  : '.$deleteMe.'</p>');
  echo "<p>Done! 'employee_data.csv' successfully updated. Employee Deleted</p>";
} // end if Delete Pressed
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
