var app = angular.module("monApp",[]);
var socket = io("http://localhost:1337");

app.controller("chatCtrl",function($scope) {

	 $scope.name = "tchat";

	 $scope.messages = [];


	$scope.envoyer=function() {

		socket.emit("msg",$scope.texte);

	};

	socket.on("msg_reçu",function (message){

	    $scope.messages.push({msg: message});
	    $scope.$apply();

	  
	});

});