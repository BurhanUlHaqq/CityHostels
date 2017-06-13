
// AddTenant application
var addTenantApp = angular.module('addTenant',['angularBetterPlaceholder']);
addTenantApp.controller('addTenantCont', ['$scope', function($scope) {
	$scope.data = {};
	$scope.isImageCorrect  = false;
	$scope.imageSizeLarger = false;
	$scope.file_changed = function(element) {
		$scope.$apply(function(scope) {
			var size = element.files[0].size/1024;
			if (size < 100) {
				$scope.isImageCorrect  = false;
				$scope.imageSizeLarger = false;

			} else {
				$scope.isImageCorrect  = true;
				$scope.imageSizeLarger = true;
			}
		});
};
}]);

// Tenants record application
var loginApp = angular.module('tenantsRecord',['angularBetterPlaceholder']);
loginApp.controller('tenantsRecordCont', ['$scope', function($scope) {
	$scope.data = {};
	$scope.showRecord = false;
	$scope.showRecordFunc = function(){
		$scope.showRecord = !$scope.showRecord;
	}
}]);

// login application
var loginApp = angular.module('loginForm',['angularBetterPlaceholder']);
loginApp.controller('loginCont', ['$scope', function($scope) {
	$scope.data = {};
}]);

// getPassword application
var passApp = angular.module('passwordForm',['angularBetterPlaceholder']);
passApp.controller('passwordCont', ['$scope', function($scope) {
	$scope.data = {};
}]);

// sign-up application
var signupApp = angular.module('signUpApp',['angularBetterPlaceholder']);
signupApp.controller('signUpCont', ['$scope', function($scope) {
	$scope.data = {};
}]);

// ReSet password application
var resetPassApp = angular.module('reset-password-app',['angularBetterPlaceholder']);
resetPassApp.controller('reset-password-Cont', ['$scope', function($scope) {
	$scope.data = {};
}]);

// hostel Profile application
var profileApp = angular.module('hostelprofileApp',['angularBetterPlaceholder']);
profileApp.controller('hostelprofileCont',['$scope',function($scope){
	$scope.data = {};
}]);

// Control hostel view
var hostelViewApp = angular.module('hostelViewApp',[]);
hostelViewApp.controller('hostelViewCont',['$scope', function($scope){
	$scope.showPhoto 	  = true;
	$scope.showDesc 	  = true;
	$scope.showMap 		  = false;
	$scope.showLoc  	  = true;
	$scope.showCityHostel = true;
	$scope.showDetail 	  = true;
	
	$scope.showPhotoFunc	   = function(){
		$scope.showPhoto       = !$scope.showPhoto;
	};
	$scope.showDescFunc 	   = function(){
		$scope.showDesc 	   = !$scope.showDesc;
	};
	$scope.showMapFunc  	   = function(){
		$scope.showMap  	   = !$scope.showMap;
	};
	$scope.showLocFunc  	   = function(){
		$scope.showLoc  	   = !$scope.showLoc;
	};
    $scope.showCityHostelFun   = function(){
		$scope.showCityHostel  = !$scope.showCityHostel;
	};
	$scope.showDetailFunc  	   = function(){
		$scope.showDetail 	   = !$scope.showDetail;
	}

}]);