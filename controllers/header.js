app.controller("header", function($scope, $http, $location){
    $scope.ip = "000.000.0.0";
    
    function start(){
        $http.get("api/gethost.php").then(function(res){
            if(res.data.success == true){
                $scope.ip = res.data.data;
            }
            else{
                console.warn(res.data.message);
            }
        }, function(error){
            console.error(error);
        });
    }
    start();
    
    $scope.openNewGroep = function(){
        $location.path("/newgroup");
    }

    $scope.openHome = function(){
        $location.path("/groups");
    }
    
    $scope.myFunction = function() {
        $scope.class = "open";
        $scope.class2 = "open2";
        //document.getElementById("menuid").style.top = "60px";
        //document.getElementById("bck").style.width = "100%";
        //document.getElementById("bck").style.height = "100vh";
    }
    $scope.closeMenu = function(){
        $scope.class = "closed";
        $scope.class2 = "closed2";
        //document.getElementById("menuid").style.top = "0px;";
        //document.getElementById("bck").style.width = "0px";
        //document.getElementById("bck").style.height = "0px";        
    }
    $scope.class = "closed";
    $scope.class2 = "closed2";

    $scope.logout = function(){
        $scope.closeMenu();

        $http.get("api/logout.php").then(function(res){
            if(res.data.success == true){
                //window.location = "login.php";
            }
            else{
                
            }
        }, function(error){
            console.error(error);
        });
    }
});