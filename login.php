<?php



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="css/default.css" type="text/css" rel="stylesheet"/>

        <script src="js/sha512.js"></script>
        
        <script>
        
            var app = angular.module("loginapp", []);
            
            app.controller("logincontroller", function($scope, $http){
                $scope.email = "";
                $scope.password = "";
                
                $scope.login = function(){
                    if($scope.email == "") return;
                    if($scope.password == "") return;
                    
                    $http.get("api/getsalt.php?email=" + $scope.email).success(function(res){
                        if(res.success == true){
                            hashandlogin(res.data.salt, res.data.challenge, res.data.id);
                        }
                        else{
                            alert(res.message);
                        }
                    }).error(function(error){
                        console.error(error);
                    });
                }
                function hashandlogin(salt, challenge, id){
                    var hash1 = SHA512($scope.password + salt);
                    var hash2 = SHA512(hash1 + challenge);
                    //console.warn(hash1 + "\r\n" + challenge + "\r\n" + hash2);
                    
                    $http.post("api/login.php", {
                        email: $scope.email,
                        hash: hash2
                    }).success(function(res){
                        if(res.success == true){
                            window.location = "index.php";
                        }
                        else{
                            
                        }
                    }).error(function(error){
                        console.error(error);
                    });
                }
            });
        </script>
    </head>
    <body ng-app="loginapp" ng-controller="logincontroller">
        <div class="white_center_box">
        <label for="uname">E-mail: </label>
            <input type="email" ng-model="email" placeholder="Enter e-mail"/>
        <label for="psw">Password: </label>
            <input type="password" ng-model="password" placeholder="Enter password"/>
            <button ng-click="login()">LOGIN</button>
        </div>
    </body>
</html>