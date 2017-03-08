<?php
//Query string
$table='students';
$studentID=$_POST["studID"];
$sqlData="SELECT * FROM $table WHERE studentID='$studentID'";  //get the data from the table
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
















 



