<?php
include 'load_db/max_id.php';
$a = 1;
$b = 1;

while ($a <= $teams_count) {
  $sqlteams = "INSERT INTO `teams` (`T_ID`, `G_ID`, `GRPT_ID`)
          VALUES (null, '$MAX_ID', '$a');";
          $sqlresteams = mysqli_query($conn, $sqlteams) or die(json_encode(new Result(false, "Error in db!", null)));
          $a++;
}

while ($b <= $teams_count) {
  $sqlscores = "INSERT INTO `scores` (`SCORE_ID`, `T_ID`, `G_ID`, `SCORE`)
          VALUES (null, '$b', '$MAX_ID', 0);";
          $sqlresscore = mysqli_query($conn, $sqlscores) or die(json_encode(new Result(false, "Error in db!", null)));
          $b++;
}
?>
