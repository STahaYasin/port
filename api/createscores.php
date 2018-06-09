<?php
$b = 1;

while ($b <= $teams_count) {
  $sqlscores = "INSERT INTO `scores` (`S_ID`, `T_ID`, `TimeStamp`, `SCORE`)
          VALUES (null, 20, '$date', 0);";
          $sqlresscore = mysqli_query($conn, $sqlscores) or die(json_encode(new Result(false, "Error in db!", null)));
          $b++;
          echo $b;
}
?>
