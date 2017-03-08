<?php
//Query string
$table='lecturer';
$sqlData="SELECT * FROM $table";  //get the data from the table
$sqlTitles="SHOW COLUMNS FROM $table";  //get the table column descriptions

//execute the 2 queries using the helper functions
$rsData=getTableData($conn,$sqlData);
$rsTitles=getTableData($conn,$sqlTitles);

//check the results using the helper functions
$arrayData=checkResultSet($rsData);
$arrayTitles=checkResultSet($rsTitles);


//close the connection
$conn->close();
?>


</body>
</html>
















 



