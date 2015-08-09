
emailMaker.config(function($routeProvider){
	
	$routeProvider.when('/emailer',{
		templateUrl: 'templates/ma-email.php',
		controller: 'emailMakerCTRL'		
	}).when('/savedEmails',{
		templateUrl: 'templates/ma-saved.php',
		controller: 'savedCTRL'
    }).when('/approvals',{
		templateUrl: 'templates/ma-approvals.php',
		controller: 'approvalsCTRL'
    }).otherwise({ redirectTo: '/emailer'});	
	
});