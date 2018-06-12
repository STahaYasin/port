<?php

include "result.php";
include '../db.php';

$res = new Result();

$groupid = $_POST["groupid"];
$teamid = $_POST["teamid"];
$userid = $_POST["userid"];

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

$sql_get_group = "SELECT * FROM `teams` WHERE `T_ID` = '$teamid' AND `G_ID` = '$groupid'";
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

$res = new Result();
$res->success = false;
$res->message = "Server error";
$res->data = null;
$sql_res_count = mysqli_query($conn, $sqlcount) or die (json_encode($res));
$count = mysqli_fetch_assoc($sql_res_count);

if($count == null){
    $res = new Result();
    $res->success = false;
    $res->message = "Team does not excist!";
    $res->data = null;
    die(json_encode($res));
}

if((int)$count["count"] >= 5){
    $res = new Result();
    $res->success = false;
    $res->message = "Team already filled up";
    $res->data = (int)$count["count"];
    die(json_encode($res));
}

$co = (int)$count["count"] + 1;

$sqluser = "SELECT * FROM users WHERE U_ID = $userid";

$res = new Result();
$res->success = false;
$res->message = "Server error";
$res->data = null;
$sql_res_user = mysqli_query($conn, $sqluser) or die (json_encode($res));
$user = mysqli_fetch_assoc($sql_res_user);

if($user == null){
    $res = new Result();
    $res->success = false;
    $res->message = "User does not excist!";
    $res->data = null;
    die(json_encode($res));
}


$sql_update = "UPDATE `users` SET `T_ID` = $teamid WHERE `users`.`U_ID` = $userid";
$sql_update = "UPDATE `users` SET `T_ID` = $teamid, `character` = $co WHERE `users`.`U_ID` = $userid;";

if ($conn->query($sql_update) === TRUE) {
    $res = new Result();
    $last_id = $conn->insert_id;
    $res->success = true;
    $res->message = "User updated successfully";
    $res->data = (int)$teamid;
    $res->data2 = (int)$co;
    die(json_encode($res));
} else {
    $res = new Result();
    $res->success = false;
    $res->message = "Server error";
    $res->data = null;
    die(json_encode($res));
}

?>
