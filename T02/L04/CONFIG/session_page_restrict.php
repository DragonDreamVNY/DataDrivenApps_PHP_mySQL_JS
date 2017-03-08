<?php
session_start();
if(!isset($_SESSION['loggedin'])){//not logged in
	echo '<h3>You must log in first!</h3>';
	echo '<p>Redirecting to public home page ...</p>';
	echo '<meta http-equiv="Refresh" content="5;url=../controller_main.php" />';
	break;
}	
?>