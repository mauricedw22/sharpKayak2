
<script>

  function test(){
	  
	 //window.location.reload(); 
	  
  }
  
  function activate1B(){
	  
	  document.getElementById("2").className = "";
	  document.getElementById("3").className = "";
	  document.getElementById("4").className = "";
	  document.getElementById("5").className = "";
	  
	  document.getElementById("1").className = "active";
	  
	  document.getElementById("dashboard").setAttribute("src","templates/bodyBackground.php");
	  
  }
  
  function activate2B(){
	  
	  document.getElementById("1").className = "";
	  document.getElementById("3").className = "";
	  document.getElementById("4").className = "";
	  document.getElementById("5").className = "";
	  
	  document.getElementById("2").className = "active";
	  
	  document.getElementById("dashboard").setAttribute("src","templates/dynamics.php");
	  
  }
  
  function activate3B(){
	  
	  document.getElementById("2").className = "";
	  document.getElementById("1").className = "";
	  document.getElementById("4").className = "";
	  document.getElementById("5").className = "";
	  
	  document.getElementById("3").className = "active";
	  
	  document.getElementById("dashboard").setAttribute("src","templates/header.php");
	  
  }
  
  function activate4B(){
	  
	  document.getElementById("2").className = "";
	  document.getElementById("3").className = "";
	  document.getElementById("1").className = "";
	  document.getElementById("5").className = "";
	  
	  document.getElementById("4").className = "active";
	  
	  document.getElementById("dashboard").setAttribute("src","templates/body.php");
	  
  }
  
  function activate5B(){
	  
	  document.getElementById("2").className = "";
	  document.getElementById("3").className = "";
	  document.getElementById("4").className = "";
	  document.getElementById("1").className = "";
	  
	  document.getElementById("5").className = "active";
	  
	  document.getElementById("dashboard").setAttribute("src","templates/footer.php");
	  
  }

</script>

<ul class="nav nav-tabs nav-justified">

 <li id="1" role="presentation" class="active" onclick="test();activate1B();"><a href="">Body Background</a></li>
 <li id="2" role="presentation" onclick="test();activate2B();"><a id="" href="">Dynamic Data</a></li>
 <li id="3" role="presentation" onclick="test();activate3B();"><a href="">Edit Header</a></li>
 <li id="4" role="presentation" onclick="test();activate4B();"><a href="">Edit Body</a></li>
 <li id="5" role="presentation" onclick="test();activate5B();"><a href="">Edit Footer</a></li> 
 
</ul>

<br /><br />


<iframe id="dashboard" style="width:100%;height:1200px;" frameborder="0" src="templates/bodyBackground.php">
   

</iframe>

<!-- <iframe style="width:100%;height:1200px;" frameborder="0" src="email.php">
   

</iframe> -->


