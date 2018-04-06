<?php
include_once("connect.php");
?>

<table class="table" border="1">
<tr>
<th colspan="3">
Display downloads
</th>
</tr>
<th>Sr. no.</th>
<th>Downloads</th>
<th>Delete</th>
</tr>

<?php
$str="select * from downloads";
$str1=mysql_query($str);
while($str2=mysql_fetch_array($str1))
{
	
		$path='download/'.$str2[d_name];
		
	echo "<tr>
	<td>$str2[d_id]</td>
	<td>
	<a href='functions.php?path=$path'>$str2[d_name]</a>
	</td>
	<td><a href='delete1_down.php?d_id=$str2[d_id]'>Delete</a></td>
	</tr>"
	;

}

?>
</table>