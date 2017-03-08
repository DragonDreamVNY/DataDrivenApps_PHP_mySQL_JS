<html>
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo __CSS;?>">
</head>
<body>

<h2>Show Student Transcripts<h2>
<hr>

<?php
if($tranScriptFoundStatus == 2){ echo $transcriptsMSG; } //only show if Student transcript wasn't found

//use resultsets to generate HTML tables
include("FORMS/queryStudentTranscriptsForm.html");

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
	};

?>
