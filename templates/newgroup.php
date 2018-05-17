<link href="../css/default.css" type="text/css" rel="stylesheet"/>
  <div class="box">
      <h3>ADD A NEW GROUP</h3>
      <div class="sucessmessage">
          <h4 ng-show="new_message">{{new_message}}</h4>
      </div>
      <div>
        <form method="post">
          <input type="text" ng-model="group_name" placeholder="Group Name" required>
          <input type="text" ng-model="group_number" placeholder="Count of Students" required>
          <input type="submit" ng-click="sendnewgroup()"></input>
        </form>
      </div>
  </div>
