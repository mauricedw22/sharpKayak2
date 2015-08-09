<!DOCTYPE HTML>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>

  function imageAlert(){
	  
	  alert('Your image has been uploaded!');
	  //document.getElementById("previewer").setAttribute("src","bodyBackgroundPreview.php");
	  
  }

</script>

</head>
<body>

  <div class="row">
   
       <div class="col-md-6" style="text-align:center">
  
         <div style="background:#9ACD32;color:white;text-align:center;border-radius:20px;">

			<form enctype="multipart/form-data" target="previewer" action="bodyBackgroundPreview.php" method="post">
			<!-- MAX_FILE_SIZE must precede the file input field -->
			<input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
			<!-- Name of input element determines name in $_FILES array -->
			<label style="font-size: 1.5em;">Upload your image:</label><BR><BR>
			<input type="file" style="margin-left:40%;" name="userfile" accept="image/*" required>
			<BR>
			<input class="form-control" type="text" style="width:20%;margin-left:40%;" name="footprint" placeholder="Footprints ID (Required)">
			<BR>
			<input class="btn btn-warning" type="submit" name="submit" id="sub" onclick="imageAlert();createPreview();" value="Upload Image" /><BR><BR>
			<ul style="list-style-type:none;text-align:center"><li>JPG or PNG only</li><li>72 dpi</li><li>It may take a moment for the file to upload</li><br /><br /><li style="font-size:2em;font-family:'Quicksand'">Mid-Atlantic Edition</li></ul><BR>
			</form> 
			
		</div>
	  
	  </div>
	  
	  <div class="col-md-6" style="background:#9ACD32;color:white;float:right;border-radius:20px;">
	  
	   <h1 style="font-family:'Quicksand';text-align:center;"> PREVIEW </h1>
	  
		 <iframe name="previewer" src="" style="width:100%;height:800px;background:white;color:white;float:right;border-radius:20px;padding:0;">
		 
		 </iframe>
		 
		 <br /><br /><br />
	  
	  </div>
	  
  </div>
  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
  
  <script>
  
    var preview = angular.module('imagePreview');
	
	preview.controller('imagePreviewer', function($scope){				
		
	  createPreview = function(){
		  
		$scope.imageFile = "";
		
	  }
		
	});
  
  </script> -->

</body>
</html>