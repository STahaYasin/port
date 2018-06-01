<?php
include '../../db.php';

$gid2 = $_GET['G_ID'];

$sqldeletegroup = "DELETE FROM groups WHERE G_ID=$gid2";

$sqldeleteteams= mysqli_query($conn,"DELETE FROM teams WHERE G_ID=$gid2");


  if((($conn->query($sqldeletegroup))&&($conn->query($sqldeleteteams))) === TRUE) {
      header('location: ../../index.php#!/groups');
} else{
      header('location: ../../index.php#!/groups');
}
?>
