<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <body>
<div class="dropdown">
<button onclick="myFunction()" class="btn btn_blue">Menu</button>
  <div id="myDropdown" class="dropdown-content">

    <!-- 0=stop 1=start 2=pause -->

    <?php if ($rec['Status']==0){
          echo '<a href="api/startaction.php">START</a>';
     }
          if ($rec['Status']!=0){
          echo '<a href="api/stopaction.php">STOP</a>';
     }
          if ($rec['Status']==1){
          echo '<a href="api/pauseaction.php">PAUSE</a>';
    }
          if ($rec['Status']==2){
          echo '<a href="api/startaction.php">RESUME</a>';
     } ?>
  </div>
</div>
  </body>
</html>
