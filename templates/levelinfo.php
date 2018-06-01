<?php

$sltlvl = $_GET["level"];

include '../db.php';
include '../result.php';
include '../api/load_db/load_level_info.php';


echo '<form id="forminfo" action="api/change_info.php?LVL_ID='.$sltlvl.'" method="POST">
          <div class="submitinfo">
            <input class="submitinfo" type="submit" value="Submit Changes">
          </div>
          <table>
              <tr>
                <th width=20%>Character</th>
                <th>Info</th>
              </tr>';
      foreach ($lvlinfo as $leveli) {
echo         '<tr>
                  <td>Crane Operator</td>
                  <td>
                    <textarea class="lvlinfo" name="info_crane" id="myInput" maxlength="250">'.$leveli["Info_Crane"].'</textarea>
                  </td>
              </tr>
              <tr>
                  <td>Ship captain</td>
                  <td>
                    <textarea class="lvlinfo" name="info_captian" id="myInput" maxlength="250">'.$leveli["Info_Captian"].'</textarea>
                  </td>
              </tr>
              <tr>
                  <td>Customs</td>
                  <td>
                    <textarea class="lvlinfo" name="info_customs" id="myInput" maxlength="250">'.$leveli["Info_Customs"].'</textarea>
                  </td>
              </tr>
              <tr>
                  <td>Warehouse operator</td>
                  <td>
                    <textarea class="lvlinfo" name="info_whoperator" id="myInput" maxlength="250">'.$leveli["Info_Whoperator"].'</textarea>
                  </td>
              </tr>
              <tr>
                  <td>Process operator</td>
                  <td>
                      <textarea class="lvlinfo" name="info_prcsoperator" id="myInput" maxlength="250">'.$leveli["Info_Operator"].'</textarea>
                  </td>
              </tr>
              <tr>
                  <td>Extra 1</td>
                  <td>
                      <textarea class="lvlinfo" name="info_extra1" id="myInput" maxlength="250">'.$leveli["Extra1"].'</textarea>
                  </td>
              </tr>
              <tr>
                  <td>Extra 2</td>
                  <td>
                      <textarea class="lvlinfo" name="info_extra2" id="myInput" maxlength="250">'.$leveli["Extra2"].'</textarea>
                  </td>
              </tr>
              <tr>
                  <td>Extra 3</td>
                  <td>
                      <textarea class="lvlinfo" name="info_extra3" id="myInput" maxlength="250">'.$leveli["Extra3"].'</textarea>
                  </td>
              </tr>
              <tr>
                  <td>Extra 4</td>
                  <td>
                      <textarea class="lvlinfo" name="info_extra4" id="myInput" maxlength="250">'.$leveli["Extra4"].'</textarea>
                  </td>
              </tr>
              <tr>
                  <td>Extra 5</td>
                  <td>
                      <textarea class="lvlinfo" name="info_extra5" id="myInput" maxlength="250">'.$leveli["Extra5"].'</textarea>
                  </td>
              </tr>';
            }
echo      '</table>
      </form>';
?>
