<?php

include "result.php";

$res = new Result();

$group_id = $_POST["group_id"];
$group_key = $_POST["group_key"];
$user_name = $_POST["user_name"];

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



?>