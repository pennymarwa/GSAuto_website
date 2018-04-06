<?php
include_once("connect.php");

?>

<table class="table" border="1">
<tr>
<th colspan="3">
Display Products
</th>
</tr>
<th>Sr. no.</th>
<th>Product</th>
<th>Product tilte</th>
<th>Image</th>
</tr>

<?php
$str="select * from product_master";
$str1=mysql_query($str);
while($str2=mysql_fetch_array($str1))
{
	
		$path1='prod_images/'.$str2[img1];
		$path2='prod_images/'.$str2[img2];
		$path3='prod_images/'.$str2[img3];
		$path4='prod_images/'.$str2[img4];
		$path5='prod_images/'.$str2[img5];
		
	echo "<tr>
	<td>$str2[p_id]</td>
	<td>$str2[p_name]</td>
	<td>$str2[p_title]</td>
	<td>
	<img src='$path1' width='100' height='100'>
	<img src='$path2' width='100' height='100'>
	<img src='$path3' width='100' height='100'>
	<img src='$path4' width='100' height='100'>
	<img src='$path5' width='100' height='100'>
	</td>
	</tr>"
	;
}

?>
</table>