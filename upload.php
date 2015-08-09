<?php
    require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
    use google\appengine\api\cloud_storage\CloudStorageTools;
    $time = date('U');

    //$app_host = array_pop(@explode("~", $_SERVER["APPLICATION_ID"])) . ".appspot.com";
    $options = [ 'gs_bucket_name' => 'sharp-kayak-89215' ];
    $upload_url = CloudStorageTools::createUploadUrl('/upload.php', $options);
    //$options = [ 'gs_bucket_name' => 'sharp-kayak-89215-bucket' ];

if(count($_FILES)){
    //$image = new SimpleImage();
    //$image->load($_FILES['uploaded_files']['tmp_name']);
    //$image->resizeToWidth(600);
    $gs_name = $_FILES['uploaded_files']['tmp_name'];
    //$image->save($gs_name, 'gs://' . $app_host  .'/' . $_FILES['uploaded_files']['name']);
    move_uploaded_file($gs_name, 'gs://' . 'sharp-kayak-89215'  .'/' . $_FILES['uploaded_files']['name']);
    header("Location: /edit.html?img=" . $_FILES['uploaded_files']['name']);
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Upload an Image</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
  <body>
      <!-- <div class="row">
        <div id="upload-form-col" class="col-md-6">
            <h2>Chose a file to upload</h2>
			//form action = ' ?php echo $upload_url ? '
            <form action="" enctype="multipart/form-data" method="post" style="padding:1em;">
                <div class="form-group overflow-hidden">
                    <div class="input-group">
                       <input type="file" name="uploaded_files" size="40" accept="image/*">
                       <input type="submit" value="Upload" class="btn btn-primary">
                   </div>
                </div>
            </form>
        </div>
    </div> -->
   <div id="main" class="container container-fluid">
	<div class="row">
	
	    <div id="" class="col-md-12" style="text-align:center;"> 
		
		    <img style="width:30%;height:150px;" src="images/bc-corporate-logo.png">
			 
<form enctype="multipart/form-data" action="<?php echo $upload_url ?>" method="post" style="width:50%;margin-left:25%;background:#9ACD32;color:white;border-radius:20px;box-shadow:5px 5px 5px orange;">
			
				<!-- MAX_FILE_SIZE must precede the file input field -->
				<input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
				<!-- Name of input element determines name in $_FILES array -->
				<br>
				<label style="font-size: 2em;font-family:'Quicksand';font-weight:bold;">UPLOAD YOUR IMAGE</label><BR><BR>
				<input type="file" style="margin-left:32%;" name="uploaded_files" accept="image/*" required>
				<BR>
				<!-- <input class="form-control" type="text" style="width:20%;margin-left:40%;" name="footprint" placeholder="Footprints ID (Required)"> -->
				<input class="btn btn-warning" type="submit" value="Upload Image" /><BR><BR>
				<p>JPG or PNG only</p><p>72 dpi</p><br />
			
			</form> 
			
		</div>
	
     </div>
	
	</div>	
	
  </body>
</html>