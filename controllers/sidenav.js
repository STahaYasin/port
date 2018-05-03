app.controller("sidenav", function($scope, $http, $location){
    $scope.goHome = function(){
        $location.path("home");
    }
    $scope.goRegister = function(){
        $location.path("register")
    }
    $scope.goStatistics = function(){
        $location.path("statistics")
    }
});