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
include_once 'class.inc.php';

?>

<form method="get" action="register2.php">
Registration No.
<input type="text" name="regno">

<br/><br/>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">

</form>


</div>
<div id="footer"><?php include_once 'footer.php'; ?></div>
</body>
</html>

