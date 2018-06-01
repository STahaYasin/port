<link href="../css/default.css" type="text/css" rel="stylesheet"/>
  <div class="box">
      <h3>ADD A NEW GROUP</h3>
      <div class="sucessmessage">
          <h4 ng-show="new_message">{{new_message}}</h4>
      </div>
      <div>
        <form method="post">
          <label>Group Name</label>
          <input type="text" ng-model="group_name"><br>
          <label>Number of Students</label>
          <input type="text" ng-model="group_number"><br>
          <input type="submit" ng-click="sendnewgroup()"/>
        </form>
      </div>
  </div>
