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
});
