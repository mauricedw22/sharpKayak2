<?php





?>

<!DOCTYPE HTML>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>

  <div class="row">
   
    <div class="col-md-12" style="text-align:center">
  
     <div style="background:#9ACD32;color:white;text-align:center;border-radius:20px;width:70%;margin-left:15%;">

	  <form id="emailData" action="" method="post">
			
        <label style="font-size: 1.5em;">Choose your dynamic data by course:</label><BR><BR>
			
		 <select class="form-control" style="width:80%;margin-left:10%;" name="c" form="emailData" style="width: 100%;">
		
				  <option value="1757">1757 Golf Club</option>
				  <option value="bdrn">Broad Run</option>
				  <option value="cobb">Cobb's Creek</option>
				  <option value="colhrg">Colonial Heritage</option>
				  <option value="comp">Compass Pointe</option>
				  <option value="cran">Cranbury</option>
				  <option value="delc">Delcastle</option>
				  <option value="dauph">Dauphin Highlands</option>
				  <option value="edol">Ed Oliver</option>
				  <option value="ike">Eisenhower</option>
				  <option value="fdr">FDR</option>
				  <option value="fgrn">Forest Greens</option>
				  <option value="gnrdg">General's Ridge</option>
				  <option value="hbpt">Harbour Pointe</option>
				  <option value="hhnt">Heritage Hunt</option>
				  <option value="hrtsh">Heritage Shores</option>
				  <option value="jnfb">JFB</option>
				  <option value="lkpres">Lake Presidential</option>
				  <option value="lkrd">Lake Ridge</option>
				  <option value="magr">Magnolia Greens (formely Westham)</option>
				  <option value="opine">Ocean Pines</option>
				  <option value="pbdy">PB Dye</option>
				  <option value="pwgc">Price William Country</option>
				  <option value="redg">RedGate</option>
				  <option value="rest">Reston National</option>
				  <option value="rock">Rock Manor</option>
				  
		  </select><BR>
		  
				<label>Preheader: <BR>(if there is a link, include it in HTML ex: &lt;a href=" whatever "&gt; link&lt;/a&gt;)</label><BR>
				<input class="form-control" style="width:80%;margin-left:10%;" type="text" name="emailPreheader" style="width: 100%;"><BR>
				
				<label>Subject Line:</label> <BR><input class="form-control" style="width:80%;margin-left:10%;" type="text" name="emailSubject" style="width: 100%;"><BR>
				
				<label>Link for Banner: (full link, including http://)</label> <BR><input class="form-control" style="width:80%;margin-left:10%;" type="text" name="emailBannerLink" style="width: 100%;"><BR>
				
				<label>Name: (include Footprints ID, Segment, and date MMDDYYYY)</label> <BR><input class="form-control" style="width:80%;margin-left:10%;" type="text" name="emailName" style="width: 100%;"><BR><BR>
				
				<input class="btn btn-warning" type="submit" value="Submit"><BR><BR>
	
			    <ul style="list-style-type:none;text-align:center"><li style="font-size:2em;font-family:'Quicksand'">Mid-Atlantic Edition</li></ul><BR>
			
			</form> 
			
		</div>
	  
	  </div>
	  
	  <!-- <div class="col-md-6" style="background:#9ACD32;color:white;float:right;border-radius:20px;">
	  
	   <h1 style="font-family:'Quicksand';text-align:center;"> PREVIEW </h1>
	  
		 <iframe name="previewer" src="" style="width:100%;height:800px;background:white;color:white;float:right;border-radius:20px;padding:0;">
		 
		 </iframe>
		 
		 <br /><br /><br />
	  
	  </div> -->
	  
  </div>

</body>
</html>