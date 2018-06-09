<?php
$sql= mysqli_query($conn,"SELECT MAX(G_ID) FROM groups") or die(mysqli_error($conn));
        $result = array();
        while($row = mysqli_fetch_assoc($sql)){
              $result = $row;
        }

foreach ($result as $MAX_ID) {

}
?>
