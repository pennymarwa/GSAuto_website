<?php
include_once("connect.php");
$str=mysql_fetch_array(mysql_query("select * from product_master where p_id='$p_id'"));
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
 <!-- Custom files -->
<link href="css/style1.css" rel='stylesheet' type='text/css' />
 <!-- Custom  files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Raleway:400,100,300,500,600,700,800,900,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,600,700,800,900,200' rel='stylesheet' type='text/css'>
<!----//webfonts---->
</head>
<body>
		
		        
                        
                        
                         
		  				 <!---start-our story----->
		<div  class="gellery" id="gallery">
				<div class="our-story">
				</div>	
			<div class="group_2" id="Portfolio">
				<div class="group_2_items">
						<div class="container">
					<div id="owl-demo1" class="owl-carousel">
                    <?php
							$path1='admin/prod_images/'.$str[img1];
							$path2='admin/prod_images/'.$str[img2];
							$path3='admin/prod_images/'.$str[img3];
							$path4='admin/prod_images/'.$str[img4];
							$path5='admin/prod_images/'.$str[img5];
								
						?>
						<div class="item">
							<div class="carousel">
						  	   <div class="group_2_img1">
						<?php
						echo "<img src='$path1' width='100px' height='250px'>";
						?>
                        </div>
							 </div>
						</div>	
                        
                        <div class="item">
							<div class="carousel">
						  	   <div class="group_2_img1">
						<?php
						echo "<img src='$path2' width='100px' height='250px'>";
						?>
                        </div>
							 </div>
						</div>	
                        
                        <div class="item">
							<div class="carousel">
						  	   <div class="group_2_img1">
						<?php
						echo "<img src='$path3' width='100px' height='250px'>";
						?>
                        </div>
							 </div>
						</div>	
                        
                        <div class="item">
							<div class="carousel">
						  	   <div class="group_2_img1">
						<?php
						echo "<img src='$path4' width='100px' height='250px'>";
						?>
                        </div>
							 </div>
						</div>	
                        
                        <div class="item">
							<div class="carousel">
						  	   <div class="group_2_img1">
						<?php
						echo "<img src='$path5' width='100px' height='250px'>";
						?>
                        </div>
							 </div>
						</div>	
					
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Owl Carousel Assets -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="js/owl.carousel.js"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 1,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav :true,
			    scrollPerPage :true,
			    pagination : true,
    			paginationNumbers: false,
		      });
		
		    });
		    $(document).ready(function() {
		
		      $("#owl-demo1").owlCarousel({
		        items : 1,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : true,
			    scrollPerPage :true,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		   
		    </script>		

</body>
</html>