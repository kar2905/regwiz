<html>
<head>
<title>RegWiz- Techtatva 10 Registrations </title>
<link rel="stylesheet" href="main.css" type="text/css" />

</head>
<body>
<div id="header">
<?php include_once 'header'; ?>
</div>
<div id="sidebaar">
<?php include_once 'sidebar.php'; ?>
</div>
<div id="content">
<?php
include_once 'class.inc.php';
$d=new Delegate();
if(isset($_POST['submit']))
{

	echo "Your Delegate Card No. is : TT".$d->add($_POST['regno'],$_POST['name'],$_POST['contact'],$_POST['email']);
}
else
{
	
?>

<form method="post">
Name: 
<input type="text" name="name">
<br/><br/>Registration No.
<input type="text" name="regno">
<br/><br/>Email

<input type="text" name="email">
<br/><br/>Contact No.
<input type="text" name="contact">
<br/><br/>College
<input type="text" name="college" value="MIT, Manipal">
<br/><br/>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">

</form>
<?php
}
?>

</div>
<div id="footer"><?php include_once 'footer.php'; ?></div>
</body>
</html>

