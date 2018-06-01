<?php
$score= mysqli_query($conn,"SELECT * FROM scores") or die(mysqli_error($conn));
        $scoreinfo = array();
        while($rowscore = mysqli_fetch_assoc($score)){
              $scoreinfo[] = $rowscore;
        }

$team= mysqli_query($conn,"SELECT * FROM teams") or die(mysqli_error($conn));
        $teaminfo = array();
        while($rowteam = mysqli_fetch_assoc($team)){
              $teaminfo[] = $rowteam;
        }
 ?>
