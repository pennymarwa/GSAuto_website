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
		
#sp
{
	padding:10px 20px;
	background-color:#CCC;
	margin-right:20px;
	margin-bottom:10px;
	color:#000;
}
		</style>
	</head>
	<body>
		
			<div class="wrap">
			<div class="container">
			<div class="content">
				<div class="about">
                
						<h2><?php echo $str[p_name]; ?></h2>
						<span><?php echo $str[p_title] ?></span>
						<br>
               
   
                        
					<div class="about-left">
                    
                        
                        
						<div class="about-histore">
                        <div class="row">
                        <div class="col-lg-8">
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
									
									</div>
									<div class="clear"> </div>
                                    </div>
								</div>
                                </div>
                            <div class="about-right">     
                    
                    <div class="col-lg-8 hidden-xs hidden-sm">
                    <br><br><br><br><br>
                     <?php
							$path1='admin/prod_images/'.$str[img1];
							$path2='admin/prod_images/'.$str[img2];
							$path3='admin/prod_images/'.$str[img3];
							$path4='admin/prod_images/'.$str[img4];
							$path5='admin/prod_images/'.$str[img5];
								
						?>

<div id="myCarousel" class="carousel slide" style="width:100%">    <!-- Carousel indicators -->    
<ol class="carousel-indicators">      
 <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
       <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li> 
                <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li> 
                        
                         </ol>       <!-- Carousel items -->    <div class="carousel-inner">
                                <div class="item active"> 
                                  <?php
						echo "<img src='$path1' style='width:100%; height:350px' alt='First slide' >";
						?>       </div>  
                                 <div class="item">
                                     <?php
						echo "<img src='$path2' style='width:100%; height:350px' alt='Second slide' >";
						?>
                                  </div>
                                  <div class="item">
                                   <?php
						echo "<img src='$path3' style='width:100%; height:350px' alt='Third slide' >";
						?>
                                  </div>
     <div class="item">  
       <?php
						echo "<img src='$path4' style='width:100%; height:350px' alt='Fourth slide' >";
						?>
             </div>     
          <div class="item">  
            <?php
						echo "<img src='$path5' style='width:100%; height:350px' alt='Fifth slide' >";
						?>
                  </div>
                      </div>    <!-- Carousel nav -->    
                      <a class="carousel-control left" href="#myCarousel"   style="color:rgba(0,0,0,1);font-weight:900;size:40px; font-size:36px;"     data-slide="prev">&lsaquo;</a>
                          <a class="carousel-control right" href="#myCarousel"  style="color:rgba(0,0,0,1);font-weight:900;size:40px; font-size:36px;"       data-slide="next">&rsaquo;</a> 
                          </div>


</div></div>
                    
                    
                    </div>    
<div class="clear"> </div>
				</div>
					
					
                   
                    
					
				<!---End-about---->
			<!---End-content---->
		</div>
        <br><br><br><br><br>
		</div>
	</body>
</html>


