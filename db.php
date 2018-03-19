<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "port";

$conn = mysqli_connect($host, $user, $password, $database);
if(!$conn) die(json_encode(new Result(false, "Error in db!", null)));

?>