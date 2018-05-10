<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <body>
    <?php
    $errormessage = '';
    echo $errormessage;
    ?>
<div class="dropdown">
<button onclick="myFunction()" class="btn btn_blue">Menu</button>
  <div id="myDropdown" class="dropdown-content">

    <!-- 0=stop 1=start 2=pause -->

    <?php if ($status==0){?>
          <a href="api/startaction.php">START</a>
    <?php }
          if ($status!=0){?>
          <a href="api/stopaction.php">STOP</a>
    <?php }
          if ($status==1){?>
          <a href="api/pauseaction.php">PAUSE</a>
    <?php }
          if ($status==2){?>
          <a href="api/startaction.php">RESUME</a>
      <?php } ?>
  </div>
</div>
  </body>
</html>
