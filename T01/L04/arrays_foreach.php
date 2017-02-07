<html>
<head>
<title>PHP_arrays_foreach</title>
</head>
<body>

<h1>Iterating Through Arrays</h1>

<?php

//create sample arrays:
$books = array(
    1 => "War and Peace",
    2 => "Macbeth"
	);

//create a couple of person arrays:
$person1 = array (
	"Firstname"=>"John",
	"Lastname"=>"Smith"
	);
$person2 = array (
	"Firstname"=>"Katie",
	"Lastname"=>"Jones"
	);

//multidimensional array
$people = array("Member1"=>$person1,"Member2"=>$person2);


echo '<h4>Example 1 - Using foreach:</h4>';
echo '<list>';
foreach ($books as $value) {
	//this is a simple 2D array - we are displaying it in a list
	echo '<li>'.$value.'</li>';
}
echo '</list>';

echo '<h4>Example 2 - Using FOREACH loop to iterate through a multidimensional array:</h4>';
foreach ($people as $person){
	//each $person is an associative array
	echo $person["Firstname"].' '.$person["Lastname"].'</br>';
}

echo '<h4>Example 3 - Using foreach with multidimensional arrays to generate a TABLE:</h4>';
echo '<table border="1">';
echo '<tr><th>Member Nr.</th><th>Lastname</th><th>Firstname</th></tr>';
foreach ($people as $key=>$value) {
	//$key is being used in this FOREACH example
	//$value is an associative array representing a row of data
	echo '<tr><td>'.$key.'</td><td>'.$value["Lastname"].'</td><td>'.$value["Firstname"].'</td></tr>';
}
echo '</table>';


?>

</body>
</html>
