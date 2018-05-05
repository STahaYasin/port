<?php

include '../db.php';
include '../result.php';

$dbinfo = mysqli_query($conn,"SELECT Name, G_ID, Status FROM groups");
$dbinfoname  = mysqli_fetch_array($dbinfo);
$name = utf8_encode(ucwords($dbinfoname['Name']));
$id = utf8_encode(ucwords($dbinfoname['G_ID']));
$status = utf8_encode(ucwords($dbinfoname['Status']));
  if ($status=='0') {
    $status = 'Stoppped';
  }else {
    if ($status=='1')
            $status = 'Running';
  else {
    if ($status=='2') {
            $status = 'Paused';
    }
  }
}
?>

<html>

  <body>
    <table>
      <tr>
        <th>GROUP NAME</th>
        <th>ID</th>
        <th>STATUS</th>
      </tr>
      <tr class="testetr">
        <td><?php echo $name ?></td>
        <td><?php echo $id ?></td>
        <td><?php echo $status ?></td>
      </tr>
    </table>
  </body>
</html>
