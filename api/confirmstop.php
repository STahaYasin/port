<link href="../css/default.css" type="text/css" rel="stylesheet"/>
<?php
include '../db.php';

$gid = $_GET['G_ID'];
$confirm = 0;

echo '<div class="centerdiv">';
echo 'Do you really want to STOP game? <br>';
echo '<a class="alertstopbutton" href="stopaction.php?G_ID='.$gid.'">YES</a>';
echo '<a class="alertstopbutton" href="../index.php#!/groups">NO</a>';
echo '<div>'
?>
