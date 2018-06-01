<?php
include '../api/getgroups_history.php';


echo '<table>
        <tr>
          <th width=50%>Group Name</th>
          <th>Score</th>
        </tr>';
foreach ($historygroups as $group) {
echo    '<tr>
            <td width=50%>'.$group["Name"].'</td>
            <td><a href="templates/scores.php?G_ID={{item.g_id}}"><i class="fas fa-chart-line"></i></a></td>
          </tr>';
}
echo '</table>';
?>
