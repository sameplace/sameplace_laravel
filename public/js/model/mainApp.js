angular.module('mainApp', ['ngCookies']).controller('mainController', ['$scope', '$http', '$cookies', '$element', function($scope, $http, $cookies, $element) {
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

		function showme(id, linkid) {
                    var divid = document.getElementById(id);
                    var toggleLink = document.getElementById(linkid);
                    if (divid.style.visibility == 'visible') {
                        toggleLink.innerHTML = 'Log in';
                        divid.style.visibility = 'hidden';
                        divid.style.opacity = '0';
                    }
                    else {
                        toggleLink.innerHTML = 'Close';
                        divid.style.visibility = 'visible';
                        divid.style.opacity = '1';
                    }
                }

		//function processSubmit takes text inputs from login, and send all information to php file on web server, returning message, if user is logged in, or not
		$scope.formSubmitData = {};
		$scope.processLogin = function() {

			$scope.formData = {'email' : $scope.email, 'pass' : $scope.password};

			$http({
			method  :'POST',
			url:'/login',
			data: $.param($scope.formData),
			withCredentials: true,
			transformResponse: function(d, h) { return d;},
			headers :{'Content-Type':'application/x-www-form-urlencoded'}
			}).success(function(data, status, headers, config) {
				$scope.login_message = data;
				if(data=="Success"){
					$scope.message_class = 'alert alert-success';
					var ulElement = $element.find('.list-inline');
					showme('widget', 'toggler');
					$element.find('#toggler').remove();

					ulElement.append('<li><a href="/logout">Log out</a></li><li><a href="/dealspaces">Dealspaces</a></li><li><a href="/profile">Profile</a></li></ul>');

					// setTimeout(function(){location.reload();}, 3000);
				}
				else {
					$scope.message_class = 'alert alert-danger';
				}
			});
		};

		function whirlyOn() {
			angular.element(".whirly").css('display','block');
		}

		function whirlyOff() {
			angular.element(".whirly").fadeOut('slow');
		}

		function dotsOn() {
			angular.element("#circleG").css('display','block');
		}

		function dotsOff() {
			angular.element("#circleG").fadeOut('slow');
		}

		function randomColor() {
			var colors = ['#E87A1C', '#D7D67F', '#EF799D' , '#976BE4', '#09CFCF', '#C84D4D', '#CD3E3E'];
			var random = Math.floor((Math.random()*colors.length));
			return colors[random];
		}

		//get all deaspaces
		$scope.catchData = function(file) {
			whirlyOn();
			$http({ 
			method  :'GET',
			url: '/'+file,
			data: $.param($scope.formData),
			transformResponse: function(d, h) { return d; },
			headers :{'Content-Type':'application/x-www-form-urlencoded'}
			}).success(function(data, status, headers, config) {
				$scope.result = angular.fromJson(data);
				// console.log($scope.result);
				var count = 0;
				angular.forEach($scope.result, function(value) {
					value['color'] 	= randomColor();
					value['num'] 	= count;
					count++;
				});

				whirlyOff();
			});
		};

		$scope.catchDataUser = function(file) {
			whirlyOn();
			$http({ 
			method  :'GET',
			url: '/'+file,
			data: $.param($scope.formData),
			transformResponse: function(d, h) { return d;},
			headers :{'Content-Type':'application/x-www-form-urlencoded'}
			}).success(function(data, status, headers, config) {
				$scope.result = angular.fromJson(data);
				whirlyOff();
				angular.element('.userPage').css('display', 'block');
			});
		};

		$scope.backDealspaces = function() {
			angular.element('#service').css('display', 'block');
			angular.element('.singleDealspace').css('display', 'none');
			$scope.selection = 'default';
		}

		//get dealspace
		$scope.sendAndCatchData = function(file, oid, name, parts) {
			whirlyOn();
			$scope.parties 					= parts;
			$scope.selected_dealspace_oid 	= oid;

			//get participants
				var final_participants = '';
				var participant_part;
				var counter = 0;
				angular.forEach($scope.parties, function(value) {
					if(counter==0){
						participant_part 		= value.split(':');
						final_participants 		= participant_part[0];
					} else {
						final_participants = final_participants + ',' + value;
					}
					counter++;
					
				});
				sendAndCatchDataParticipants('get_participants', $scope.selected_dealspace_oid, final_participants);
				
			$scope.oid = {'oid' : oid};
			$http({
			method  :'POST',
			url: '/'+file,
			data: $.param($scope.oid),
			withCredentials: true,
			transformResponse: function(d, h) { return d;},
			headers :{'Content-Type':'application/x-www-form-urlencoded'}
			}).success(function(data, status, headers, config) {
				$scope.single_dealspace 	= angular.fromJson(data);
				console.log($scope.single_dealspace);
				$scope.dealspace_name 		= name;
				$scope.dealspace_id 		= oid;
				var participant_part 		= $scope.single_dealspace[0].pFrom.split(':');
				$scope.participant_part 	= participant_part[0];
				angular.element('#service').css('display', 'none');
				angular.element('.singleDealspace').css('display', 'block');
				sendAndCatchDataMime('get_mime', $scope.single_dealspace[0].oid);
				whirlyOff();

			});
		};

		//get participants
		var sendAndCatchDataParticipants = function(file, oid, p) {
			obj = {'oid' : oid, 'p' : p};
			$http({
			method  :'POST',
			url: '/'+file,
			data: $.param(obj),
			withCredentials: true,
			transformResponse: function(d, h) { return d;},
			headers :{'Content-Type':'application/x-www-form-urlencoded'}
			}).success(function(data, status, headers, config) {
				$scope.participants = angular.fromJson(data);
				console.log($scope.participants);
			});
		};

		//rename dealspace
		$scope.renameDealspace = function(file, oid) {
			var input = document.getElementById('new_name');
			var rename = input.value;
			$scope.oid = {'oid' : oid, 'rename' : rename};
			$http({
			method  :'POST',
			url: '/'+file,
			data: $.param($scope.oid),
			withCredentials: true,
			transformResponse: function(d, h) { return d;},
			headers :{'Content-Type':'application/x-www-form-urlencoded'}
			}).success(function(data) {
				$scope.selection = 'default';
			});
		};

		//change password
		$scope.changePassword = function(file, oid) {
			var old_pass = document.getElementById('old_pass');
			var new_pass = document.getElementById('new_pass');
			$scope.post_data = {'oid' : oid, 'old_pass' : old_pass, 'new_pass' : new_pass};
			$http({
			method  :'POST',
			url: '/'+file,
			data: $.param($scope.post_data),
			withCredentials: true,
			transformResponse: function(d, h) { return d;},
			headers :{'Content-Type':'application/x-www-form-urlencoded'}
			}).success(function(data) {
				console.log(data);
			});
		};

		//get mime
		var sendAndCatchDataMime = function(file, oid) {
			$scope.dealspace_oid 	= oid;
			$scope.oid 				= {'oid' : oid};
			$http({
			method  :'POST',
			url: '/'+file,
			data: $.param($scope.oid),
			withCredentials: true,
			transformResponse: function(d, h) { return d;},
			headers :{'Content-Type':'application/x-www-form-urlencoded'}
			}).success(function(data, status, headers, config) {
				$scope.mime = angular.fromJson(data);
				$scope.check_oid = $scope.mime[0].oid;
				$scope.mime = $scope.mime[1];
					if(angular.isDefined($scope.mime)){
						console.log($scope.mime);
						var type = $scope.mime.MimeType;
						$scope.mimeType = type;
						//condition if attachment is an image TODO yet
						if(type.substring(0, 5)=='image'){
							$scope.imageAttach = true;
						} else {
							$scope.imageAttach = false;
						}
						sendAndCatchDataAttachment('get_attachment', $scope.mime.oid, $scope.mime.Name);

					} else { 
						$scope.attachmentContent = '';
					}

			});
		};

		//get attachment
		var sendAndCatchDataAttachment = function(file, oid, name) {
			dotsOn();
			$scope.dealspace_oid = oid;
			$scope.oid = {'oid' : oid, 'name' : name};
			$http({
			method  :'POST',
			url: '/'+file,
			// dataType:'image/gif',
			data: $.param($scope.oid),
			withCredentials: true,
			transformResponse: function(d, h) { return d;},
			headers :{'Content-Type':'application/x-www-form-urlencoded'}
			}).success(function(data, status, headers, config) {
				$scope.imagebase = data;
				var attachmentDiv = document.getElementById('attachment-div');
				var extension = $scope.imagebase.substr($scope.imagebase.length - 3);
				if(extension=='jpg' || extension=='JPG' || extension=='gif' || extension=='GIF' || extension=='JPEG' || extension=='jpeg'){
					attachmentDiv.innerHTML = '<div class="row text-center"><img style="width:100%;" class="img-responsive" src="' + $scope.imagebase + '" /></div>'
				}
				else
				attachmentDiv.innerHTML = '<iframe src="http://docs.google.com/gview?url=http://tonic.sameplace.com' + $scope.imagebase + '&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe>';
				dotsOff();
			});
		};

		$scope.logout = function() {
			$http({
			method  :'GET',
			url:'logout',
			data: $.param($scope.formData),
			transformResponse: function(d, h) { return d;},
			headers :{'Content-Type':'application/x-www-form-urlencoded'}
			}).success(function(data, status, headers, config) {
				location.reload();
			});
		};

		$scope.formSubmitData = {};
		$scope.processSubmit = function() {
			$scope.formSubmitData.email = $scope.email_subscribe;

			$http.post('subscribe', $scope.formSubmitData)
			.success(function(json) {

			});
		};

		$scope.getInput = function() {
			$scope.selection = 'change';
		};
}]);