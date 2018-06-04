<?php

include "result.php";
include '../db.php';

$userid = $_POST["userid"];
$x = $_POST["x"];
$y = $_POST["y"];
$level = $_POST["level"];

if($userid == null || $userid == ""){
    $res->success = false;
    $res->message = "User id is required!";
    $res->data = null;
    
    die(json_encode($res));
}

$sqluser = "SELECT * FROM users WHERE U_ID = $userid";
$res = new Result();
$res->success = false;
$res->message = "Server error 2";
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

$updatesql = "UPDATE `users` SET `x` = $x, `y` = $y, `level` = '$level' WHERE `users`.`U_ID` = $userid";

if ($conn->query($updatesql) === TRUE) {

} else {
    $res = new Result();
    $res->success = false;
    $res->message = "Server error 1";
    $res->data = null;
    die(json_encode($res));
}

$teamid = $user["T_ID"];
$sqlgetotherpositions = "Select U_ID, x, y, level from users where T_ID = $teamid and U_ID != $userid";

$prj= mysqli_query($conn, $sqlgetotherpositions) or die(mysqli_error($conn));
$users = array();
while($row = mysqli_fetch_assoc($prj)){
    $user = new userclass();
    $user->userid = (int)$row["U_ID"];
    $user->x = $row["x"];
    $user->y = $row["y"];
    $user->level = $row["level"];
    
    array_push($users, $user);
}

$res = new Result();
$res->success = true;
$res->message = "";
$res->data = $users;

die(json_encode($res));



class userclass{
    public $userid;
    public $x;
    public $y;
    public $level;
}
?>