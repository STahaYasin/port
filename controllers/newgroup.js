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
    
    $scope.group_name = "";
    $scope.group_number = 0;
    $scope.new_message = null;
    
    $scope.sendnewgroup=function(){
        $http({
            method: 'POST',
            url: 'api/creategroup.php',
            data: {
                group_name: $scope.group_name,
                group_number: $scope.group_number
            }
        }).then(function successCallback(res) {
            console.log(res);
            
            $scope.new_message = "New group created successfully!";  //<------
            
        }, function errorCallback(error) {
            console.warn(error);
        });
    }
});
