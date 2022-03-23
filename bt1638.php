<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Online</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="angular.min.js"></script>
</head>
<body ng-controller="myCtrl">
    <div class="container">
        <div class="border border-dark rounded-1 p-5">
            <div class="container">
                <input type="text" size="50" ng-model="display">
                <div class="mt-3">
                    <button type="button" class="btn btn-secondary" ng-click="add7()">7</button>
                    <button type="button" class="btn btn-secondary" ng-click="add8()">8</button>
                    <button type="button" class="btn btn-secondary" ng-click="add9()">9</button>
                    <button type="button" class="btn btn-dark ps-3" ng-click="adddivided()">/</button>
                    <button type="button" class="btn btn-dark" ng-click="clear()">AC</button>
                    <br>
                    <button type="button" class="btn btn-secondary mt-1" ng-click="add4()">4</button>
                    <button type="button" class="btn btn-secondary mt-1" ng-click="add5()">5</button>
                    <button type="button" class="btn btn-secondary mt-1" ng-click="add6()">6</button>
                    <button type="button" class="btn btn-dark mt-1" ng-click="addplus()">+</button>
                    <br>
                    <button type="button" class="btn btn-secondary mt-1" ng-click="add1()">1</button>
                    <button type="button" class="btn btn-secondary mt-1" ng-click="add2()">2</button>
                    <button type="button" class="btn btn-secondary mt-1" ng-click="add3()">3</button>
                    <button type="button" class="btn btn-dark mt-1 ps-3" ng-click="addminus()">-</button>
                    <br>
                    <button type="button" class="btn btn-secondary mt-1" ng-click="add0()">0</button>
                    <button type="button" class="btn btn-secondary mt-1 ps-3" ng-click="adddot()">.</button>
                    <button type="button" class="btn btn-primary mt-1" ng-click="result()">=</button>
                    <button type="button" class="btn btn-dark mt-1 ps-3" ng-click="addtimes()">*</button>
                    
                </div>
            </div>
        </div>
    </div>