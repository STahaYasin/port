app.controller("groups", function($scope, $location, $http){
    $scope.val = "ok";
    $scope.groups = [];

    function start(){
      $http.get("api/getgroups.php").then(function successCallBack(res){
          $scope.groups = res.data.data;
      }, function errorCallBack(error){
          
      });
    }
    start();
});
