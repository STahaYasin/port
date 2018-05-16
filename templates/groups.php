<?php

include '../db.php';
include '../result.php';
include 'load_groups.php';
?>

<html>
<head>
  <script>
    function statusimage(){
      document.getElementById("MyElement").classList.remove('dot_green');
      document.getElementById("MyElement").classList.add('dot_red');
    }
  </script>
</head>
  <body>
    <table>
      <tr>
        <th>GROUP NAME</th>
        <th>ID</th>
        <th>STATUS</th>
        <th>ACTION</th>
        <th>Delete</th>
      </tr>

        <?php foreach($record as $rec){
                echo '<tr>
                  <td>' . $rec['Name'] . '</td>
                  <td>' . $rec['G_ID'] . '</td>
                  <td>';
                  switch ($rec['Status']) {
                      case 0:
                          echo "<span class='dot_red'></span>";
                          break;
                      case 1:
                          echo "<span class='dot_green'></span>";
                          break;
                      case 2:
                          echo "<span class='dot_yellow'></span>";
                          break;
                  }
                  echo '</td>
                  <td>
                  <div class="action">';
                         if ($rec['Status']==0){
                         echo '<a class="buttonaction" href="api/startaction.php?G_ID='.$rec['G_ID'].'">START</a>';
                    }
                         if ($rec['Status']==1){
                         echo '<a class="buttonaction" href="api/pauseaction.php?G_ID='.$rec['G_ID'].'">PAUSE</a>';
                    }
                         if ($rec['Status']==2){
                         echo '<a class="buttonaction" href="api/startaction.php?G_ID='.$rec['G_ID'].'">RESUME</a>';
                    }
                         if ($rec['Status']!=0){
                         echo '<a class="buttonaction" href="api/confirmstop.php?G_ID='.$rec['G_ID'].'">STOP</a>';
                    }
                  echo '</div>
                  </td>
                  <td> <a href="api/confirmdelete.php?G_ID='.$rec['G_ID'].'"><i class="fas fa-trash-alt"></i></a></td>
                </tr>';
                 } ?>
    </table>
    <div class="status">
      <span class='dot_green_info'></span><p class="line">Running</p><br>
    </div>
    <div class="status">
      <span class='dot_yellow_info'></span><p class="line">Paused</p><br>
    </div>
    <div class="status">
      <span class='dot_red_info'></span><p class="line">Stopped</p><br>
    </div>
  </body>
</html>
