<!DOCTYPE html>
<?php
$cookie_name = "coffee";//Setting the cookie name
$cookie_value = "is needed";//Setting the cookie value
setcookie($cookie_name, $cookie_value, time() + 86400, "/");//Initialising the cookie with an expiry date of one day. 86400 seconds = 1 day
 ?>
<html>
<head>
<title>PHP Exercise</title>
</head>
<body>
<article>
<p>
	<?php
	$x = 45;//Setting variable x
	$y = 55;//Setting variable y

	function addition()//Creating a function like a method in Java
	{
		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];//Globally calling back the values of x and y
	}
	addition();//Calling the function
	echo $z;//Echoing the value of z
	?>
</p>

<p>
	<form id="contact form" method="POST" action="#">
	<div class="row">
	<label for="name">Your Name:</label>
	<br />
	<input id="name" class="input" type="text" name="name" value="" size="30" /><br />
	</div>
	<input id="submit_button" type="submit" value="Submit Name"/>
	</form>
</p>

<p>
	<?php
		$name = $_REQUEST['name'];//Requests the name entered from the above form
		echo $name;//Until you submit the name, an error will be thrown out as there was nothing submitted
		?>
</p>

<p>
	<?php
	//If the Cookie is not set
	if(!isset($_COOKIE[$cookie_name]))
	{
  	echo "Cookie named '" . $cookie_name . "' is not set!";//Spits out this error
	}
	else
	{
    echo "Cookie '" . $cookie_name . "' is set!<br>";//Spits out the cookie name
    echo "Value is:   " . $_COOKIE[$cookie_value];//As well as the value
	}
	?>
</p>

<p>
	<?php
		phpinfo();//Shows defaults
		phpinfo(INFO_MODULES);//Shows module information
	?>
</p>

<p>
	<?php
		echo 'My username is ' .$_EVN['USERNAME'] . '!';//Echo back the username from the environment variables
		?>
</p>

</article>
</body>
</html>
