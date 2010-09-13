<html>
<head>
<title>RegWiz- Techtatva 10 Registrations </title>
<link rel="stylesheet" href="main.css" type="text/css" />

</head>
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
		echo "<table>
				  <tr>
					  <td>Del No </td>
				  </tr>
			
			  ";
		foreach($res as $r)
		{
			echo "<tr><td>".$r."</td></tr>";
		}
	}
			
}
else
{
	
		
if($type=="ce")
{
	echo "<form method='post'>Delegate Card No. <input type='text' name='delNo'><br/><br/>
<input type='submit' name='submit' value='Submit'>
<input type='reset' name='reset' value='Reset'></form>";
}
else if($type=="ae")
{
	echo "<form method='post'>Delegate Card No. <input type='text' name='delNo'><br/><br/>
<input type='submit' name='submit' value='Submit'>
<input type='reset' name='reset' value='Reset'></form>";
}
else if($type=="se")
{
	echo "<form method='post'>Team No. <input type='text' name='teamNo'><br/><br/>
<input type='submit' name='submit' value='Submit'>
<input type='reset' name='reset' value='Reset'></form>";
}
}
?>
</div>
<div id="footer"><?php include_once 'footer.php'; ?></div>
</body>
</html>
