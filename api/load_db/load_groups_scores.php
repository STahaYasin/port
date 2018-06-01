<?php
include '../db.php';
include '../result.php';
$group_id = $_GET['G_ID'];

$sql= mysqli_query($conn,"SELECT Name FROM groups WHERE G_ID=$group_id") or die(mysqli_error($conn));
        $record = array();
        while($row = mysqli_fetch_assoc($sql)){
              $gname[] = $row;
        }
?>
