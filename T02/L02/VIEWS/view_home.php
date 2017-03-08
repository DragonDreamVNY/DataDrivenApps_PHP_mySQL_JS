<html>
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo __CSS;?>">

</head>
<body>

<h1>Lecture 02 - MySQLi Examples</h1>
<p>Choose an example to view from the drop down menu below. 

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<select name="selection">
  <option value="ex5">Example 5 - Helper Functions and Stored Configuration Settings</option>
  <option value="ex6">Example 6 - Query a Student Record by ID</option>
  <option value="ex7">Example 7 - Register a new Lecturer</option>
  <option value="css">CSS Template</option>
</select>
<input type="submit" type="button" value="Choose Example" name="selectController">
</form>

</body>
</html>