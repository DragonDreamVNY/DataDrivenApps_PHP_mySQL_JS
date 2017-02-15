<?php include("../classlib/Person.php");?>
<?php include("../classlib/Employee.php");?>

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
  $deleteMe = ""; //the line you want to delete

  $outPut = array();
  if ( isset($_POST['deleteSelected']) )  {  //check that the delete button has been pressed
    foreach($data as $line) {
        if(trim($line) != $deleteMe){
           $outPut[] = $line; //store every line except the one being deleted
        }
      }
  $dataFile = fopen("../data/employee_data.csv", "w+") or die("Unable to open file!");
  flock($dataFile, LOCK_EX);
  foreach($out as $line) {
     fwrite($fp, $line);
  }
  flock($dataFile, LOCK_UN);
  fclose($dataFile);

    echo('<p> Deleted  : '.$deleteMe.'</p>');
    //Persist the object properties to a CSV file

    fwrite($dataFile, $outPut) or die("Could not write to file");
    fclose($dataFile);
    echo "<hr>";
    echo "<p>Done! 'employee_data.csv' successfully updated. Employee Deleted</p>";
} // end if
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



</div> <!--end Container-->
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
