<?php

include '../db.php';
include '../result.php';
include '../api/load_db/load_groups.php';
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
          <th>ID</th>
          <th>GROUP</th>
          <th>CODE</th>
          <th>STATUS</th>
          <th>ACTION</th>
          <th>SCORES</th>
          <th>DELETE</th>
        </tr>
        <tr ng-repeat="item in groups">
          <td>{{item.g_id}}</td>
          <td>{{item.name}}</td>
          <td>{{item.code}}</td>
          <td>
              <span ng-show="item.status == 0" class='dot_red'></span>
              <span ng-show="item.status == 1" class='dot_green'></span>
              <span ng-show="item.status == 2" class='dot_yellow'></span>
              <span ng-show="item.status == 3" class='dot_red'></span>
          </td>
          <td>
            <div class="action">
              <a ng-show="item.status == 0" class="buttonaction" href="api/actions/startaction.php?G_ID={{item.g_id}}">START</a>
              <a ng-show="item.status == 1" class="buttonaction" href="api/actions/pauseaction.php?G_ID={{item.g_id}}">PAUSE</a>
              <a ng-show="item.status == 2" class="buttonaction" href="api/actions/startaction.php?G_ID={{item.g_id}}">RESUME</a>
              <a ng-show="item.status != 0 && item.status < 3" class="buttonaction" href="api/actions/confirmstop.php?G_ID={{item.g_id}}">STOP</a>
              <a ng-show="item.status == 3" style="color:black;">Finished</a>
            </div>
          </td>
          <td><a href="templates/scores.php?G_ID={{item.g_id}}"><i class="fas fa-chart-line"></i></a></td>
          <td><a href="api/actions/confirmdelete.php?G_ID={{item.g_id}}"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
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
