
<?php

$username = $_POST["username"];
$password = $_POST["password"];

if($_POST["login"]){
	
	if($username=="bcg-ma" && $password=="masonDixon"){
		
		header("Location: regions/mid-atlantic/ma-emailMaker.php");
		
	}else if($username=="bcg-s" && $password=="southernComfort"){
		
		header("Location: regions/south/s-emailMaker.php");
		
	}else if($username=="bcg-n" && $password=="patriotCountry"){
		
		header("Location: regions/north/n-emailMaker.php");
		
	}else if($username=="bcg-nw" && $password=="pacificRim"){
		
		header("Location: regions/northwest/nw-emailMaker.php");
		
	}else{
		
		header("Location: loginError.html");
		
	}	
	
 }

?>