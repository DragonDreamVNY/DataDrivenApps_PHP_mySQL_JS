<?php
//this model:
//-gets the user and shortlife cookie values
//-puts them into a string for display in the view

//template values
$title='SESSIONS';
$pageHeading='Example 02 - Sessions';

//nav section content
$contentStringNAV='NAV Section String';

//main section content:
$contentStringMAIN=$msg;  //$msg comes from the controller
$contentStringMAIN.='</br>';
$contentStringMAIN.='</br>PHP Session ID   ='.session_id();
$contentStringMAIN.='</br>Nr. of Page Views='.$_SESSION['views'];

	
//RHS section content
$contentStringRHS='This example demonstrates the use of PHP sessions. The login button just sets the session variables without the need for user authentication. The next example will use authentication (username and password) before setting the session variables.  ';

//footer section content
$contentStringFOOTER='FOOTER Section String';


?>


</body>
</html>
















 



