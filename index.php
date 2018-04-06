<?php
ob_start();
session_start();
include_once("connect.php");
?>

<html>
<head>
<title>GSAUTO</title>
<link rel="shortcut icon" href="images/gsauto_icon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/index.css">

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.min.js"></script>
   <link rel="stylesheet" href="cssmenu/styles.css">
   <script src="cssmenu/jqu880B.js" type="text/javascript"></script>
   <script src="cssmenu/script.js"></script>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		 <script type="text/javascript" src="js/move-top.js"></script>


<link href="css/slider.css" rel="stylesheet" type="text/css"  media="all" />
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		    <script type="text/javascript" src="js/camera.min.js"></script>
				          <script type="text/javascript">
			   jQuery(function(){
				jQuery('#camera_wrap_1').camera({
					height: '500px',
					pagination: false,
				});
			});
		  </script>
          
          
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Raleway:400,100,300,500,600,700,800,900,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,600,700,800,900,200' rel='stylesheet' type='text/css'>
          
</head>
<body>

<div class="container" style="width:100%;">
<nav class="navbar" role="navigation"> 
<div class="row navbar-fixed-top" style="background-color:#0F1768;">
          
          <div class="col-lg-3" style="background-color:#27B7E0;">
          <img class="img-responsive center-block" src="images/gsauto-logo.png">
          </div>
          <div class="navbar-header">       
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse" style="background-color:#FFF;">      
          </button>       
          </div>
          
          
          <div class="col-lg-9 collapse navbar-collapse navbar-right"  id="example-navbar-collapse">
<?php
include_once("menu.php");
?>
</div>
</div>
</nav>
<section>


