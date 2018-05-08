<?php
$dbinfo = mysqli_query($conn,"SELECT Name, G_ID, Status FROM groups");
$dbinfoname  = mysqli_fetch_array($dbinfo);
$name = utf8_encode(ucwords($dbinfoname['Name']));
$id = utf8_encode(ucwords($dbinfoname['G_ID']));
$status = utf8_encode(ucwords($dbinfoname['Status']));
$currentbtn = "";

switch ($status) {
  case '0':
    $statusoutp = 'Stoppped';
    $currentbtn = 'Start';
    break;
  case '1':
    $statusoutp = 'Running';
    $currentbtn = 'Pause';
    break;
  case '2':
    $statusoutp = 'Paused';
    $currentbtn = 'Resume';
    break;
  default:
    $statusoutp = '';
    break;
}
?>
