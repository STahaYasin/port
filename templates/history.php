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
            <td><a href="templates/scores.php?G_ID='.$group["G_ID"].'"><i class="fas fa-chart-line"></i></a></td>
            <td><a href="api/actions/confirmdelete_scores.php?G_ID='.$group["G_ID"].'"><i class="fas fa-trash-alt"></i></a></td>
          </tr>';
}
echo '</table>';
?>