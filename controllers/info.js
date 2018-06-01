app.controller('info', function($scope, $http, $location, $routeParams){
    $scope.selectedLevel = -1;
    $scope.levelSelected = false;

    $scope.changeLevel = function(lvl){
        if(lvl == -1) return;

        $location.path("info/" + lvl);
    }
    function start(){
        $scope.selectedLevel = $routeParams.paramInfo;

        if($scope.selectedLevel == -1 || $scope.selectedLevel == undefined){
            $scope.levelSelected = false;
            return;
        }

        $scope.levelSelected = true;

        $http.get("templates/levelinfo.php?level=" + $scope.selectedLevel).then(function(res){
            document.getElementById("container").innerHTML = res.data;
        }, function(error){
            document.getElementById("container").innerHTML = error;
        });
    }
    start();
});
