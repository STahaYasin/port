<?php
$scores= mysqli_query($conn,"SELECT * FROM scores WHERE G_ID=$group_id") or die(mysqli_error($conn));
        $scoreinfo = array();
        while($rowscore = mysqli_fetch_assoc($scores)){
              $scoreinfo[] = $rowscore;
        }
 ?>
