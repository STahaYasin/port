<link href="../css/default.css" type="text/css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<?php
$group_id = $_GET['G_ID'];
include '../api/load_db/load_groups_scores.php';
include '../api/load_db/load_teams_scores.php';

foreach ($gname as $groupname) {
echo '<a class="btn btn_scores" href="../index.php#!/groups">GO BACK</a>
        <h2 style="text-align:center;">'.$groupname["Name"].'</h2>
          <table class="scores">
            <tr>
              <th>TEAM ID</th>
              <th>SCORE</th>
            </tr>';
            foreach ($scoreinfo as $scores) {
              echo '<tr>
                  <td>'.$scores["T_ID"].'</td>
                  <td>'.$scores["SCORE"].'</td>
              </tr>';
            }
echo      '</table>';
}

?>
