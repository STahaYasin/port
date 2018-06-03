<?php

include "result.php";
include '../db.php';

$res = new Result();

$groupid = $_POST["groupid"];
$teamid = $_POST["teamid"];

if($groupid == null || $groupid == ""){
    $res->success = false;
    $res->message = "Group id is required!";
    $res->data = null;
    
    die(json_encode($res));
}
if($teamid == null || $teamid == ""){
    $res->success = false;
    $res->message = "Group key is required!";
    $res->data = null;
    
    die(json_encode($res));
}

$sql_get_group = "SELECT * FROM `teams` WHERE `T_ID` = '$groupid' AND `G_ID` = '$teamid'";
$res = new Result();
$res->success = false;
$res->message = "Server error";
$res->data = null;
$sql_res_group = mysqli_query($conn, $sql_get_group) or die (json_encode($res));
$group = mysqli_fetch_assoc($sql_res_group);

if($group == null){
    $res = new Result();
    $res->success = false;
    $res->message = "Team does not excist!";
    $res->data = null;
    die(json_encode($res));
}

$sqlcount = "SELECT COUNT(*) as count FROM users WHERE `T_ID`= '$teamid'";


/////////////////////// Check for count, then update the teamid of the user

$sql_insert_user = "INSERT INTO `users` (`U_ID`, `T_ID`, `Name`, `x`, `y`, `level`) VALUES (NULL, NULL, '$user_name', '0', '0', '0');";
if ($conn->query($sql_insert_user) === TRUE) {
    $res = new Result();
    $last_id = $conn->insert_id;
    $res->success = true;
    $res->message = "User created successfully";
    $res->data = $last_id;
    die(json_encode($res));
} else {
    $res = new Result();
    $res->success = false;
    $res->message = "Server error";
    $res->data = null;
    die(json_encode($res));
}

?>