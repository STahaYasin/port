<?php
include '../../db.php';

$gid2 = $_GET['G_ID'];
$current_timestamp = time();

  $sqlupdate = "UPDATE groups SET status=3, dt_stop=$current_timestamp WHERE G_ID=$gid2";
  if($conn->query($sqlupdate) === TRUE) {
      header('location: ../../index.php#!/groups');
} else{
      echo 'Error while updating status';
}
?>
