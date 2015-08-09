<?php








?>

<html data-ng-app="emailMakerTool">
<head>

<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<link rel="stylesheet" href="ma-css/ma-emailMaker.css" />

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- jQuery Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>

$(document).ready(function(){
  
  $('body').fadeIn(600,"swing");

});

</script>

<!-- Angular Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<!-- <script src="http://code.angularjs.org/1.2.1/angular-route.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-route.js"></script>

<!-- Routes/Controllers/Modules -->
<script src="ma-js/modules/ma-emailMakerModule.js"></script>
<script src="ma-emailMakerOuterRouter.js"></script>
<script src="ma-js/controllers/ma-emailMakerCTRL.js"></script>
<script src="ma-js/controllers/ma-savedCTRL.js"></script>
<script src="ma-js/controllers/ma-approvalsCTRL.js"></script>

</head>

<body>

<script>

function activate1(){
	
	document.getElementById("two").className = "";
	
	document.getElementById("three").className = "";
	
	document.getElementById("one").className = "active";
	
}

function activate2(){
	
	document.getElementById("one").className = "";
	
	document.getElementById("three").className = "";
	
	document.getElementById("two").className = "active";
	
}

function activate3(){
	
	document.getElementById("one").className = "";
	
	document.getElementById("two").className = "";
	
	document.getElementById("three").className = "active";
	
}

</script>

<ul id="topNav" class="nav nav-pills nav-justified">

  <li id="one" role="presentation" class="active" onclick="activate1()"><a href="#emailer">Email Builder</a></li>
  <li id="two" role="presentation" onclick="activate2()"><a href="#savedEmails">Saved Templates</a></li>
  <li id="three" role="presentation" onclick="activate3()"><a href="#approvals">Approvals</a></li>

</ul>

<br /><Br />

<div data-ng-view></div>

</body>

</html>