<link href="../../css/default.css" type="text/css" rel="stylesheet"/>
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


echo '<div class="exclamation_triangle"><img src="..\..\images\icons\deletealertpic.png"></div>
      <div class="centerdiv">
        Do you really want to DELETE group '; echo $gname; echo '? <br>
        <a class="alertstopbutton" href="deleteaction_history.php?G_ID='.$gid.'">YES</a>
        <a class="alertstopbutton" href="../../index.php#!/history">NO</a>
      <div>'
?>
