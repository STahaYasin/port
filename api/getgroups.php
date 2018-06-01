<?php

include '../db.php';
include '../result.php';

$prj= mysqli_query($conn,"SELECT * FROM `groups` WHERE STATUS != 3") or die(mysqli_error($conn));
$record = array();
while($row = mysqli_fetch_assoc($prj)){
    $record[] = $row;
}


$lvl= mysqli_query($conn,"select * from levels") or die(mysqli_error($conn));
$lvlinfo = array();
while($rowlvl = mysqli_fetch_assoc($lvl)){
    $lvlinfo[] = $rowlvl;
}

$groups = Array();

foreach($record as $rec){
    $group = new Group();
    $group->name = $rec['Name'];
    $group->g_id = $rec['G_ID'];
    $group->status = $rec['Status'];

    array_push($groups, $group);
}

$res = new Result(true, "ok", $groups);
die(json_encode($res));

class Group{
    public $name;
    public $g_id;
    public $status;
}
?>
