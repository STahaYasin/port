app.controller("sidenav", function($scope, $http, $location){
    $scope.goHome = function(){
        $location.path("home");
    }
});