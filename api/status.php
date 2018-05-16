<?php
switch ($rec['Status']) {
  case '0':
    $statusoutp = 'Stoppped';
    echo 'Stoppped';
    break;
  case '1':
    $statusoutp = 'Running';
    echo 'Running';
    break;
  case '2':
    $statusoutp = 'Paused';
    echo 'Paused';
    break;
  default:
    $statusoutp = 'Error: Game Status';
    break;
}
 ?>
