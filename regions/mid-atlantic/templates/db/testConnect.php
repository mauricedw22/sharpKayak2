<?php

require 'testConnectInfo.php';

mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD) 
       or die("<p> Error connecting to database: ".mysql.error()."</p>");
	   
mysqli_select_db(DATABASE_NAME) or die("<p> Error selecting database: ".DATABASE_NAME.mysql_error()."</p>");

?>