<?php
include_once("connect.php");
$p_id=$_REQUEST['p_id'];
$str=mysql_fetch_array(mysql_query("select * from product_master where p_id='$p_id'"));
$str1=mysql_query("select * from prod_desc_master");
$str2=mysql_query("select * from product_item");
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
		
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		 <script type="text/javascript" src="js/move-top.js"></script>
		<link href="css/slider.css" rel="stylesheet" type="text/css"  media="all" />
		  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		    <script type="text/javascript" src="js/camera.min.js"></script>
				<script type="text/javascript">
			   jQuery(function(){
				jQuery('#camera_wrap_1').camera({
					height: '350px',
					pagination: false,
				});
			});
		  </script>
		  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
        
        <style>
		.about-left{
	width:100%;
	float:left;
}
#sp
{
	padding:10px 20px;
	background-color:#CCC;
	margin-right:20px;
	color:#000;
}
		</style>
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<!----start--imageslider----->
		       <!--start-image-slider---->
								
		      			<!--End-image-slider---->
		        
			<!----End--imageslider----->
			<!----start-top-header----->
			<div class="wrap">
			<div class="container">
     		  <!----End-top-header----->
			<!---End-header---->
			<!---start-content---->
			<div class="content">
				<!---start-about---->
				<div class="about">
					<div class="about-left">
						<h2><?php echo $str[p_name]; ?></h2>
						<span><?php echo $str[p_title] ?></span>
						<br>
               
   
                        
                        
                        
						<div class="about-histore">
									<h3>Description</h3>
									
										<table>
                                        <?php
                                        $show1=mysql_query("select * from product_item where p_id='$str[p_id]'");
	while($show2=mysql_fetch_array($show1))
	{
	$row_dsc=mysql_query("select * from prod_desc_master where desc_id='$show2[desc_id]'");
	while($show=mysql_fetch_array($row_dsc))
	{
											echo "
											<tr>
											<th style='width:200px;'><span id='sp'>$show[desc_item]</span></th>
											<th><p><label style='color:#27B7E0'>$show2[item_value]</label></p></th>
											</tr>
											";
	}
	}
	?>
											<div class="clear"> </div>
										</table>
									
									
									<div class="clear"> </div>
                                    
								</div>
                                
                         <?php
					include_once("sliderr.php");
					?>         

					</div>	
					
                   
                    
					<div class="clear"> </div>
				</div>
				<!---End-about---->
			<!---End-content---->
		</div>
		<!---End-wrap---->
		</div>
		</div>
		<br><br><br><br>
		</div>
	</body>
</html>

