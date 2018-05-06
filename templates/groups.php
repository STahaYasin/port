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
        <td><?php echo $status ?></td>
        <td> <button  class="btn btn_blue" type="button" name="action_group_game"><?php print($currentbtn) ?></button> </td>
      </tr>
    </table>
  </body>
</html>
