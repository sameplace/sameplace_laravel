function mainController($scope, $http) {
	
	$scope.getInput = function() {
			var change = document.getElementById('changeable');
			alert(change);
			console.log('yeargh');
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
}