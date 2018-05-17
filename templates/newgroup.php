<?php include "../api/message.php"; ?>

  <div class="box">
      <h3>ADD A NEW GROUP</h3>
      <div>
        <form id="frm_addtour" class="" action="api/addtour.php" method="post">
            <div>
              <p class="inline">GROUP NAME</p><input name="grp_name" placeholder="GROUP NAME" required> <br>
            </div>
            <div>
              <p class="inline">STUDENTS NUMBER</p><input name="grp_number" placeholder="STUENTS NUMBER" type="number" required> <br>
            </div>
            <div>
              <button type="submit" name="submit_btn" class="btn btn_blue">SUBMIT</button>
            </div>
      </form>
      
      <h4 ng-show="new_message">{{new_message}}</h4>
      <div>
          <input type="text" ng-model="group_name" placeholder="Group Name" required>
          <input type="text" ng-model="group_number" placeholder="Count of Students" required>
          <button ng-click="sendnewgroup()">SUBMIT</button>
      </div>
  </div>
