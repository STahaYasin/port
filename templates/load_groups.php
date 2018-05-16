<?php

$prj= mysqli_query($conn,"select * from groups") or die(mysqli_error($conn));
        $record = array();
        while($row = mysqli_fetch_assoc($prj)){
            $record[] = $row;
        }
?>
