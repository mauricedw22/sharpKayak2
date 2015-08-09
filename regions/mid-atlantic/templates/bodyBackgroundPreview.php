<?php

if(count($_FILES)){
	
    $file = $_FILES['userfile']['tmp_name'];
    $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION); 
    
	$imageFolder = 'uploadedImages/';
	
    move_uploaded_file($file, $imageFolder . $_FILES['userfile']['name']);
	
	$image = $imageFolder . $_FILES['userfile']['name'];
	
	//echo "<input type='hidden' id='imageFile' ng-model='imageFile' value='" . $image . "'>";

    //rename('gs://ma-bcg-builder' .'/'. $_FILES['userfile']['name'], 'gs://ma-bcg-builder'.'/'.$time.'-'.$string.'-'.$_FILES['userfile']['name']); 
	
	//$cutSpaces = preg_replace("/[^-_a-z0-9]+/i", "_", $_FILES['userfile']['name']);  
	
	/*$footprint = $_POST['footprint'];
      
    $sql1 = "SELECT * FROM emails WHERE footprint = '".$footprint."'";
	
	$sql2 = "INSERT INTO emails (footprint,backgroundImage) values ('$footprint','$image')";
   
    $numrows = mysql_num_rows($sql);
   
    if($numrows!=0){
   
      echo "<br />That image doesn't exist in database! <br /> Try another Footprints ID!";
	 
	 }else{
   
	  $result1 = mysql_query($sql1);
	  $result2 = mysql_query($sql2);
	 
	    echo "<br />Account created successfully!";
	
	} */
	
}

?>

<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>

  <div class="row">
   
       <div class="col-md-12" style="background:white;height:1000px;">
		 
		   <br /><br /><br />
		   
		   <img src="<?php echo $image ?>" style="width:100%;height:700px;">
	  
	  </div>
	  
  </div>
 

</body>
</html>