<?php

include "../result.php";
include "../db.php";

if(!isset($_GET["email"])){
    die(json_encode(new Result(false, "Email is required to get the salt!", null)));
}

$email = $_GET["email"];

if($email == null || $email == ""){
    die(json_encode(new Result(false, "The email cannot be empty!", null)));
}

$sql_salt = "SELECT admins.salt FROM `admins` WHERE admins.email = '$email' limit 1";
$sql_result_node = mysqli_query($conn, $sql_salt) or die (json_encode(new Result(false, "SQL error", null)));
$salt = mysqli_fetch_assoc($sql_result_node);

if(!$salt) die(json_encode(new Result(false, "No salt found for this email!", null)));

session_start();

$id = session_id();

$challenge = bin2hex(openssl_random_pseudo_bytes (32));
$_SESSION["login_challenge"] = $challenge;


die(json_encode(new Result(true, "salt ok", new SaltClass($salt["salt"], $challenge, $id))));

class SaltClass{
    public $salt;
    public $challenge;
    public $sessionid;
    
    public function __construct($s, $c, $i){
        $this->salt = $s;
        $this->challenge = $c;
        $this->sessionid = $i;
    }
}

?>