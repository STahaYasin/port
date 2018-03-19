<?php

include "../db.php";
include "../result.php";

session_start();
if(!isset($_SESSION["admin_id"])){
    die(json_encode(new Result(false, "Invalid session!", null)));
}

$postdata = file_get_contents("php://input");
$req = json_decode($postdata);

if($req == null){
    die(json_encode(new Result(false, "Email and password are required!", null)));
}

if(empty($req->countstudents)){
    die(json_encode(new Result(false, "Count of students is required!", null)));
}
if(empty($req->countgroups)){
    die(json_encode(new Result(false, "Count of students is required!", null)));
}

$cs = $req->countstudents;
$cg = $req->countgroups;

$name = " (" . $req->name . ")";
if(empty($req->name)){
    $name = "";
}
$code;
if(empty($req->code)){
    $code = rand(2149, 9132);
}
else{
    $code = $req->code;
}


$date = date("Y-m-d H:i:s");
$newname = $date . $name;

$ad_id = $_SESSION["admin_id"];

$sql = "INSERT INTO `groups` (`G_ID`, `CountUsers`, `CountTeams`, `Status`, `Name`, `dt_create`, `dt_start`, `dt_stop`, `code`, `AD_ID`) VALUES (null, '$cs', '$cg', '0', '$newname', '$date', '', '', '$code', '$ad_id');";

$sqlres = mysqli_query($conn, $sql) or die(json_encode(new Result(false, "Error in db!", null)));
$last_id = $conn->insert_id;

if($sqlres){
    die(json_encode(new Result(true, "Inserted new group", $last_id)));
}

die(json_encode(new Result(false, "PHP error!", null)));

?>