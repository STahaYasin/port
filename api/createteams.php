<?php
$a = 1;

while ($a <= $teams_count) {
  $sqlteams = "INSERT INTO `teams` (`T_ID`, `G_ID`)
          VALUES (null, '$MAX_ID');";
          $sqlresteams = mysqli_query($conn, $sqlteams) or die(json_encode(new Result(false, "Error in db!", null)));
          $a++;
}
/*
while ($b <= $teams_count) {
  $sqlscores = "INSERT INTO `scores` (`S_ID`, `T_ID`, `TimeStamp`, `SCORE`)
          VALUES (null, '$MAX_ID', '$timestamp', 0);";
          $sqlresscore = mysqli_query($conn, $sqlscores) or die(json_encode(new Result(false, "Error in db!", null)));
          $b++;
}*/
?>
