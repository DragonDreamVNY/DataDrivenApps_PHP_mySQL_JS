<html>
<head>
<title>L01 MySQLi</title>
</head>
<body>

<h1>Lecture 01 - MySQLi Examples</h1>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<select name="selection">
  <option value="ex1">Lecturer</option>
  <option value="ex2">Modules</option>
  <option value="ex3">Results</option>
  <option value="ex4">Students</option>
</select>
<input type="submit" type="button" value="Choose Example" name="selectController">
</form>

</body>
</html>
