<?php
//Query string
$table='students'; // this is the table name from the database
$sql1="SELECT * FROM $table";  //get the data from the table
$sql2="SHOW COLUMNS FROM $table";  //get the table column descriptions

//execute the 2 queries

try {
  $rs1=$conn->query($sql1);
}
catch(Exception $e) {//catch exception
  echo 'Message: ' .$e->getMessage();
  exit("<p>PHP script terminated");
}

try {
  $rs2=$conn->query($sql2);
}
catch(Exception $e) {//catch exception
  echo 'Message: ' .$e->getMessage();
  exit("<p>PHP script terminated");
}

//check that there is a valid result set
if($rs1 === false) {
  echo 'Wrong SQL: ' . $sql . ' Error: ' . $conn->error;
  exit("<p>PHP script terminated");
}

if($rs2 === false) {
  echo 'Wrong SQL: ' . $sql . ' Error: ' . $conn->error;
  exit("<p>PHP script terminated");
}



//close the connection
$conn->close();
?>


</body>
</html>
