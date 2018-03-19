app.controller("newgroup", function($scope, $http, $location){
    $scope.newobject = {
        name: "",
        code: "",
        countstudents: 0,
        countgroups: 0
    }
    
    $scope.addnewgroup = function(){
        if($scope.newobject.countstudents == null || $scope.newobject.countstudents == 0 || $scope.newobject.countstudents == undefined || $scope.newobject.countstudents == NaN){
            alert("Vul aub aantal studenten in!");
            return;
        }
        if($scope.newobject.countgroups == null || $scope.newobject.countgroups == 0 || $scope.newobject.countgroups == undefined || $scope.newobject.countgroups == NaN){
            alert("Vul aub aantal groepen in!");
            return;
        }
        
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