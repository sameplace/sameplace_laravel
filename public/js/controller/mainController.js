function mainController($scope, $http) {
	
	//function processForm takes text inputs from profile area, and send all information to php file, for now it responds in message_box div
	$scope.formData = {};
		$scope.processForm = function() {
			$scope.formData.username = $scope.username;
			$scope.formData.realname = $scope.realname;
			$scope.formData.email = $scope.email;
			$scope.formData.question = $scope.question;
			$scope.formData.answer = $scope.answer;

			$http.post('libs/test.php', $scope.formData)
			.success(function(json) {
				$scope.message_box = json;
			});
		};

		$scope.processRegistration = function() {
			$scope.formData.username = $scope.username;
			$scope.formData.email = $scope.email;
			$scope.formData.password = $scope.password;
			$scope.formData.password_repeat = $scope.password_repeat;


			$http.post('libs/test.php', $scope.formData)
			.success(function(json) {
				$scope.message_box = json;
			});
		};

		//function processSubmit takes text inputs from login, and send all information to php file on web server, returning message, if user is logged in, or not
		$scope.formSubmitData = {};
		$scope.processLogin = function() {

			$scope.formData = {'email' : $scope.email, 'pass' : $scope.password};

			$http({
			method  :'POST',
			url:'https://secure.bitway.com/sp/a428.php',
			data: $.param($scope.formData),
			headers :{'Content-Type':'application/x-www-form-urlencoded'}
			}).success(function(data, status, header) {
				$scope.message_submit = data;
			}).then(function(a) {
				console.log(a.headers('cookie'));
			});
		};

		$scope.formSubmitData = {};
		$scope.processSubmit = function() {
			$scope.formSubmitData.email = $scope.email_subscribe;

			$http.post('libs/subscribe.php', $scope.formSubmitData)
			.success(function(json) {
				$scope.subscribe_message = json;

			});
		};

	//function ChangeColor changes the color of active tab, and stays that way until another tab is clicked.
	$scope.tabs = [];
		$scope.ChangeColor = function(nr) {
			$scope.tabs = [];
			$scope.tabs[nr] = '#FAAC58';

		}

	//content for tabs (on click)
		var path = "templates/";

		$scope.documentsTab = path + "documents.tpl";
		$scope.peopleTab = path + "people.tpl";
		$scope.emailTab = path + "email.tpl";

		if($scope.tab==null)
			$scope.tab = $scope.documentsTab;

		$scope.tabs[0] = '#FAAC58';
}