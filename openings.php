<?php
include_once("connect.php");
$str=mysql_query("select * from job");
?><head>
<style type="text/css">
body
{
font-family: 'Open Sans', sans-serif;

}
button{
	border:none;
	cursor:pointer;
	color: #FFF;
	background:#0F1768;
	padding: 10px 50px 10px 10px;
	font-family: 'Open Sans', sans-serif;
	display: block;
	-moz-transition: background 0.3s ease-out;
	-o-transition: background 0.3s ease-out;
	-webkit-transition: background 0.3s ease-out;
	transition: all 0.3s ease-out;
}
button a{
	text-decoration:none;
	color:#FFF;
}
button a:hover{
	text-decoration:none;
	color:#FFF;
}
button:hover{
	background:#27B7E0;
}
</style>
</head>

<br><br><br>
<div class="container">
<div class="row">
<div class="col-lg-12 center-block">
<h2> WORK WITH US</h2>
</div>
</div>
<br><br>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<table class="table table-responsive" width="100%">
<tr>
<th colspan="4">View job profiles</th>
</tr>
<tr>
<th>Position </th>
<th>Work location</th>
<th>Date posted</th>
<th>View job</th>
</tr>
<?php
while($row=mysql_fetch_array($str))
{
echo "
<tr>
<td>$row[position]</td>
<td>$row[location]</td>
<td>$row[date]</td>
<td><a href='index.php?a=jobprofile&j_id=$row[j_id]' class='btn btn-primary'>View Job</a></td>
</tr>
";	
}

?>
</table>
</div>
</div>
</div>
<br><br><br><br>