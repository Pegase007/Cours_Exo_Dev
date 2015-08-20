var app = angular.module("aplli",["ngRoute"]);

app.controller("onepageCtrl",function($scope){



              })

app.controller("pagetwoCtrl",function($scope){



              })

app.config(["$routeProvider",function($routeProvider){

					$routeProvider.when("/page1",{

							templateUrl:"page1.html",
							controller:"onepageCtrl"
										
					});

					$routeProvider.when("/page2",{

							templateUrl:"page2.html",
							controller:"pagetwoCtrl"
										
					});

					$routeProvider.otherwise({

							redirectTo:"/page1"


					})
              }])