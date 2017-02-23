<?php
//Query string
$sql="SHOW tables";  //get the data from the table

try {
  $rsTableList=$conn->query($sql);
}
catch(Exception $e) {//catch exception
  echo 'Message: ' .$e->getMessage();
  exit("<p>PHP script terminated");
}

//check that there is a valid result set 
if($rsTableList === false) {
  echo 'Wrong SQL: ' . $sql . ' Error: ' . $conn->error;
  exit("<p>PHP script terminated");
} 


//close the connection
$conn->close();
?>
















 