<?php
	
	if($_REQUEST['a']=="about")
	include_once("about.php");
	else if($_REQUEST['a']=="quality")
	include_once("quality_certi.php");
	else if($_REQUEST['a']=="cb")
	include_once("customer_base.php");
	else if($_REQUEST['a']=="facilities")
	include_once("facilities.php");
	else if($_REQUEST['a']=="history")
	include_once("history.php");
	else if($_REQUEST['a']=="product")
	include_once("prodslider.php");
	else if($_REQUEST['a']=="contact")
	include_once("contact.php");
	else if($_REQUEST['a']=="downloads")
	include_once("downloads.php");
	else if($_REQUEST['a']=="sign_in")
	include_once("sign_in.php");
	else if($_REQUEST['a']=="sign_up")
	include_once("sign_up.php");
	else if($_REQUEST['a']=="logout")
	include_once("logout.php");
	else if($_REQUEST['a']=="edit_su")
	include_once("edit_signup.php");
	else if($_REQUEST['a']=="edit1_su")
	include_once("edit1_su.php");
	else if($_REQUEST['a']=="gallery")
	include_once("photos.php");
	else if($_REQUEST['a']=="feed")
	include_once("feed.php");
	else if($_REQUEST['a']=="wwu")
	include_once("openings.php");
	else if($_REQUEST['a']=="jobprofile")
	include_once("jobprofile.php");
	else
	{
		
	?>
	

<div class="row">
<div class="slider"  id="top">					     
										<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">									           
											      <div data-src="images/slider3.jpg">  </div> 
											      <div data-src="images/slider4.jpg">  </div>
											      <div data-src="images/slider2.jpg">  </div>
											      <div data-src="images/slider1.jpg">  </div>
											</div>
							   		   <div class="clear"> </div>					       
							 		</div>
</div>


<div class="container" style=" font-family:'Open Sans', sans-serif;">

<div class="row">

	
	<div class="col-lg-4 hidden-xs hidden-md hidden-sm" id="d1">
    <h3>Casting Products</h3>
    <br>
    <p>Ductile iron Cast Components Spring hanger Shackle/Bracket, Engine Mounting , Base Plates, Threaded Rings,Compressor Mounting Bracket , casting in Weight Range 1-20 Kgs.</p>
    
    <?php echo"<a href='index.php?a=product&p_id=6'> <button class='btn btn-default' id='d4'>Read more</button></a>"; ?>
    
    </div>
    
    <div class="col-lg-4 hidden-xs hidden-md hidden-sm" id="d2">
    <h3>Customer base</h3>
    <br>
    <p>We specialize in Suspension Components (Machined, Forged and Cast) for Commercial vehicles (LCVs, MCVs and HCVs) and Passenger Cars for various makes/ models of Vehicles...</p>
   
    <?php echo"<a href='index.php?a=cb'> <button class='btn btn-default' id='d4'>Read more</button></a>"; ?>
    </div>
    
    <div class="col-lg-4 hidden-xs hidden-md hidden-sm" id="d3" >
    <h3>Quality certification</h3>
    <br>
    <p>From the very beginning, G.S. Auto has always shown incessant thirst for Product Quality and Customer Satisfaction. At G.S., each component passes through series ..</p>
    
    <?php echo"<a href='index.php?a=quality'> <button class='btn btn-default' id='d4'>Read more</button></a>"; ?>
    </div>
    
    <!--clearfix-->
    <div class="col-md-6 col-sm-12 col-xs-12 hidden-lg">
    <h3>Casting Products</h3>
    <br>
    <p>Ductile iron Cast Components Spring hanger Shackle/Bracket, Engine Mounting , Base Plates, Threaded Rings,Compressor Mounting Bracket , casting in Weight Range 1-20 Kgs.</p>
    
    <?php echo"<a href='index.php?a=product&p_id=6'> <button class='btn btn-default' id='d4'>Read more</button></a>"; ?>
    
    </div>
    
    <div class="col-md-6 col-sm-12 col-xs-12 hidden-lg">
    <h3>Customer base</h3>
    <br>
    <p>We specialize in Suspension Components (Machined, Forged and Cast) for Commercial vehicles (LCVs, MCVs and HCVs) and Passenger Cars for various makes/ models of Vehicles...</p>
   
    <?php echo"<a href='index.php?a=cb'> <button class='btn btn-default' id='d4'>Read more</button></a>"; ?>
    </div>
    
    <div class="col-md-6 col-sm-12 col-xs-12 hidden-lg" >
    <h3>Quality certification</h3>
    <br>
    <p>From the very beginning, G.S. Auto has always shown incessant thirst for Product Quality and Customer Satisfaction. At G.S., each component passes through series ..</p>
    
    <?php echo"<a href='index.php?a=quality'> <button class='btn btn-default' id='d4'>Read more</button></a>"; ?>
    </div>
    <!--clearfix close-->
    
</div> 

<hr>

<div class="row">

	 <div class="col-lg-4 col-sm-12 col-xs-12 col-md-12" id="d5">
      <br>
    <?php echo "<a href='index.php?a=downloads'><img src='images/images1.png' class='img-responsive'></a>"; ?><br>
    <?php echo "<a href='index.php?a=wwu'><img src='images/resume.png' class='img-responsive'></a>"; ?>
    </div>
   
	<div class="col-lg-8 col-sm-12 col-xs-12 col-md-12" id="d6">
    <h3>Manufacturing Facilities</h3>
    <p>As a manufacturing company, over the years we have multiplied capacities, built up technologies and invested in equipments that place us in a unique league.</p>
        <?php echo"<a href='index.php?a=facilities'><button class='btn btn-default'  style='background-color:#0F1768; color:#FFF;' > Read more </button></a> "; ?>
    </div>
    
   
    
    <div class="col-lg-8 col-sm-12 col-xs-12 col-md-12" id="d6">
   <h3>About GS Group</h3>
    <p>GSAUTO is one of the leading and fastest growing manufacturer of Automotive Suspension and Fastening Components for Indian (§t International Passenger Cars, Utility Vehicles, Commercial Vehicles (LCVs, MCVs, HCVs), Multi-Axle Vehicles, Trailers and Special Purpose Vehicles. ..</p>
       <?php echo"<a href='index.php?a=about'><button class='btn btn-default'  style='background-color:#0F1768; color:#FFF;' > Read more </button></a> "; ?>
    </div>
    
   

</div>


</div>                   
                    
 <?php
	}
 ?>              

</section><!--section close -->

<div class="row center-block"  style="background-color:#0F1768;">

    <ul class="nav navbar-nav" id="menu1">
		<li><a href="index.php">Home </a></li>
		<li> <?php echo"<a href='index.php?a=about'>About</a>"; ?> </li>
		<li> <?php echo"<a href='index.php?a=history'>History</a>"; ?> </li>
		<li><?php echo "<a href='index.php?a=contact'>Contact us</a>"; ?></li>
		<li><?php echo "<a href='index.php?a=downloads'>Downloads</a>"; ?></li>
		<li><?php echo "<a href='index.php?a=gallery'>Gallery</a>"; ?></li>
        <li><?php echo "<a href='index.php?a=wwu'>Work with us </a>"; ?></li>
		<li><?php echo "<a href='index.php?a=facilities'>Manufacturing facilities</a>"; ?></li>
		<li><?php echo "<a href='index.php?a=quality'>Quality certification</a>"; ?></li>
		<li><?php echo "<a href='index.php?a=cb'>Customer base</a>"; ?></li>
		</ul>
    <div class="col-lg-12">
<p style="margin-left:42%; color:#fff; margin-top:2%;">All Rights Reserved By : www.gsuto.in</p>
</div>
</div>

<br><br>

</div><!--container close-->

</body>
</html>