<?php

include '../db.php';

$sql = "SELECT Name, status FROM groups WHERE Name='Port Team'";
$result = mysqli_query($conn, $sql);
while ($row = $result->fetch_assoc()) {
    $nameteam = $row['Name'];
    $currentstatus = $row['status'];
}
if ($currentstatus!=1) {
  $sqlupdate = "UPDATE groups SET status=1 WHERE Name='$nameteam'";
  if($conn->query($sqlupdate) === TRUE) {
      echo 'Sucessly updated';
      header('location: ../index.php#!/groups');
  } else {
      echo  $conn->error;
  }
} else{
      echo 'Game already running';
}
?>
