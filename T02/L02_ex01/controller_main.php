<?php
//includes
include("CONFIG/connection.php");  //include the database connection
include("CONFIG/config.php");  //include the application configuration settings

//variables
$title="K00223361 - MySQLi Examples with Practical 01";
       

//views
if (isset($_POST["selectController"])){
	switch ($_POST["selection"]){
		case 'ex5':
		include("LIBRARY/helperFunctionsTables.php");
		include("MODELS/model_ex05.php");
		include("VIEWS/view_ex05.php");
		break;

		case 'ex6':
		include("VIEWS/view_ex06_query.php");
		break;

		case 'ex7':
		include("LIBRARY/helperFunctionsTables.php");
		include("VIEWS/view_ex07.php");
		break;

		case 'css':
		include("VIEWS/view_css_template.php");
		break;

		case 'loginExample':
		//include("LIBRARY/helperFunctionsTables.php"); don't need this if TableHelper included in controller_login
		include("VIEWS/view_LogInExample_query.php");
		break;
                
                case 'viewTranscripts':
		//include("LIBRARY/helperFunctionsTables.php"); don't need this if TableHelper included in controller_login
		include("VIEWS/view_Transcript_query.php");
		break;
            
		default:
		include("VIEWS/view_home.php");

	}
}
else{
	include("VIEWS/view_home.php");
}

?>
