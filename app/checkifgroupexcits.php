<?php

include "result.php";
include '../db.php';


$group_id = $_POST["groupid"];

$sql_get_group = "SELECT * FROM `groups` WHERE G_ID = $group_id limit 1";
$res = new Result();
$res->success = false;
$res->message = "Server error";
$res->data = null;
$sql_res_group = mysqli_query($conn, $sql_get_group) or die (json_encode($res));
$group = mysqli_fetch_assoc($sql_res_group);

if($group == null){
    $res = new Result();
    $res->success = false;
    $res->message = "Group does not excist!";
    $res->data = null;
    die(json_encode($res));
}

if($group["Status"] == 3){
    $res = new Result();
    $res->success = false;
    $res->message = "No, the group doesnt excist anymore";
    $res->data = null;
    die(json_encode($res));
}

$res = new Result();
$res->success = true;
$res->message = "group excists";
$res->data = null;

die(json_encode($res));

?>