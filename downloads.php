<?php
include_once("connect.php");
$str=mysql_query("select * from downloads");
?>
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
            </head>
            <body>
            
            <div class="wrap">
				<div class="container">
			<div class="content">
				<div class="services">
						<div class="service-content">
							<h3>Downloads</h3>
                            <ol type="A">
                            <?php
							
							while($row=mysql_fetch_array($str))
							{
								$path='admin/download/'.$row[d_name];
							echo "
                            <li><p><a href='functions.php?path=$path'>$row[d_name]</a></p></li>
                            
                            ";
							}
							?>
                            </ol>
                            <br><br><br><br>
                            </div>
                            </div>
                            </div>
                            
                            
		</div>
		</div>
        </body>
        </html>