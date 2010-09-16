<html>
<head>
<title>RegWiz- Techtatva 10 Registrations </title>
<link rel="stylesheet" href="main.css" type="text/css" />

</head>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
<script type="text/javascript" language="JavaScript">
$(document).ready(function(){
		$("#regForm").validate();
});
		
</script>


<body>
<div id="header">
<?php include_once 'header.php'; ?>
</div>
<div id="sidebaar">
<?php include_once 'sidebar.php'; ?>
</div>
<div id="content">
<?php
$type=$_GET['type'];
$t= new Team();
if(isset($_POST['submit']))
{
	if($type=="ce")
	{
		echo $t->createTeam($_POST['delNo']);
	}
	else if($type=="se")
	{
		$res=$t->getMembers($_POST['teamNo']);
		echo "<table border='1'>
				  <tr>
					  <td>Del No </td>
				  </tr>
			
			  ";
		foreach($res as $r)
		{
			echo "<tr><td>".$r."</td></tr>";
		}
	}
	else if($type=="ae")
	{
		echo $t->addToTeam($_POST['delNo'],$_POST['teamNo']);
	}
			
}
else
{
	
		
if($type=="ce")
{

$str=<<<display
<fieldset>
<legend>Create Team</legend>
<form method='post' id="regForm" name="regForm">
<table>
<tr>
<td>Delegate Card No. </td><td><input type='text' name='delNo' class="required number"></td>
</tr>
<tr><td><input type='submit' name='submit' value='Submit'></td><td><input type='reset' name='reset' value='Reset'></td></tr>
</table>
</form>
</fieldset>
display;

echo $str;
}
else if($type=="ae")
{
$str=<<<display
<fieldset><legend>Add to Team</legend>
<form method='post' id="regForm" name="regForm" >
<table>
<tr>
<td>Delegate Card No. </td><td><input type='text' name='delNo' class='required number'></td>
</tr>
<tr>
<td>Team No. </td><td><input type='text' name='teamNo' class="required number"></td>
</tr>
<tr>
<td><input type='submit' name='submit' value='Submit'></td><td><input type='reset' name='reset' value='Reset'></td>
</tr>
</form>
display;

echo $str;
}
else if($type=="se")
{

$str=<<<display
<fieldset>
<legend>Show Team</legend>
<form method='post'id="regForm" name="regForm">
<table>
<tr>
<td>Team No. </td><td><input type='text' name='teamNo' class='required'></td>
</tr>
<tr><td><input type='submit' name='submit' value='Submit'></td><td><input type='reset' name='reset' value='Reset'></td></tr>
</table>
</form>
</fieldset>
display;
echo $str;
}
}
?>
</div>
<div id="footer"><?php include_once 'footer.php'; ?></div>
</body>
</html>
