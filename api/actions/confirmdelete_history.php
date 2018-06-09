<link href="../../css/default.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<?php
include '../../db.php';

$gid = $_GET['G_ID'];

$prj = mysqli_query($conn,"SELECT Name FROM groups WHERE G_ID=$gid") or die(mysqli_error($conn));
        $record = array();
        while($row = mysqli_fetch_assoc($prj)){
            $record[] = $row;
        }
        foreach ($record as $rec) {
          $gname = $rec['Name'];
        }


echo '<div class="exclamation_triangle"><i class="fas fa-exclamation-triangle" style="color:red;font-size:60px"></i></div>
      <div class="centerdiv">
        Do you really want to DELETE group '; echo $gname; echo '? <br>
        <a class="alertstopbutton" href="deleteaction_history.php?G_ID='.$gid.'">YES</a>
        <a class="alertstopbutton" href="../../index.php#!/history">NO</a>
      <div>'
?>
