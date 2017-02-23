<?php include("classlib/Person.php"); //include the person class library ?>
<?php include("classlib/Employee.php"); //include the employee class library ?>
<html>
<head>
<title>EMS</title>
</head>

<body>
<h1>EMS - List all Employees</h1>

<?php 
//get all employee details from file
$group=array();  //empty array to contain person objects
$dataFile = fopen("persistence/employee_data.csv", "r") or die("Unable to open file!");
$i=0;  //index for the array
while(!feof($dataFile)) {
  $csv=fgets($dataFile); //read a line from the CSV file
  if(!feof($dataFile)){ //make sure not at end
	  $empProperties=explode(",",$csv); //parse values to an array
	  $group[$i]=new Employee($empProperties[0],$empProperties[2],$empProperties[3],$empProperties[1]);//create new person objects
	  $i++;
  }
}
fclose($dataFile); //close the data file

//Display all employee details in a table
echo '<table border="1">';
echo '<tr><th>Name</th><th>Date of Birth</th><th>PPS Nr.</th></tr>';
foreach ($group as $employee){
	echo '<tr>';
	echo '<td>'.$employee->get_name().'</td>';
	echo '<td>'.$employee->get_dob().'</td>';
	echo '<td>'.$employee->get_ppsn().'</td>';
	echo '</tr>';
}
echo '</table>';

echo "<hr>Click <a href='PHP_Ex1_home.php'>here</a> to  return to main page.";
?>

</body>
</html>
