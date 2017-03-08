<html>
<head>
<!--
K00223361 
Practical 01 - Data Driven Applications
March 2017
___    ______                         _____     ______            
__ |  / /__(_)__________________________  /_    ___  / __________ 
__ | / /__  /__  __ \  ___/  _ \_  __ \  __/    __  /  _  _ \  _ \
__ |/ / _  / _  / / / /__ /  __/  / / / /_      _  /___/  __/  __/
_____/  /_/  /_/ /_/\___/ \___//_/ /_/\__/      /_____/\___/\___/ 
                                                                  
-->
    
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo __CSS;?>">
</head>
<body>

<h2>View Student Transcripts<h2>
<hr>

<?php  
echo $transcriptsMSG;
//use resultsets to generate HTML tables
generateTranscriptsTable($studentName, $arrayTitles, $arrayData);
?>

<hr>
<a href="<?php echo $_SERVER["PHP_SELF"];?>">Home</a>
</body>
</html>

<?php
//if DEBUG  mode is on - process some debug code here
if (__DEBUG==1) {
	echo '<hr><h2>Debug Information:</h2>';
	echo '<h4>Post Array:</h4>';
	print_r($_POST);
	echo '<h4>SQL:</h4>';
	echo '$sqlData string:'.$sqlData.'<br>';
	echo '$sqlTitles string:'.$sqlTitles.'<br>';
	echo '<h4>Titles Array:</h4>';
	print_r($arrayTitles);
	echo '<h4>Data Array:</h4>';
	print_r($arrayData);
	
	};

?>
















 



