<?php include("classlib/Person.php"); //include the person class library ?>
<?php include("classlib/Employee.php"); //include the employee class library ?>
<html>
<head>
<title>EMS</title>
</head>

<body>
<h1>EMS - Change Employee PIN</h1>

<?php
//get all employee details from file
$group=array();  //empty array to contain person objects
$dataFile = fopen("persistence/employee_data.csv", "r") or die("Unable to open file!");
$i=0;  //index for the array
while(!feof($dataFile)) {
  $csv=fgets($dataFile); //read a line from the CSV file
  if(!feof($dataFile)){ //make sure not at end of file
	  $empProperties=explode(",",$csv); //parse values to an array
	  $group[$i]=new Employee($empProperties[0],$empProperties[2],$empProperties[3],$empProperties[1]);//create a new person object and add it to the array
	  $i++; //increment the array index
  }
}
fclose($dataFile); //close the data file

//Display all employee details in a table  along with
//a button to select an employee whose PIN needs to be changed
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

//if the SELECT button is pressed then display a form
//to get the old an new PIN numbers
if (isset($_POST["employeeSelectedButton"])){
	$i=$_POST["selectedEmployee"];
	echo '<form action="'.$_SERVER["PHP_SELF"].'" method="post">';
		echo 'Enter old PIN: <input type="text" name="oldPIN"><br>';
		echo 'Enter new PIN: <input type="text" name="newPIN"><br>';
		echo '<input type="submit" type="button" value="Change PIN" name="change_pin">';
		echo '<input type="hidden" value="'.$i.'" name="selectedEmployee">';
	echo '</form>';

}

//before the PIN can be changed - check that the old PIN is correct
//if it is then change the PIN for the selected employee and overwrite the 
//data file
//if it doesnt match then just display a message
if (isset($_POST["change_pin"])){
	$i=(integer) $_POST["selectedEmployee"]; //cast the string to an integer
	//verify the old PIN is correct 
	if($group[$i]->verify_pin($_POST["oldPIN"])){
		if ($group[$i]->set_pin($_POST["oldPIN"],$_POST["newPIN"])){
			echo "</br>PIN is changed";
			//persist all values to the file
			$csv="";//an empty CSV string
		foreach ($group as $employee){
			//get the properties of each object , put into CSV
			$csv.=$employee->get_name().",";
			$csv.=$employee->get_dob().",";
			$csv.=$employee->get_ppsn().",";
			$csv.=$employee->get_pin()."\n";
		}
		$dataFile = fopen("persistence/employee_data.csv", "w") or die("Unable to open file!");
		fwrite($dataFile, $csv);  //this will completely OVERWRITE the contents of the file. 
		fclose($dataFile);
		}
		else {
			echo "</br>PIN has not been changed";
		}
			
	}
	else{
		echo "</br>old PIN is NOT valid - please try again.";
	}
}


echo "<hr>Click <a href='PHP_Ex1_home.php'>here</a> to  return to main page.";




?>



</body>
</html>
