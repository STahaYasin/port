<?php

include '../db.php';
include '../result.php';

$dbinfo = mysqli_query($conn,"SELECT Name, G_ID FROM groups");
$dbinfoname  = mysqli_fetch_array($dbinfo);
$name = utf8_encode(ucwords($dbinfoname['Name']));
$id = utf8_encode(ucwords($dbinfoname['G_ID']));
echo "TEAM: " . $name . " | ID: " . $id;
?>
