<?php

include "result.php";
include '../db.php';

$res = new Result();

$group_id = $_POST["groupid"];
$group_key = $_POST["groupkey"];
$user_name = $_POST["username"];

if($group_id == null || $group_id == ""){
    $res->success = false;
    $res->message = "Group id is required!";
    $res->data = null;
    
    die(json_encode($res));
}
if($group_key == null || $group_key == ""){
    $res->success = false;
    $res->message = "Group key is required!";
    $res->data = null;
    
    die(json_encode($res));
}
if($user_name == null || $user_name == ""){
    $res->success = false;
    $res->message = "Username is required!";
    $res->data = null;
    
    die(json_encode($res));
}

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
    $res->message = "This game is already finnished, please try another group";
    $res->data = null;
    die(json_encode($res));
}

if($group["code"] != $group_key){
    $res = new Result();
    $res->success = false;
    $res->message = "The code you entered is wrong, please try again";
    $res->data = null;
    die(json_encode($res));
}

//Controll on the count of students

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