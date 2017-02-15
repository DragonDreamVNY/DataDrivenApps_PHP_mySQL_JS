<?php include("classlib/Person.php"); //include the class library ?>
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
<h1>Change Employee PIN</h1>
<p>Please Enter Details below</p>

<div id = "employeeForm" class ="form-group">
  <form action="php_form1_processing.php" method="post">
    <label for ="inputName:">Enter a NAME</label> <input type="text" class="form-control" id="nameInput" name="name" placeholder="Enter name"><br>
    <label for = "inputPPSN">Enter a PPSN</label> <input type="text" class="form-control" id="ppsnInput" name="PPS_Number" placeholder="Enter PPSN"><br>
    <label for = "inputPIN">Enter a PIN</label>  <input type="text" class="form-control" id="pinInput" name="Personal_ID_Nr"  placeholder="Enter PIN"><br>
    <label for = "inputPIN">Enter a DOB</label>  <input type="text" class="form-control" id="dobInput" name="dob" placeholder="Enter D.O.B.">
    <div class="">
      <button type="submit" class="btn btn-default" name="data_submitted"> Add New Employee </button>
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
