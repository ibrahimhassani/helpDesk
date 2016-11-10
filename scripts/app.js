

var myApp = angular.module('myApp',['ngRoute']);

myApp.controller('MainCtrl', function($scope){
    $scope.message = "Accueil";
});

myApp.config( function( $routeProvider ) {
	$routeProvider
	.when('/', {
                templateUrl : 'accueil.html',
                controller  : 'MainCtrl'
    })
	.when('/projets', {
						templateUrl : 'projets.html',
                		controller  : 'MainCtrl'

	});
});