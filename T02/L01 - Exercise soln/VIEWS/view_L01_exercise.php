<html>
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="CSS/mystyle.css">
</head>
<body>

<h2>MySQLi Lecture 01 Exercise<h2>
<hr>
<p>Table selector exercise:  

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<select name="selectedTable">
<?php  
foreach($rsTableList as $title){
	echo '<option value="'.$title["Tables_in_k0xxxxxx_itschool"].'">'.strtoupper($title["Tables_in_k0xxxxxx_itschool"]).'</option>';
}?>
</select>
<input type="submit" type="button" value="Choose Table" name="btnSelectTable">
</form>



<hr>
<a href="<?php echo $_SERVER["PHP_SELF"];?>">Home</a>
</body>
</html>
















 



