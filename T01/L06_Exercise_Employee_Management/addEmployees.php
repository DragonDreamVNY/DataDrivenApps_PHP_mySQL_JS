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





<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
