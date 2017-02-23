<!DOCTYPE html>
<html lang="en">
<head>
<title>MVC</title>
</head> 


<body>

<div >
    <div>
		<ul >
			<li ><a href="#">Home</a></li>
			<?php foreach($menuNav as $menuItem){echo $menuItem;} //populate the navbar menu items?>
		</ul>
		<ul >
			<li><a href="#">Log Out</a></li>
		</ul>
    </div>
</div>





<div>
	<div style="background-color:white;">
			<?php echo $stringLHS; ?>
	</div>	
	<div style="background-color:white;">
		<div class="panel panel-default">
			<?php echo $stringMID; ?>
	</div>
	<div style="background-color:white;">
			<?php echo $stringRHS; ?>
	</div>
</div>

<div>
	<div style="background-color:white;"></div>
	<div style="background-color:white;">
		<?php echo $result; ?>
	</div>
</div>

</div>
</body>




</html>                                		