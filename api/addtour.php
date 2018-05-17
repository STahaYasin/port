<?php

include "../db.php";
include "../result.php";

session_start();
if(!isset($_SESSION["admin_id"])){
    die(json_encode(new Result(false, "Invalid session!", null)));
}

$postdata = file_get_contents("php://input");
$req = json_decode($postdata);
$grp_name = $_POST['grp_name'];
$grp_number = $_POST['grp_number'];

$grp_count = ceil($grp_number/5);

$code;
if(empty($req->code)){
    $code = rand(2149, 9132);
}
else{
    $code = $req->code;
}

$date = date("Y-m-d H:i:s");
$newname = $grp_name;

$ad_id = $_SESSION["admin_id"];

$sql = "INSERT INTO `groups` (`CountTeams`,`G_ID`, `CountUsers`, `Status`, `Name`, `dt_create`, `dt_start`, `dt_stop`, `code`, `AD_ID`)
        VALUES ('$grp_count', null, '$grp_number', '0', '$newname', '$date', '', '', '$code', '$ad_id');";



$sqlres = mysqli_query($conn, $sql) or die(json_encode(new Result(false, "Error in db!", null)));
          $sucessmessage = 'Group added with success!';
          header('Location: ../index.php#!/newgroup');
/*
$last_id = $conn->insert_id;

if($sqlres){
    die(json_encode(new Result(true, "Inserted new group", $last_id)));
}

die(json_encode(new Result(false, "PHP error!", null)));
*/
?>
