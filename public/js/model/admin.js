angular.module('mainApp', ['ngCookies']).controller('mainController', ['$scope', '$http', '$cookies', '$element', function($scope, $http, $cookies, $element) {
		$scope.getInput = function() {
			var change = document.getElementById('changeable');
			alert(change);
			// $http({ 
			// method  :'GET',
			// url:'libs/'+file+'.php',
			// data: $.param($scope.formData),
			// transformResponse: function(d, h) { return d;},
			// headers :{'Content-Type':'application/x-www-form-urlencoded'}
			// }).success(function(data, status, headers, config) {
			// 	$scope.result = angular.fromJson(data);
			// 	angular.forEach($scope.result, function(value) {
			// 		value['color'] = randomColor();
			// 	});

			// });
		};
}]);