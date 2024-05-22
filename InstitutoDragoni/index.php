<?php



	if(isset($_COOKIE['login'])) {
    include("header.php");	
					
			
	}		
	else{
    include("header-restrita.php");
			
		
	    		
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
