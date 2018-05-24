<?php
include '../../db.php';

$gid = $_GET['G_ID'];

  $sqlupdate = "UPDATE groups SET status=1 WHERE G_ID=$gid";
  if($conn->query($sqlupdate) === TRUE) {
      header('location: ../../index.php#!/groups');
} else{
      echo 'Error while updating status';
}
?>
