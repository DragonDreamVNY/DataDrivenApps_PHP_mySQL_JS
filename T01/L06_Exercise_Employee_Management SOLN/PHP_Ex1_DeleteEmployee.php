<?php include("classlib/Person.php"); //include the person class library ?>
<?php include("classlib/Employee.php"); //include the employee class library ?>
<html>
<head>
<title>EMS</title>
</head>

<body>
<h1>EMS - Delete an Employee</h1>
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

//Display all employee details in a table  along with
//a button to select an employee for deletion
echo '<table border="1">';
echo '<tr><th>Name</th><th>Date of Birth</th><th>PPS Nr.</th><th>Change Pin</th></tr>';
foreach ($group as $index=>$employee){
	echo '<tr>';
	echo '<td>'.$employee->get_name().'</td>';
	echo '<td>'.$employee->get_dob().'</td>';
	echo '<td>'.$employee->get_ppsn().'</td>';
	echo '<td>';
		echo '<form action="'.$_SERVER["PHP_SELF"].'" method="post">';
		echo '<input type="submit" type="button" value="Select" name="employeeSelectedButton">';
		echo '<input type="hidden" value="'.$index.'" name="selectedEmployee">';//when the button is pressed the 
																				//$index 'hidden' value is inserted 
																				//into the $_POST array
		echo '</form>';
	echo '</td>';
	echo '</tr>';
}
echo '</table></br></br>';

//if the select button is pressed then display
//a form to confirm deletion
if (isset($_POST["employeeSelectedButton"])){
	$i=(integer) $_POST["selectedEmployee"];
	//$_POST=array();	
	echo '<form action="'.$_SERVER["PHP_SELF"].'" method="post">';
		echo '<input type="submit" type="button" value="Confirm Delete" name="delete_employee">';
		echo '<input type="hidden" value="'.$i.'" name="selectedEmployee">';
	echo '</form>';

}


//to delete the employee its neccessary to overwrite
//the data file with all employee details except
//for the one selected for deletion
if (isset($_POST["delete_employee"])){
	$i=(integer)$_POST["selectedEmployee"];  //this is the array index of the selected employee
	
	foreach ($group as $key=>$employee){
			if ($key!=$i){
			//get the properties of each object except for the one selected for deletion, put into CSV
			$csv.=$employee->get_name().",";
			$csv.=$employee->get_dob().",";
			$csv.=$employee->get_ppsn().",";
			$csv.=$employee->get_pin()."\n";
			}
	}
	
	$dataFile = fopen("persistence/employee_data.csv", "w") or die("Unable to open file!");
	fwrite($dataFile, $csv);  //this will completely OVERWRITE the contents of the file. 
	fclose($dataFile);
	
	//need to reload the page to update the table
	echo 'refreshing...in 0 seconds...'; //this message will not be seen as refresh happens too quick
	echo '<META HTTP-EQUIV="refresh" CONTENT="0">'; //refresh the page in zero seconds - 
}



echo "<hr>Click <a href='PHP_Ex1_home.php'>here</a> to  return to main page.";
?>

</body>
</html>
