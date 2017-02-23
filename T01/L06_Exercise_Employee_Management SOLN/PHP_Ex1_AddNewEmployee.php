<?php include("classlib/Person.php"); //include the person class library ?>
<?php include("classlib/Employee.php"); //include the employee class library ?>
<html>
<head>
<title>EMS</title>
</head>

<body>
<h1>EMS - Add New Employees</h1>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<table>
<tr><td>Enter a NAME:</td><td> <input type="text" name="name"></td></tr>
<tr><td>Enter a PPSN:</td><td>  <input type="text" name="ppsn"></td></tr>
<tr><td>Enter a PIN :</td><td>  <input type="text" name="pin"></td></tr>
<tr><td>Enter a DOB:</td><td>  <input type="text" name="dob"></td></tr>
<tr><td></td><td><input type="submit" value="Add New Employee" name="data_submitted"></td></tr>
</table>
</form>
<hr>

<?php
if (isset($_POST['data_submitted'])){  //check that the form has been submitted
	$csv="";
	$employee = new Employee($_POST['name'],$_POST['ppsn'],$_POST['pin'],$_POST['dob']);
	$csv.=	$employee->get_name().",".
			$employee->get_dob().",".
			$employee->get_ppsn().",".
			$employee->get_pin()."\n";
	$dataFile = fopen("persistence/employee_data.csv", "a") or die("Unable to open file!");
	fwrite($dataFile, $csv);
	fclose($dataFile);
	echo "<p>New Employee Added - Use the form to add another or <a href='PHP_Ex1_home.php'>click here</a>.</p>";
	
}
else //the form has not been submitted
{
	echo "<p>Please enter some values in the form  or <a href='PHP_Ex1_home.php'>click here</a>.</p></p>";
}

?>

</body>
</html>
