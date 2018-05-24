<?php
include "db.php";
include "api/loginid.php";
?>
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

        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

<!--        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>-->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.js"></script>-->

        <script> var app = angular.module("port_app", ["ngRoute"]); </script>
        <script src="controllers/header.js"></script>
        <script src="controllers/groups.js"></script>
        <script src="controllers/newgroup.js"></script>
        <script src="controllers/select.js"></script>
        <script src="controllers/sidenav.js"></script>
        <script src="js/java.js"></script>
        <script src="controllers/info.js"></script>


        <script>
            app.config(function($routeProvider){
                $routeProvider

                .when('/newgroup', {
                    templateUrl: 'templates/newgroup.php',
                    controller: 'newgroup'
                })
                .when('/select', {
                    templateUrl: 'templates/select.html',
                    controller: 'select'
                })
                .when('/groups', {
                    templateUrl: 'templates/groups.php',
                    reloadOnSearch: false,
                    controller: 'groups'
                })
                .when('/info', {
                    templateUrl: 'templates/info.php',
                    controller: 'info'
                })
                .when('/info/:paramInfo', {
                    templateUrl: 'templates/info.php',
                    controller: 'info'
                })
                .when('/scores', {
                    templateUrl: 'templates/scores.php',
                })
                .when('/statistics', {
                    templateUrl: 'templates/statistics.html',
                })
                .when('/home', {
                    templateUrl: 'templates/home.html'
                })
                .when('/register', {
                    templateUrl: 'templates/register.html'
                })
                .otherwise({
                    redirectTo: '/home'
                });
            });

        </script>

    </head>
    <body ng-app="port_app">
        <header ng-controller="header">
            <div class="header_1">
                <button class="btn btn_blue" ng-click="openNewGroep()">NEW TOUR</button>
                <button class="btn btn_blue" ng-click="openGroups()">GROUP LIST</button>
                <img class="profile_pic_small" ng-click="myFunction()" src="images/icons/defaultprofilepic.png" />
                <div class="date">
                  <?php echo date("h:i:sa"); ?>
                </div>
            </div>
            <div ng-class="class2" ng-click="closeMenu()" class="bck" id="bck"></div>
            <div ng-class="class" class="menuid" id="menuid">
<!--                <div class="triac"></div>-->
                <h4><?php echo $fristname . " " . $lastname;?></h4>
                <p class="index_email"><?php echo $usermail; ?></p>
<!--                <div class="border"></div>-->
                <button class="btn btn_red" ng-click="logout()">Logout</button>
            </div>
        </header>
        <div ng-controller="sidenav" class="sidenav">
                <a ng-click="openLvlinfo()" href=""><i class="fas fa-edit"></i>Level Info</a>
                <a ng-click="openScores()" href=""><i class="fas fa-chart-line"></i>Scores</a>
        </div>
        <main ng-view="ngRoute">

        </main>
        <footer>

        </footer>
    </body>
</html>
