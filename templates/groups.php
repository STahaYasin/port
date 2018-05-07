<?php

include '../db.php';
include '../result.php';
include '../api/groups_info.php';
?>

<html>



  <body>
    <table>
      <tr>
        <th>GROUP NAME</th>
        <th>ID</th>
        <th>STATUS</th>
        <th>ACTION</th>
      </tr>
      <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $id ?></td>
        <td><?php echo $statusoutp ?></td>
        <td>
            <?php include '../api/groupbtn.php'  ?>
        </td>
      </tr>
    </table>
  </body>
</html>
