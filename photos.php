<?php
include_once("connect.php");
$str=mysql_query("select * from gallery");
?>
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/stylep.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!-- navigation -->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<!-- navigation -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Pets Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
   <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

		});
	</script>
	
  <script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</head>
<body>
    <!-- header-section-starts -->
	
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
		<div class="main">
			<div class="gallery-content">
	 <div class="container">
		<div class="gallery-content-head">
        <br><br><br>
			<h3 align="left">Photos</h3>
		</div>
			<div class="section group">
             <?php
					while($str1=mysql_fetch_array($str))
					{
						$path='admin/gallery/'.$str1[g_img];
                    echo "
					<div class='grid_1_of_4 images_1_of_4'>
					 <a class='fancybox' href='$path' data-fancybox-group='gallery' title='$str1[g_desc]'><img src='$path' width='300' height='300' class='img-style row6' ><span> </span></a>
					 <br>
							
				</div>
					";
					}
					?>
				
				
				
			</div> 	
   </div>
</div>

		</div> 
	</div>
	
</body>
</html>