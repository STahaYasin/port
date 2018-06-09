<?php

$lvl= mysqli_query($conn,"SELECT * FROM levels WHERE LVL_ID=$sltlvl") or die(mysqli_error($conn));
        $lvlinfo = array();
        while($rowlvl = mysqli_fetch_assoc($lvl)){
              $lvlinfo[] = $rowlvl;
        }
 ?>
