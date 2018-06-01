<?php
include '../db.php';

$finishedgroups= mysqli_query($conn,"SELECT * FROM `groups` WHERE STATUS = 3") or die(mysqli_error($conn));
$historygroups = array();
while($finishedgroupsrow = mysqli_fetch_assoc($finishedgroups)){
    $historygroups[] = $finishedgroupsrow;
}

?>
