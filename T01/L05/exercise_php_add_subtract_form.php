<html>
<head>
<title>PHP_form2_self_processing</title>
</head>
<body>

<h1>Form 2 Self Processing</h1>

<!-- form with 2 fields and three buttons -->
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
  Enter a value: <input type="text" name="value1"><br>
  Enter a value: <input type="text" name="value2"><br>
  <input type="submit" value="Get Sum" name="data_plus_submitted">
  <input type="submit" value="Get Diff" name="data_diff_submitted">
  <input type="submit" value="Get Table" name="data_forTable_submitted">

</form>
<hr>

<?php
//define the functions
  function sum($x, $y) {
      $z = $x + $y;
      return $z;
  }

  function diff($x, $y) {
      $z = $x - $y;
      return $z;
  }

  function prod($x, $y) {
      $z = $x * $y;
      return $z;
  }
?>

<?php
function buildRows($x,$y){
    $rows = '<tr>
              <td>'.$x.'</td> <td>'.Times.'</td> <td>'.$y.'</td> <td> ='.prod($x, $y).'</td>
            </tr>';
    return $rows;
}

function buildTable($rows) {
  $table = "<table cellpadding='1' cellspacing='1' bgcolor='#FF1111' border='1'>$rows</table>";
  return $table;
}

$tableArray = array();

?>

<!-- form validation -->
<?php
if (isset($_POST['data_plus_submitted'])){  //check that the form has been submitted
	echo 'The SUM of '.$_POST['value1'];
	echo ' and '.$_POST['value2'];
	echo ' is = '.sum($_POST['value1'],$_POST['value2']);
}
else if (isset ($_POST['data_diff_submitted'])) {
  echo 'The DIFF of '.$_POST['value1'];
  echo ' and '.$_POST['value2'];
  echo ' is = '.diff($_POST['value1'],$_POST['value2']);
}
else if (isset($_POST['data_forTable_submitted']) ) {
  //call the functions to create the table
  //echo buildTable( buildRows($myarray) );

  for ($1; $1 <= $_POST['value2']; $1++){
    echo '<tr>';
    echo '<td>'.$_POST['value1'].'</td><td>'.$1.'</td><td>'.prod($_POST['value1'].$i).'</td>';'
  }
} //end mult elseif

else { //the form has not been submitted
	echo "<p>Please enter some values in the form.</p>";
}
?>

</body>
</html>
