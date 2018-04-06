<?php
include_once("connect.php");
?>
<head>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		
        <style type="text/css">
body
{
font-family: 'Open Sans', sans-serif;
font-size:14px;
}
.comment_box
{
background-color:#CCC; border-bottom:#ffffff solid 1px;
}
a
	{
	text-decoration:none;
	}
	
</style>
	</head>
		<!---start-wrap---->
			<!---start-header---->
			<!----start--imageslider----->
		       <!--start-image-slider---->
								
		      			<!--End-image-slider---->
		        
	<div class="clear"> </div>
			<!----End--imageslider----->
			<!----start-top-header----->
			<div class="wrap">
				<div class="container">
     		  <!----End-top-header----->
			<!---End-header---->
			<!---start-content---->
			<div class="content">
				<!-----start-contact----->
				<div class="contact">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d427.93625403351615!2d75.85751471656656!3d30.90092414859213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a83a410b99833%3A0x402a0aaef14cbb31!2sG.S.+Auto+International+Ltd.!5e0!3m2!1sen!2sin!4v1430211510477" width="100%" height="175" frameborder="0" style="border:0"></iframe>
                            
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Contact G.S. Auto International Ltd.</h3>
						    	<p>G.S. ESTATE, G.T. ROAD,</p>
						   		<p>LUDHIANA - 141 010</p>
						   		<p>INDIA.</p>
				   		<p>PHONE: +91-161-2511001/2/3/4/5</p>
				   		<p>FAX: +91-161-2510885</p>
                        <p>For general Query or information: <span>info@gsgroupindia.com</span></p>
                        <p>For sales & marketing information: <span>mkt@gsgroupindia.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  
                    <div class="contact-form">
                   	<h3>Start a Discussion now</h3>
                    <?php
					if(!$_SESSION['user'])
						{
							echo "<p>For the discussion and enquiry, you need to login first</p>
							<br>
							<button type='button'><a href='index.php?a=sign_in'>Login First</a></button>";
						}
					else
					{

					
					
					?>
                    
                    <div class="discuss" align="center">
<table cellpadding="0" cellspacing="0" width="700px">
<tr>
<td>

<div align="left">
<form  method="post" name="form" action="demo_insert.php">
<table cellpadding="0" cellspacing="0" width="690px">

<tr><td align="left"><div align="left"><h3>Discussion</h3></div></td></tr>
<tr>
<td style="padding:4px; padding-left:10px;" class="comment_box">
<textarea cols="30" rows="2" style="width:660px; font-size:14px; font-weight:bold" name="content" id="content" maxlength="145" ></textarea><br />
<input type="submit"  value="Update"  id="v" name="submit" class="comment_button"/>
</td>

</tr>

</table>
</form>

</div>
<div style="height:7px"></div>
<div id="flash" align="left"  ></div>

<div id="display" align="left"></div>

</td>
</tr>
</table>
                    <?php
$sql_in= mysql_query("SELECT * FROM messages order by msg_id desc");

echo "

<table cellpadding='0' cellspacing='0' width='100%'>";
while($r=mysql_fetch_array($sql_in))
{
	$str=mysql_query("select * from user where email='$r[user_id]'");
	if(mysql_num_rows($str))
	{
	$s=mysql_fetch_array($str);
	$path='dp/'.$s[img];
	echo "

<tr class='comment'>
<td class='comment_box' align='left'  ><img src='$path' width='70' height='70'></td>
<td class='comment_box' align='left'>
<ul>
<li>$s[fname]&nbsp;$s[lname]:</li>
<li>$r[msg]</li>
</ul>
</td>
</tr>";
}
else
{
	$res=mysql_fetch_array(mysql_query("select * from admin where user_name='$r[user_id]'"));
	$path1='admin/admin-dp/'.$res[img];
	echo "

<tr class='comment' valign='top'>
<td class='comment_box' align='left'  ><img src='$path1' width='70' height='70'></td>
<td class='comment_box' align='left' style='width:80%'>
<ul>
<li>$res[user_name]:</li>
<li>$r[msg]</li>
</ul>
</td>
</tr>";
}
}
echo "

</table>";

					}
					
					?>
                    </div>
  					
                <div class="contact-form">
				  	<h3>Message Us</h3>
                    <p>You can send us a personal message if you don't want to register</p>
					    <form method="post" action="insert_c.php">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="c_name" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="email" name="c_email" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input type="number" name="c_mobile" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea  name="c_subject"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"></span>
						  </div>
					    </form>

				    </div>		
                    </div>	
			  </div>
			</div>
		</div>
		<!---End-wrap---->
		</div>
		</div>
		<br><br><br><br>
		</div>
	
