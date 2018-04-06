<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript">
$(function() {

$(".comment_button").click(function() {

var element = $(this);
   
    var test = $("#content").val();
	
    var dataString = 'content='+ test;
	
	
	
	if(test=='')
	{
	alert("Please Enter Some Text");
	
	}
	else
	{
	$("#flash").show();
	$("#flash").fadeIn(400).html('<img src="http://tiggin.com/ajax-loader.gif" align="absmiddle">&nbsp;<span class="loading">Loading Comment...</span>');
	
		
		$.ajax({
		type: "POST",
  url: "demo_insert.php",
   data: dataString,
  cache: false,
  success: function(html){
  
  
  
    $("#display").after(html);

 document.getElementById('content').value='';
 $("#flash").hide();
	
  }
  
  
});
	}
		

    return false;
	});



});
</script>
<style type="text/css">
body
{
font-family: 'Open Sans', sans-serif;
font-size:14px;
}
.comment_box
{
background-color:#CCC; border-bottom:#ffffff solid 1px; padding-top:3px
}
a
	{
	text-decoration:none;
	}
	
</style>
</head>

<body>
<div align="center">
<table cellpadding="0" cellspacing="0" width="700px">
<tr>
<td>

<div align="left">
<form  method="post" name="form" action="">
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
<div style="height:7px;"></div>
<div id="flash" align="left"  ></div>

<div id="display" align="left"></div>

</td>
</tr>
</table>

<?php
include_once("demo_insert.php");
?>




</div>
</body>
</html>
