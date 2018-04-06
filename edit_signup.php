<?php
$user=$_SESSION['user'];
$str=mysql_fetch_array(mysql_query("select * from user where email='$user'"));


?><head>
    
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
        </head>

	<div class="wrap">
				<div class="container">
     		<br><br><br><br>
     		  <!----End-top-header----->
			<!---End-header---->
			<!---start-content---->
			<div class="content">
				<!-----start-contact----->
				<div class="contact">
				<div class="section group">				
				<div class="col span_1_of_3">
                <h3>
                <?php
				echo " $str[fname]&nbsp;$str[lname]";
				?>
                </h3>
					<?php
					$path='dp/'.$str[img];
					echo "
					<img src='$path' width='200' height='200'>";
					?>
                    <br><br>
                    <button type="button"><?php echo "<a href='index.php?a=edit1_su'>Edit Profile</a>"; ?></button>
      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Details</h3>
					    <table class="table">
                        <tr>
                        <td>Name</td>
                        <td>
                        <?php
						echo " $str[fname]&nbsp;$str[lname]";
						?>
                        </td>
                        </tr>
                        
                        <tr>
                        <td>Address</td>
                        <td>
                        <?php
						echo " $str[address]";
						?>
                        </td>
                        </tr>
                        
                        <tr>
                        <td>Email</td>
                        <td>
                        <?php
						echo " $str[email]";
						?>
                        </td>
                        </tr>
                        
                        <tr>
                        <td>Contact no.</td>
                        <td>
                        <?php
						echo " $str[phone]";
						?>
                        </td>
                        </tr>
                        
                        <tr>
                        <td>Password</td>
                        <td>
                        <?php
						echo " $str[password]";
						?>
                        </td>
                        </tr>
                        
                        
                        </table>
                        
                        <div class="feed">		
					<h3>Feedback form</h3>
                    <p style="font-size:0.96em;">Please fill the feedback form and answer us our question. This form will help us to improve your product and service.</p>
                    <br>
                    <button type="button"><?php echo "<a href='index.php?a=feed'>Feedback form</a>"; ?></button>
      			
				</div>				   
                 </div>
                    
  				</div>				
			  </div>
			</div>
		</div>
		<!---End-wrap---->
		</div>
		</div>
        <br><br>