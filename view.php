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
<?php 
	include_once 'class.inc.php';
	include_once 'sidebar.php'; 
?>
</div>
<div id="content">
<?php
	$view = $_GET['view'];
	
	if($view=="e")
	{
		$event = new Event();
		$res = $event->getEvents();
		echo "<table border='1'>
			<tr><td>Event Name</td><td>Partcipants</td></tr>
		";

		foreach($res as $r){
			echo "<tr><td>".$r['Ename']."</td><td>".$r['TCount']."</td></tr>";
		}
	}
	if($view=="c"){
		$cat = new Category();
		$res = $cat->getCatSummary();
		echo "<table border='1'>
			<tr><td>Category Name</td><td>Partcipants</td></tr>
		";
		foreach($res as $r){
			echo "<tr><td>".$r['Cname']."</td><td>".$r['TCount']."</td></tr>";
		}
	}
	if($view=='d'){
		$del = new Delegate();
		if(isset($_POST['submit']))
		{	
			echo "<table>";
			$res = $del->get($_POST['del']);
			foreach($res as $r){
				echo "<tr><td>";	
				echo $r;
				echo "</td></tr>";
			}
			echo "</table>";
			echo "Events Participated in <br />";
			$res = $del->part($_POST['del']);
			foreach($res as $r){
				echo $r['EName'];
			}
		}else{
$str =<<<display
<form method="post">
<table>
<tr><td>Delegate Card No</td><td><input type="text" name="del"></td></tr>
<tr><td><input type="submit" name="submit" value="Submit"</td><td><input type="reset" name="reset"></td></tr>
display;
echo $str;
		}	
	}
?>

</div>
<div id="footer"><?php include_once 'footer.php'; ?></div>
</body>
</html>

