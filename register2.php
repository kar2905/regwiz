<html>
<head>
<title>RegWiz- Techtatva 10 Registrations </title>
<link rel="stylesheet" href="main.css" type="text/css" />

</head>

<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/validate.js"></script>

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
include_once 'class.inc.php';
$d=new Delegate();
$regd=$_GET['regno'];
if($regd)
$res=$d->getInfo($regd);
if(is_array($res))
{
	


if(isset($_POST['submit']))
{

	echo "Your Delegate Card No. is : TT".$d->add($_POST['regno'],$_POST['name'],$_POST['contact'],$_POST['email']);
}
else
{
	
?>

<form method="post" name="regForm" id="regForm">
Name: 
<input type="text" name="name" value="<?= $res['Name'] ?>">
<br/><br/>Registration No.
<input type="text" name="regno" value="<?= $res['RegdNo'] ?>">
<br/><br/>Email

<input type="text" name="email" value="<?= $res['Email'] ?>">
<br/><br/>Contact No.
<input type="text" name="contact" value="<?= $res['Contact'] ?>">
<br/><br/>College
<input type="text" name="college" value="MIT, Manipal">
<br/><br/>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">

</form>
<?php
}
}
else
{
	echo "Please enter RegdNo properly. Click <a href='register.php'>here</a>";
}
?>

</div>
<div id="footer"><?php include_once 'footer.php'; ?></div>
</body>
</html>

