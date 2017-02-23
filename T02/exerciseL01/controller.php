<?php
//includes
//include("CONFIG/connection.php");  //include the database connection

//views
if (isset($_POST["selectController"])){
	switch ($_POST["selection"]){
		case 'ex1':
		include("MODELS/model_ex01.php");
		include("VIEWS/view_ex01.php");
		break;

		case 'ex2':
		include("MODELS/model_ex02.php");
		include("VIEWS/view_ex02.php");
		break;

		case 'ex3':
		include("CONFIG/connection.php");
		include("MODELS/model_ex03.php");
		include("VIEWS/view_ex03.php");
		break;

		case 'ex4':
		include("CONFIG/connection.php");
		include("MODELS/model_ex04.php");
		include("VIEWS/view_ex04.php");
		break;

		default:
		include("VIEWS/view_home.php");

	}
}
else{
	include("VIEWS/view_home.php");
}




?>
