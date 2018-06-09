<?php
include '../../db.php';

$gid2 = $_GET['G_ID'];

$sqldeletegroup = "DELETE FROM groups WHERE G_ID=$gid2";

$prj= mysqli_query($conn, "select teams.T_ID FROM teams WHERE teams.G_ID = $gid2") or die(mysqli_error($conn));
while($row = mysqli_fetch_assoc($prj)){
    $tid = $row["T_ID"];

    $sqldeletescores= mysqli_query($conn,"DELETE FROM scores WHERE T_ID = $tid");
    if((($conn->query($sqldeletescores))) === TRUE) {

    }
}

$sqldeleteteams= mysqli_query($conn,"DELETE FROM teams WHERE G_ID=$gid2");


  if((($conn->query($sqldeletegroup))&&($conn->query($sqldeleteteams)))) {
      header('location: ../../index.php#!/history');
} else{
      header('location: ../../index.php#!/history');
}
?>
