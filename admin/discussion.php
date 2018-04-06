<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
.button{
	border:none;
	cursor:pointer;
	color: #FFF;
	background:#0F1768;
	padding: 10px 50px 10px 10px;
	font-family: 'Open Sans', sans-serif;
	font-size:1em;
	display: block;
	-moz-transition: background 0.3s ease-out;
	-o-transition: background 0.3s ease-out;
	-webkit-transition: background 0.3s ease-out;
	transition: all 0.3s ease-out;
}
.button a{
	text-decoration:none;
	color:#FFF;
}
.button:hover{
	background:#27B7E0;
}
.button:active{
	background:#27B7E0;
}
</style>
</head>

<body>
<div align="center">
<table cellpadding="0" cellspacing="0" width="700px">
<tr>
<td>

<div align="left">
<form  method="post" name="form" action="a_demo_insert.php">
<table cellpadding="0" cellspacing="0" width="690px">

<tr><td align="left"><div align="left"><h3>Discussion</h3></div></td>
<td>
 <?php echo " <button type='button' class='button'><a href='admin_index.php?a=accounts'>Accounts</a></button>"; ?> 
 </td>
</tr>
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
include_once("connect.php");
$sql_in= mysql_query("SELECT * FROM messages order by msg_id desc");

echo "

<table cellpadding='0' cellspacing='0' width='70%'>";
while($r=mysql_fetch_array($sql_in))
{
	$str=mysql_query("select * from user where email='$r[user_id]'");
	if(mysql_num_rows($str))
	{
	$s=mysql_fetch_array($str);
	$path='../dp/'.$s[img];
	echo "

<tr class='comment' valign='top'>
<td class='comment_box' align='left'  ><img src='$path' width='70' height='70'></td>
<td class='comment_box' align='left' style='width:80%'>
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
	$path1='admin-dp/'.$res[img];
	echo "

<tr class='comment' valign='top'>
<td class='comment_box' align='left'  ><img src='$path1' width='70' height='70'></td>
<td class='comment_box' align='left' style='width:80%'>
<ul>
<li>$res[user_name]</li>
<li>$r[msg]</li>
</ul>
</td>
</tr>";
	
	}
}
echo "

</table>
";
?>




</div>
</body>
</html>
