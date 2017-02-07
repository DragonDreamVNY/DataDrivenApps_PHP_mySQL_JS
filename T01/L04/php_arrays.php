<html>
<head>
  <title>PHP_arrays</title>
</head>
<body>

<h1>Arrays</h1>
<?php

//create sample arrays:
// use keyword array(1=>x, 2=>x, 3=>x, 4=>x, 5=>x);
// can re-assign arrays to different data types, 
$books = array(
    1 => "War and Peace",
    2 => "Macbeth"
	);

// in this example you don't specify element number: it's assigned keyvalues 0, 1, 2
$cars = array("Volvo", "BMW", "Toyota");

$person1 = array (
	"Firstname"=>"John",
	"Lastname"=>"Smith"
	);

$person2 = array (
	"Firstname"=>"Katie",
	"Lastname"=>"Jones"
	);
//multidimensional array
$people = array ($person1,$person2); //array containing two other arrays with keys 0,1

//use the arrays
echo '<h3>Use the key to access a value:</h3>';
echo '<p>Get a value from an INDEXED array: '.$cars[1].'</p>';
echo '<p>Get a value from an ASSOCIATIVE array: '.$person1["Lastname"]; //index inside the square brackets
echo '<p>Get a value from a MULTI DIMENSIONAL ASSOCIATIVE array: '.$people[1]["Lastname"];
                                              //in $people array -> $person2 -> Lastname
                                              //same as $person2["Lastname"]
echo '<h3>print_r - array/object dump/count elements:</h3>';
print_r($books); //print_r takes whatever object you pass to it and prints - a diagnostic tool
//echo '<p> Element zero: '.$books[0].'</p>'; //this won't work becuase it would be out of bounds for a static array
echo '<br>The number of elements in the array are :'.count($books);

echo '<h3>Handling multidimensional arrays:</h3>';
echo '<h4>Array Dump:</h4>';
var_dump($people); //good diagnostic tool
/* outputs
array(2) {
  [0]=> array(2) {
    ["Firstname"]=> string(4) "John"
    ["Lastname"]=> string(5) "Smith"
  }
  [1]=> array(2) {
    ["Firstname"]=> string(5) "Katie"
    ["Lastname"]=> string(5) "Jones"
  }
}*/
echo '<h4>Using FOR loop to iterate through a multidimensional array:</h4>';
for ( $row=0; $row < (count($people)); $row++ ) {
	echo $people[$row]["Firstname"].' '.$people[$row]["Lastname"].'<br>';
}// here count($people) is 2

?>

</body>
</html>
