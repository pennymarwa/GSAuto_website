<?php
include_once("connect.php");
$j_id=$_REQUEST['j_id'];
$str=mysql_fetch_array(mysql_query("select * from job where j_id='$j_id'"));
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		
            </head>
            <body>
            
            <div class="wrap">
				<div class="container">
                <div class="row">
                <div class="col-lg-7">
     	
			<div class="content">
				<div class="services">
						<div class="service-content">
							<h3><?php echo $str[position]; ?></h3>
                            <table class="table table-hover">
											

									
                                        <?php
										echo "
											<tr>
											<th><span id='sp'>Position</span></th>
											<th><p><label style='color:#27B7E0'>$str[position]</label></p></th>
											</tr>
											
											<tr>
											<th><span id='sp'>Location</span></th>
											<th><p><label style='color:#27B7E0'>$str[location]</label></p></th>
											</tr>
											
											<tr>
											<th><span id='sp'>Posted date</span></th>
											<th><p><label style='color:#27B7E0'>$str[date]</label></p></th>
											</tr>
											
											<tr>
											<th><span id='sp'>Vacancy</span></th>
											<th><p><label style='color:#27B7E0'>$str[vacancy]</label></p></th>
											</tr>
											
											<tr>
											<th><span id='sp'>Description</span></th>
											<th><p><label style='color:#27B7E0'>$str[desc_value]</label></p></th>
											</tr>
											
											<tr>
											<th><span id='sp'>Last date to respond</span></th>
											<th><p><label style='color:#27B7E0'>$str[lst_date]</label></p></th>
											</tr>
											
											<tr>
											<th><span id='sp'>Responsibilities</span></th>
											<th><p><label style='color:#27B7E0'>$str[resp]</label></p></th>
											</tr>
											
											<tr>
											<th><span id='sp'>Requirements</span></th>
											<th><p><label style='color:#27B7E0'>$str[requirements]</label></p></th>
											</tr>
											";
										
	
	?>
    </table>
                          
                            
                            </div>
                            </div>
                            </div>
                            </div>
                            <br><br>
                            <div class="col-lg-5">
                            <br><br>
                            <div class="job-form">
				  	<h3>Work with us</h3>
                    
    <script src="js/job_validation.js" type="text/javascript" ></script>
                    <br>
					    <form name="myForm"  method="post" class="form-group" action="insert_profile.php" enctype="multipart/form-data"  onsubmit="return(validate());">
                        	<div>
						    	<span><label>Post applied for</label></span>
						    	<span><input type="text" name="position" class="textbox" value="<?php echo $str[position] ?>"  readonly></span>
						    </div>
                            <div>
						    	<span><label>Name</label></span>
						    	<span><input type="text" name="j_name" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="email" name="j_email" class="textbox"></span>
						    </div>
                            <div>
						    	<span><label>Address</label></span>
						    	<span><input type="text" name="j_add"  class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Phone no.</label></span>
						    	<span><input type="text" name="j_no" class="textbox"></span>
						    </div>
						    
                            <div>
						    	<span><label>Qualification</label></span>
						    	<span><input type="text" name="j_quali" class="textbox"></span>
						    </div>
                            <div>
						    	<span><label>Previous worked company</label></span>
						    	<span><input type="text" name="j_pwc" class="textbox"></span>
						    </div>
                            <div>
						    	<span><label>Total experience</label></span>
						    	<span><input type="text" name="j_exp" class="textbox"></span>
						    </div>
                             <div>
						    	<span><label>Functional area</label></span>
						    	<span><input type="text" name="j_area" class="textbox"></span>
						    </div>
						   <div>
                           <div>
						    	<span><label>Upload resume or cv</label></span>
						    	<span><input type="file" name="j_resume" class="textbox"></span>
						    </div>
                            <br>
						   <div>
						   		<span><input type="submit"></span>
						  </div>
					    </form>

				    </div>
                    </div>
                    </div>
                    
                            <br><br><br><br>
                            
                            
		</div>
		</div>
        </body>
        </html>