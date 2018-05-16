<div style="width:200px;">
  <select class="lvl">
    <button ng-click="changeLevel(-1)">Select Level:</button>
    <option ng-click="changeLevel(1)">Level 1</option>
    <option ng-click="changeLevel(2)">Level 2</option>
    <option ng-click="changeLevel(3)">Level 3</option>

  </select>
  
  <button ng-click="changeLevel(1)">Level 1</button>
  <button ng-click="changeLevel(2)">Level 2</button>
  <button ng-click="changeLevel(3)">Level 3</button>
</div>





<div ng-show="levelSelected">
    <!-- Content here -->
    <h4>Selected level {{selectedLevel}}</h4>
    
    <div id="container"></div>
</div>