<div class="line" style="width:200px;">
  <button class="info" ng-click="changeLevel(1)">Level 1</button>
  <button class="info" ng-click="changeLevel(2)">Level 2</button>
  <button class="info" ng-click="changeLevel(3)">Level 3</button>
  <button class="info" ng-click="changeLevel(4)">Level 4</button>
  <button class="info" ng-click="changeLevel(5)">Level 5</button>
</div>

<div ng-show="levelSelected">
    <!-- Content here -->
    <h4>Information of Level {{selectedLevel}}</h4>

    <div id="container"></div>
</div>
