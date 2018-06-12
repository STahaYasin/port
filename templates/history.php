<?php
include '../api/getgroups_history.php';


echo '<table>
        <tr>
          <th width=50%>GROUP NAME</th>
          <th>SCORE</th>
          <th>DELETE</th>
        </tr>';
foreach ($historygroups as $group) {
echo    '<tr>
            <td width=50%>'.$group["Name"].'</td>
            <td><a href="templates/scores_history.php?G_ID='.$group["G_ID"].'"><img src="images\icons\scorespic.png"></a></td>
            <td><a href="api/actions/confirmdelete_history.php?G_ID='.$group["G_ID"].'"><img src="images\icons\deletepic.png"></a></td>
          </tr>';
}
echo '</table>';
?>
