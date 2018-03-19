<?php

include "../db.php";
include "../result.php";

session_start();

$challenge = $_SESSION["login_challenge"];
$_SESSION["login_challenge"] = null;

session_unset();
session_destroy();


$postdata = file_get_contents("php://input");
$req = json_decode($postdata);

if($req == null){
    die(json_encode(new Result(false, "Email and password are required!", null)));
}

if($req->email == null || $req->email == ""){
    die(json_encode(new Result(false, "Email and password are required!", null)));
}
if($req->hash == null || $req->email == ""){
    die(json_encode(new Result(false, "Email and password are required!", null)));
}

$email = $req->email;
$hash = $req->hash;

$sql_salt = "SELECT admins.hash, admins.AD_ID FROM `admins` WHERE admins.email = '$email' limit 1";
$sql_result_node = mysqli_query($conn, $sql_salt) or die (json_encode(new Result(false, "SQL error", null)));
$salt = mysqli_fetch_assoc($sql_result_node);

if(!$salt) die(json_encode(new Result(false, "Incorect username or password!", null)));

$hashInDB = $salt["hash"];

$hash2 = hash("sha512", $hashInDB . $challenge);
//die($salt["hash"] . "\r\n" . $challenge . "\r\n" . $hash2);

if($hash2 === $hash){
    session_start();
    $_SESSION["admin_id"] = $salt["AD_ID"];
    die(json_encode(new Result(true, "Login success!", null)));
}
else{
    die(json_encode(new Result(false, "Incorect username or password!", $hash2)));
}

?>