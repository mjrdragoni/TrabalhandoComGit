<?php
	if(isset($_COOKIE['login'])) {
    include("header-restrita.php");				
	}		
	else{   
    include("header.php");	    		
		} 	
?>
<div class="container">
  <div class="row">
    <div class="col mt-5">      
        <img src="img/1.jpg" alt="">     
    </div>
    <div class="col mt-5">      
        <img src="img/2.jpg" alt="">     
    </div>
    <div class="col mt-5">      
        <img src="img/1.jpg" alt="">     
    </div>
    <div class="col mt-5">      
        <img src="img/2.jpg" alt="">     
    </div>
  </div>
</div>
<?php
include ("footer.html");
?>
