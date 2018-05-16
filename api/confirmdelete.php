<link href="../css/default.css" type="text/css" rel="stylesheet"/>
<?php
include '../db.php';

$gid = $_GET['G_ID'];

$prj = mysqli_query($conn,"select * from groups") or die(mysqli_error($conn));
        $record = array();
        while($row = mysqli_fetch_assoc($prj)){
            $record[] = $row;
        }
        foreach ($record as $rec) {
          $gname = $rec['Name'];
        }


echo '<div class="centerdiv">';
echo 'Do you really want to DELETE group '; echo $gname; echo '? <br>';
echo '<a class="alertstopbutton" href="deleteaction.php?G_ID='.$gid.'">YES</a>';
echo '<a class="alertstopbutton" href="../index.php#!/groups">NO</a>';
echo '<div>'
?>
