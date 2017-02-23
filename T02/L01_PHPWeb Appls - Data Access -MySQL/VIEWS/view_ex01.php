<html>
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="CSS/mystyle.css">
</head>
<body>

<h3>MySQL Server Connection information :</h3>

<ul>
<li>Client connection info  string : <?php echo $conn->client_info;?> </li>
<li>Server Version   [as decimal release]:  <?php echo $conn->server_info ;?></li>
<li>Server Version  [as integer] :  <?php echo $conn->server_version;?> </li>
<li>Server Character Set :  <?php echo $conn->character_set_name();?></li>
<li>Host info :  <?php echo $conn->host_info;?> </li>
</ul>

<hr>
<a href="<?php echo $_SERVER["PHP_SELF"];?>">Home</a>

</body>
</html>
<?php $conn->close();//close the DB connection?>
