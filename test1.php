<?php

session_start();
if(isset($_SESSION["admin_id"])){
    
}
else{
    header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>imPORTant contoll panel</title>
        
        <!-- Cascade Style Sheet -->
        <link href="css/default.css" type="text/css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        
        <!-- JavaScript -->
        <script src="js/angular.min.js"></script>
        <script src="js/angular.route.min.js"></script>
        
<!--        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>-->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.js"></script>-->
        
        <script> var app = angular.module("port_app", ["ngRoute"]); </script>
        <script src="controllers/header.js"></script>
        <script src="controllers/groups.js"></script>
        <script src="controllers/newgroup.js"></script>
        <script src="controllers/select.js"></script>
        
        <script>
            app.config(function($routeProvider){
                $routeProvider
                .when('/groups', {
                    templateUrl: 'templates/groups.html',
                    controller: 'groups'
                })
                .when('/newgroup', {
                    templateUrl: 'templates/newgroup.html',
                    controller: 'newgroup'
                })
                .when('/select', {
                    templateUrl: 'templates/select.html',
                    controller: 'select'
                })
                .when('/group', {
                    redirectTo: '/groups'
                })
                .when('/group/:groupid', {
                    templateUrl: 'templates/groups.html',
                    controller: 'groups'
                })
                .otherwise({
                    redirectTo: '/groups'
                });
            });
            
        </script>
        
    </head>
    <body ng-app="port_app">
        <header ng-controller="header">
            <div class="header_1">
                <img src="images/icons/defaultprofilepic.png" class="profile_pic_small"/>
            </div>
            <div class="header_2">
                <button class="btn btn_blue" ng-click="openNewGroep()">NEW TOUR</button>
            </div>
            <div class="header_3">
                
            </div>
        </header>
            <div class="sidenav">
                <a class="sidenav-active" href="">test 1</a>
                <a href="">test 2</a>
            </div>
        <main ng-view="ngRoute">
            
        </main>
        <footer>
            
        </footer>
    </body>
</html>