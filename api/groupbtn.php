<html>
  <body>
    <script>
      function btnstart() {
        console.log('btn works');
      }
    </script>

    <?php switch ($status) {
      case '0':?>
          <button class="btn btn_blue" onclick="btnstart()"><?php print($currentbtn) ?></button>
        <?php  break;
      case '1': ?>
          <button class="btn btn_blue" onclick="btnstart()"><?php print($currentbtn) ?></button>
        <?php  break;
      case '2': ?>
          <button class="btn btn_blue" onclick="btnstart()"><?php print($currentbtn) ?></button>
        <?php  break;
      default:

        break;
    } ?>
  </body>
</html>
