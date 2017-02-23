<html>
<head>
<title>L01 MySQLi</title>
</head>
<body>

<h1>Lecture 01 - MySQLi Examples</h1>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<select name="selection">
  <option value="ex1">Example 1 - Connect/Disconnect to MySQL DBMS</option>
  <option value="ex2">Example 2 - Execute a simple SQL SELECT query</option>
  <option value="ex3">Example 3 - Uses externally stored database connection parameters</option>
  <option value="ex4">Example 4 - Dynamically Generating Tables with Headings</option>
</select>
<input type="submit" type="button" value="Choose Example" name="selectController">
</form>

</body>
</html>