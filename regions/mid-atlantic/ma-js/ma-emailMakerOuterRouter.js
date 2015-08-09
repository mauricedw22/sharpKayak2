
emailMaker.config(['$routeProvider', function($routeProvider){
	
	$routeProvider.when('/emailMaker',{
		templateUrl: 'templates/ma-email.html',
		controller: 'emailMakerCTRL'		
	}).when('/savedEmails',{
		templateUrl: 'templates/ma-saved.html',
		controller: 'savedCTRL'
    }).when('/approvals',{
		templateUrl: 'templates/ma-approvals.html',
		controller: 'approvalsCTRL'
    }).otherwise({ redirectTo: '/emailMaker'});	
	
}]);