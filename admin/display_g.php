<?php
include_once("connect.php");

?>

<table class="table" border="1">
<tr>
<th colspan="3">
Display Gallery
</th>
</tr>
<th>Sr. no.</th>
<th>Photo tilte</th>
<th>Image</th>
</tr>

<?php
$str="select * from gallery";
$str1=mysql_query($str);
while($str2=mysql_fetch_array($str1))
{
	
		$path='gallery/'.$str2[g_img];
		
	echo "<tr>
	<td>$str2[g_id]</td>
	<td>$str2[g_desc]</td>
	<td>
	<img src='$path' width='250' height='250'>
	</td>
	</tr>"
	;
}

?>
</table>