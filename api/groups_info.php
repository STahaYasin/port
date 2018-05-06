<?php
$dbinfo = mysqli_query($conn,"SELECT Name, G_ID, Status FROM groups");
$dbinfoname  = mysqli_fetch_array($dbinfo);
$name = utf8_encode(ucwords($dbinfoname['Name']));
$id = utf8_encode(ucwords($dbinfoname['G_ID']));
$status = utf8_encode(ucwords($dbinfoname['Status']));
$currentbtn = "";
  if ($status=='0') {
    $status = 'Stoppped';
    $currentbtn = 'Start';
  }else {
    if ($status=='1'){
            $status = 'Running';
            $currentbtn = 'Pause';
          }
  else {
    if ($status=='2') {
            $status = 'Paused';
            $currentbtn = 'Resume';
    }
  }
}
?>
