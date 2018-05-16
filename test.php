<?php
  include 'db.php';
  $id = 0;
  $a = 0;
  $prj= mysqli_query($conn,"select * from groups") or die(mysqli_error($conn));
          $record = array();
          while($row = mysqli_fetch_assoc($prj)){
              $record[$id] = $row;
              $id++;
          }
          while($a <= $id){
              echo $record[$a]['Name'] . '<br>';
              $a++;
          }
?>
