<?php
include '../db.php';

$gid2 = $_GET['G_ID'];

  $sqlupdate = "DELETE FROM groups WHERE G_ID=$gid2";
  if($conn->query($sqlupdate) === TRUE) {
      header('location: ../index.php#!/groups');
} else{
      echo 'Error while updating status';
}
?>
