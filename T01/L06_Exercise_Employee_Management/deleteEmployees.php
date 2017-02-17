<?php include("classlib/Person.php"); //include the class library ?>
<?php include("classlib/Employee.php"); //include the class library ?>
<?php include("functions/ChromePhp.php");?>
<?php include("functions/sanitize_function.php");?>

<?php
  ChromePhp::log('Hello console from ChromePHP!');
  ChromePhp::log($_SERVER);
?>
<!DOCTYPE html>
<html>
<head>
  <title>EMS - Employees</title>
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

<h1>Delete Employees</h1>

<div class ="container">

<a href="test_home.php"> <button type="button" class="btn btn-default" name="goHome"> Go back to Home </button></a>

  <div class="row">

    <?php
      echo "<h2>List of Employees retrieved</h2>";
      $group = array();  //empty array to contain person objects
      $dataFile = fopen("data/employee_data.csv", "r") or die( "Unable to open file!" );
      $i = 0;  //index for the array
      while( !feof($dataFile) ) {
        $csv = fgets($dataFile);
        print_r($csv);
      	   $employeeProperties = explode(",",$csv); //parse values to an array
           $group[$i] = new Employee( $employeeProperties[0], $employeeProperties[1], $employeeProperties[2], $employeeProperties[3] );//create new employee objects with Name, PPSN, PIN, DOB
    	     $i++;
      } //end While
      fclose( $dataFile ); //close the data file

      //dump the array of Employee objects
      print_r($group);


      echo '<table border="1" class = "employeeTable">';
      echo '<tr> <th>NAME</th> <th>PPSN</th> <th>PIN</th> <th>D.O.B.</th> </tr>'; //column headers

      $btnID = 0;
      foreach ( $group as $employee ) { //loop through the array of Employee objects
        $thisEmployeeName = $employee->get_name();
        $thisEmployeePPSN = $employee->get_ppsn();
        $thisEmployeePIN = $employee->get_pin();
        $thisEmployeeDOB = $employee->get_dob();

        //note the use of double quotes to evaluate variable
        echo "<tr>
          <td>$thisEmployeeName</td>
          <td>$thisEmployeePPSN</td>
          <td>$thisEmployeePIN</td>
          <td>$thisEmployeeDOB</td>
          <td><form action='functions/deleteEmployee_functions.php' method='post'>
            <input type='hidden' name='name' value='$thisEmployeeName' >
            <input type='hidden' name='ppsn' value='$thisEmployeePPSN' >
            <input type='hidden' name='pin' value='$thisEmployeePIN' >
            <input type='hidden' name='dob' value='$thisEmployeeDOB' >
            <button id = btn'.$btnID. ' type='submit' class='btn btn-danger' name='deleteSelected'> Delete This </button>
          </form></td>
          </tr>";
          $btnID++;
      }
      echo '</table>';
    ?>

  </div> <!--end row-->


</div> <!--END CONTAINER-->
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
