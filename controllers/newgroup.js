app.controller("newgroup", function($scope, $http, $location){
    $scope.newobject = {
        name: "",
        code: "",
        countstudents: 0,
        countgroups: 0
    }

    $scope.addnewgroup = function(){

        $http.post("api/addtour.php", $scope.newobject).then(function(res){
            if(res.data.success == true){
                $location.path("/group/" + res.data.data);
            }
            else{
                console.warn(res.data.message);
            }
        }, function(error){
            console.error(error);
        });
    }
    $scope.sendnewgroup=function(){
      $http({
              method: 'POST',
              url: '/someUrl'
            }).then(function successCallback(response) {
                // this callback will be called asynchronously
                // when the response is available
              }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
              });
    }
});
