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
include_once 'class.inc.php';
$d=new Delegate();
if(isset($_POST['submit']))
{
	echo "Your Delegate Card No. is : TT".$d->add($_POST['regno'],$_POST['name'],$_POST['contact'],$_POST['email']);
}
else
{
	echo $_POST['name'];
?>

<fieldset value="Delegate Card Registration">
<legend>Delegate Card Registration</legend>
 <form id="regForm" method="post" >
<table>
   <tr>
     	<td>Name</td>
      	<td><input id="rname" name="name" size="25" class="required" /></td>
   </tr>
   <tr>
     	<td>Registration No</td>
      	<td><input id="rregno" name="regno" size="25" class="required number" minlength="9" maxlength="9" /></td>
   </tr>
   <tr>
     <td>E-Mail</td>
     <td><input id="remail" name="email" size="25"  class="required email" />
   </tr>
   <tr>
     <td>Contact No</td>
     <td><input id="rcontact" name="contact" size="25"  class="required number" minlength="10"/>
   </tr>
   <tr>
     <td>College</td>
     <td><input type="text" name="college" size="25" id="rcollege" value="" class="required">
   </tr>
   <tr colspan="2" align="center" >
   <td><input class="submit" name="submit" type="submit" value="Submit"/>&nbsp;&nbsp;<input class="reset" type="reset" value="Reset" /></td>
   </tr>
</table>
 </form>
</fieldset>
<?php
}
?>

</div>
<div id="footer"><?php include_once 'footer.php'; ?></div>
</body>
</html>

