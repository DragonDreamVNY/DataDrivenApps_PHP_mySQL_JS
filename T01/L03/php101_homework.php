<!DOCTYPE html>

<html>
<head>
	<title>PHP Homework</title>
</head>
<body>
<h2>POST method and forms to table</h2>
<p></p>
<!-- http://www.w3schools.com/tags/ref_httpmethods.asp -->
<!-- http://www.w3schools.com/php/php_forms.asp -->
<form action="cookies.php" method="post">
	Name: <input type="text" 
		name="name" placeholder="Enter your name" 
		id="name"
		onFocus="if(this.value=='Enter your name'){this.value=''};"
		onBlur="if(this.value==''){this.value='Enter your name'};"><br>

	E-mail: <input type="text" name="email"
			placeholder="Enter your email"
			onFocus="if(this.value==this.defaultValue){this.value=''};"
			onBlur="if(this.value==''){this.value=this.defaultValue;};"><br>
	<input type="submit" class="large button" value="submit">
</form>

<table style="width=100%, border=1">
	<tbody>>
		<tr>
			<td>Welcome <?php echo $_POST["name"]; ?></td>
			<td>Your email address is: <?php echo $_POST["email"]; ?></td>
		</tr>	
				
		
		<tr>
			<td>COOKIE Stored: </td>
			<td>$_COOKIE[$cookie_name];</td>
		</tr>
		<tr>
			<td>Eve</td>
			<td>Jackson</td>
			<td>94</td>	
		</tr>
	</table>
	</tbody>
</body>
</html>