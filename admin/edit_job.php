<?php
include_once("connect.php");
?>

<table class="table" border="1">
<tr>
<th colspan="9">
Display job profiles
</th>
</tr>
<th>Sr. no.</th>
<th>position</th>
<th>location</th>
<th>posted date</th>
<th>vacancy</th>
<th>description</th>
<th>last date</th>
<th>responsibilities</th>
<th>requirements</th>
<th>edit</th>
</tr>

<?php
$str="select * from job";
$str1=mysql_query($str);
while($str2=mysql_fetch_array($str1))
{
	
	echo "<tr>
	<td>$str2[j_id]</td>
	<td>$str2[position]</td>
	<td>$str2[location]</td>
	<td>$str2[date]</td>
	<td>$str2[vacancy]</td>
	<td>$str2[desc_value]</td>
	<td>$str2[lst_date]</td>
	<td>$str2[resp]</td>
	<td>$str2[requirements]</td>
	<td><a href='admin_index.php?a=edit1_job&j_id=$str2[j_id]'>Edit</a></td>
	</tr>"
	;

}

?>
</table>