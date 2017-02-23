<?php
//define the helper functions
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




//get the menu item data
$menuItem1='<li><a href="http://getbootstrap.com/">Bootstrap home page</a></li>';
$menuItem2='<li><a href="http://www.w3schools.com/bootstrap/">Bootstrap Tutorial</a></li>';
//pass it to the view
$menuNav=array($menuItem1,$menuItem2);


//get the LHS panel content
$panelHeadLHS='<h3>Bootstrap</h3>';
$stringLHS='';
$stringLHS.='<p>Find out more about Twitter bootstrap web front end:'; 
$stringLHS.='<ul>'; 
$stringLHS.='<li><a href="http://getbootstrap.com/">Bootstrap home page</a></li>'; 
$stringLHS.='<li><a href="http://www.w3schools.com/bootstrap/">Bootstrap Tutorial</a></li>'; 
$stringLHS.='</ul>'; 

//get the Middle panel content
$panelHeadMID='<h3>Data Entry Form</h3>';
$stringMID='<form action="'.$_SERVER["PHP_SELF"].'" method="post">';
$stringMID.='<div class="form-group">';
$stringMID.='<label for="num1">Enter a value:</label>';
$stringMID.='<input type="text" class="form-control" id="num1" name="value1"  data-toggle="tooltip" title="Tooltip:Enter a value">';
$stringMID.=' </div>';
$stringMID.='<div class="form-group">';
$stringMID.='<label for="num2">Enter a value:</label>';
$stringMID.='<input type="text" class="form-control" id="num2" name="value2" data-toggle="tooltip" title="Tooltip:Enter a value">';
$stringMID.='</div>';
$stringMID.='<div class="btn-group">';
$stringMID.='<button type="submit" class="btn btn-default btn-lg" name="btn_add">Add</button>';
$stringMID.='<button type="submit" class="btn btn-primary btn-lg" name="btn_subtract">Subtract</button>';
$stringMID.='<button type="submit" class="btn btn-success btn-lg" name="btn_table">Times Table</button>';
$stringMID.='<button type="submit" class="btn btn-danger btn-lg" name="btn_clear">Clear Result</button>';
$stringMID.='</div>';
$stringMID.='</form>';

//get the RHS panel content
$panelHeadRHS='<h3>Side Notes</h3>';
$stringRHS='';
$stringRHS.='<p>MVC= Model View Controller</p>';



//get the result
$panelHeadResult='<h3>Result</h3>';
$result='';
$result.='<table class="table table-striped"><tbody>';
if (isset($_POST['btn_add'])){  //check that the button has been pressed
	$result.='<tr><td>The SUM of '.$_POST['value1'];
	$result.=' and '.$_POST['value2'];
	$result.=' is = '.sum($_POST['value1'],$_POST['value2']).'</td></tr>';
	}
else if (isset($_POST['btn_subtract'])){  //check that the button has been pressed
	$result.='<tr><td>The DIFFERENCE of '.$_POST['value1'];
	$result.=' and '.$_POST['value2'];
	$result.=' is = '.diff($_POST['value1'],$_POST['value2']).'</td></tr>';
	}
else if (isset($_POST['btn_table'])){  //check that the button has been pressed			
	$val1=$_POST['value1'];
	for ($i=1;$i<=$_POST['value2'];$i++)
		{
		$result.='<tr><td>'.$_POST['value1'].'</td><td>Times</td><td> '.$i.'</td><td> = '.mult($val1,$i).'</td></tr>';
		}	
	}
else //the form has not been submitted
	{
	$result.="<tr><td>Please enter some values in the form.</td></tr>";
	}
$result.='</tbody></table>';

?>