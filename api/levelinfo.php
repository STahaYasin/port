<?php
include '../db.php';
include '../result.php';
include '../templates/load_groups.php';

$sltlvl = $_GET["level"];

echo '<table>
        <tr>
          <th>Info</th>
          <th>Submit</th>
        </tr>';
foreach ($lvlinfo as $leveli) {
    echo '
        <tr>
          <form id="forminfo">
            <td>
              <textarea class="lvlinfo" name="info" id="myInput" maxlength="150">'.$leveli["Info1"].'</textarea>
              <?php
            </td>
            <td>
              <input type="submit" value="Submit">
            </td>
          </form>
        </tr>';
      }
echo '</table>';
?>
