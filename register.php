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

?>
<fieldset>
<legend>Delegate Card Registeration</legend>
<form name="regForm" id="regForm" method="get" action="register2.php">
<table>
<tr><td>Registration No.</td><td><input type="text" name="regno" class="required number" minlength="9" maxlength="9"></td>
<tr><td><input type="submit" name="submit" value="Submit"></td><td><input type="reset" name="reset" value="Reset"></td></tr>
<table>
</form>


</div>
<div id="footer"><?php include_once 'footer.php'; ?></div>
</body>
</html>

