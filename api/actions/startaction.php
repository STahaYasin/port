<?php
include '../../db.php';

$gid = $_GET['G_ID'];
$current_timestamp = time();

  $sqlupdate = "UPDATE groups SET status=1, dt_start=$current_timestamp  WHERE G_ID=$gid";
  if($conn->query($sqlupdate) === TRUE) {
      header('location: ../../index.php#!/groups');
} else{
      echo 'Error while updating status';
}
?>
