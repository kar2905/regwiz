<div id="sidebar">
<?php
include_once 'class.inc.php';

echo "Delegate Registration</a>";
echo "<br/>";
echo "<a href='register.php'>Delegate Registration</a>";
echo "<br/>";
echo "<a href='outregister.php'>Outstation Registration</a>";
echo "<br/>";
echo "Team Registration";
echo "<br/>";
echo "<a href='team.php?type=ce'>Create Team</a>";
echo "<br/>";
echo "<a href='team.php?type=se'>Show Team</a>";
echo "<br/>";
echo "<a href='team.php?type=ae'>Add to Team</a>";
echo "<br/>";
echo "Categories<br/>";
$c=new Category();
$cats=$c->getCategories();
foreach($cats as $cat)
echo "<a href='regevent.php?cid=".$cat['CID']."'>".$cat['Name']."</a><br/>";
echo "View </br>";

echo "<a href='view.php?view=e'>View Events Summary</a><br />";
echo "<a href='view.php?view=c'>View Category Summary</a><br />";
echo "<a href='team.php?type=se'>View Team Details</a><br />";
echo "<a href='view.php?view=d'>View Delegate Details</a><br />";

?>

</div>
