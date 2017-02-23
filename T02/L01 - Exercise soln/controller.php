<?php
//views

if(isset($_POST["btnSelectTable"]))
{
	include("CONFIG/connection.php");
	include("MODELS/model_L01_exercise_selected_table.php");
	include("VIEWS/view_ex04.php");
}
else{
	include("CONFIG/connection.php");
	include("MODELS/model_L01_exercise_table_names.php");
	include("VIEWS/view_L01_exercise.php");
}


?>