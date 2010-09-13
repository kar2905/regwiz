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
if(isset($_POST['submit']))
{
	$e=new Event();
	foreach($_POST['events'] as $eid)
	$res=$e->addToEvent($_POST['id'],$eid);
	if($res)
	echo "Added";
	else
	echo "Error";
}
else
{
	?>
<form method="post">
<?php
include_once 'sidebar.php';
$cid=$_GET['cid'];
$c= new Category();
$events=$c->getEvents($cid);

foreach($events as $e)
{
	//var_dump($e['Name']);
	echo "<input type='checkbox' name='events[]' value='".$e['EID']."'>".$e['Name']."<br/>";
}
?>
<br/><br/>
Delegate Card No or Team Id : 
<input type="text" name="id">
<br/><br/>
<input type='submit' name='submit' value='Submit'>
<input type='reset' name='reset' value='Reset'>
</form>
<?php
}
?>
</div>
<div id="footer"><?php include_once 'footer.php'; ?></div>
</body>
</html>


