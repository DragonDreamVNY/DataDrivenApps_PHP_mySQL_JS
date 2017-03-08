<?php

	$table='lecturer';  //table to insert values into
	
	//INSERT QUERY
	//get the values entered in the form
	$lectID=$conn->real_escape_string($_POST['lectID']);
	$lectFirstName=$conn->real_escape_string($_POST['lectFirstName']);
	$lectLastName=$conn->real_escape_string($_POST['lectLastName']);
	$pass1=$_POST['lectPass1'];
	$pass2=$_POST['lectPass2'];
	
	
	$msg='';  //this is an empty message initially , it will contain the result of the insertion
	
	if ($pass1===$pass2)
	{
		$sqlInsert= "INSERT INTO $table (LectID,FirstName,LastName,password) VALUES('$lectID','$lectFirstName','$lectLastName','$pass1')";
		
		if(query($conn,$sqlInsert)==1) //execute the INSERT query
		{ 
		$msg.= "<h3>New data inserted successfully</h3>";
		}
		else
		{
		$msg.=  "<h3>New data has not been inserted - a record for this ID already exists</h3>";
		}
		
	}
	else
	{ 
		$msg.= "<h3>Passwords dont match - data not entered</h3>";
	}



//Query string
$sqlData="SELECT * FROM $table WHERE LectID='$lectID'";  //get the data from the table
$sqlTitles="SHOW COLUMNS FROM $table";  //get the table column descriptions

//execute the 2 queries
$rsData=getTableData($conn,$sqlData);
$rsTitles=getTableData($conn,$sqlTitles);

//check the results 
$arrayData=checkResultSet($rsData);
$arrayTitles=checkResultSet($rsTitles);


//close the connection
$conn->close();
?>


</body>
</html>

