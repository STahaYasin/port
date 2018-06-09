<?php

$data = json_decode(file_get_contents('php://input'), true);
$grp_name = $data["group_name"];
$grp_number = $data["group_number"];

include "../db.php";
include "../result.php";



session_start();
if(!isset($_SESSION["admin_id"])){
    die(json_encode(new Result(false, "Invalid session!", null)));
}

$teams_count = ceil($grp_number/5);

$code;
if(empty($req->code)){
    $code = rand(2149, 9132);
}
else{
    $code = $req->code;
}

$date = time();
$newname = $grp_name;

$ad_id = $_SESSION["admin_id"];

$sql = "INSERT INTO `groups` (`CountTeams`,`G_ID`, `CountUsers`, `Status`, `Name`, `dt_create`, `dt_start`, `dt_stop`, `code`, `AD_ID`)
        VALUES ('$teams_count', null, '$grp_number', '0', '$newname', '$date', '', '', '$code', '$ad_id');";


$sqlres = mysqli_query($conn, $sql) or die(json_encode(new Result(false, "Error in db!", null)));

include "load_db/max_id.php";

// ADD TEAMS
$a = 1;

while ($a <= $teams_count) {
  $sqlteams = "INSERT INTO `teams` (`T_ID`, `G_ID`)
          VALUES (null, '$MAX_ID');";
          $sqlresteams = mysqli_query($conn, $sqlteams) or die(json_encode(new Result(false, "Error in db!", null)));
          $a++;

          $sqlteamid= mysqli_query($conn,"SELECT MAX(T_ID) FROM teams") or die(mysqli_error($conn));
                  $resultteamid = array();
                  while($rowteamid = mysqli_fetch_assoc($sqlteamid)){
                        $resultteamid = $rowteamid;
                  }

          foreach ($resultteamid as $TEAM_ID) {

          }

//ADD SCORE
  $sqlscores = "INSERT INTO `scores` (`S_ID`, `T_ID`, `TimeStamp`, `SCORE`)
          VALUES (null, '$TEAM_ID', '$date', 0);";
          $sqlresscore = mysqli_query($conn, $sqlscores) or die(json_encode(new Result(false, "Error in db!", null)));
          $b++;
}
$id = $conn->insert_id;

$res = new Result(true, "ok", $id);

die(json_encode($res));



?>
