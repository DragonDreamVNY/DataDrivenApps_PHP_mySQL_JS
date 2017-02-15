<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Fixed Navbar</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
    body{
        padding-top: 70px;
    }
</style>
</head> 
<?php
//define the functions
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

function diff($x, $y) {
    $z = $x - $y;
    return $z;
}

function mult($x, $y) {
    $z = $x * $y;
    return $z;
}
?>

<body>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">L05 Exercise</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
				<li><a href="L05_Ex1_noCSS.php" >No CSS/Styling Version</a></li>
				<li><a href="L05_Ex1_CSS.php" >CSS Styled Version</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
            </ul>
        </div>
    </div>
</nav>



<div class="container">

<div class="row">
	<div class="col-md-3" style="background-color:white;">
		<div class="panel panel-default">
		  <div class="panel-heading"><h3>Bootstrap</h3></div>
		  <div class="panel-body">
		  <p>Find out more about Twitter bootstrap web front end:
			<ul>
			<li><a href="http://getbootstrap.com/">Bootstrap home page</a></li>
			<li><a href="http://www.w3schools.com/bootstrap/">Bootstrap Tutorial</a></li>
			</ul> 
		  </div>
		</div>
	</div>
	
	<div class="col-md-6" style="background-color:white;">
		<div class="panel panel-default">
		  <div class="panel-heading"><h3>Data Entry Form</h3></div>
		  <div class="panel-body">
		  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
		  <div class="form-group">
			<label for="num1">Enter a value:</label>
			<input type="text" class="form-control" id="num1" name="value1"  data-toggle="tooltip" title="Tooltip:Enter a value">
		  </div>
		  <div class="form-group">
			<label for="num2">Enter a value:</label>
			<input type="text" class="form-control" id="num2" name="value2" data-toggle="tooltip" title="Tooltip:Enter a value">
		  </div>
			  <div class="btn-group">
			  <button type="submit" class="btn btn-default btn-lg" name="btn_add">Add</button>
			  <button type="submit" class="btn btn-primary btn-lg" name="btn_subtract">Subtract</button>
			  <button type="submit" class="btn btn-success btn-lg" name="btn_table">Times Table</button>
			  <button type="submit" class="btn btn-danger btn-lg" name="btn_clear">Clear Result</button>
			  </div>
		</form>
		  
		  </div>
		</div>
	</div>
	
	<div class="col-md-3" style="background-color:white;">
		<div class="panel panel-default">
		  <div class="panel-heading"><h3>Notes</h3></div>
		  <div class="panel-body">
		  <p>This web page uses the same PHP as the No CSS and CSS versions available in the menu above.</p>
		  <p>The difference is that the styling is achieved using an open source CSS front end called Twitter Bootstrap.</p> 
		  <p>This particular example makes full use of the layout and styling features - forms, buttons, panels, table and menu styling that are built in with Bootstrap. </p>

		  </div>
		</div>
	</div>

</div>

<div class="row">
	<div class="col-md-3" style="background-color:white;">
	</div>
	<div class="col-md-4" style="background-color:white;">
		<?php
		echo '<h3>Result</h3>';
		echo '<table class="table table-striped"><tbody>';
		if (isset($_POST['btn_add'])){  //check that the button has been pressed
			echo '<tr><td>The SUM of '.$_POST['value1'];
			echo ' and '.$_POST['value2'];
			echo ' is = '.sum($_POST['value1'],$_POST['value2']).'</td></tr>';
		}
		else if (isset($_POST['btn_subtract'])){  //check that the button has been pressed
			echo '<tr><td>The DIFFERENCE of '.$_POST['value1'];
			echo ' and '.$_POST['value2'];
			echo ' is = '.diff($_POST['value1'],$_POST['value2']).'</td></tr>';
		}
		else if (isset($_POST['btn_table'])){  //check that the button has been pressed
			
			$val1=$_POST['value1'];
			for ($i=1;$i<=$_POST['value2'];$i++)
				{
				echo '<tr><td>'.$_POST['value1'].'</td><td>Times</td><td> '.$i.'</td><td> = '.mult($val1,$i).'</td></tr>';
				}
			
		}
		else //the form has not been submitted
		{
			echo "<tr><td>Please enter some values in the form.</td></tr>";
		}
		echo '</tbody></table>';
		?>
	</div>
</div>


</div>
</body>

<script><!--This script enables the tooltips-->
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>


</html>                                		