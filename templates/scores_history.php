<link href="../css/default.css" type="text/css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<?php
$gid3 = $_GET['G_ID'];
include '../db.php';
include '../result.php';
//include '../api/load_db/load_teams_scores.php';



$teamsids= mysqli_query($conn, "SELECT teams.T_ID FROM teams WHERE teams.G_ID = $gid3") or die(mysqli_error($conn));
$teamsscores= mysqli_query($conn, "SELECT scores.SCORE FROM scores, teams WHERE scores.T_ID = teams.T_ID and teams.G_ID = $gid3") or die(mysqli_error($conn));
$teamname= mysqli_query($conn, "SELECT Name FROM groups WHERE G_ID = $gid3") or die(mysqli_error($conn));

$a=1;
$b=1;
while($rowids = mysqli_fetch_assoc($teamsids)){
    $tid[$a] = $rowids["T_ID"];
    $a++;
}
$a=1;
while($rowscores = mysqli_fetch_assoc($teamsscores)){
    $tscores[$a] = $rowscores["SCORE"];
    $a++;
}
while($rowname = mysqli_fetch_assoc($teamname)){
    $tname = $rowname["Name"];
}

echo '<a class="btn btn_scores" href="../index.php#!/history">GO BACK</a>
        <h2 style="text-align:center;">Group: '.$tname.'<u></u></h2>
          <table class="scores">
            <tr>
              <th>TEAM NUMBER</th>
              <th>TEAM ID</th>
              <th>SCORE</th>
            </tr>';

            while($b < $a){
  echo         '<tr>
                <td>'. $b .'</td>
                <td>'. $tid[$b] .'</td>
                <td>'. $tscores[$b] .'</td>
                </tr>';
                $b++;
                }

echo        '</table>';
?>
