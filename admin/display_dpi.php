<?php
include_once("connect.php");
?>
<table class="table table-responsive">
<tr>
<th>Sno</th>
<th>Product Id</th>
<th>Product NAme</th>
<th>Product Image</th>
<th>Description

</th>
</tr>
<?php
$x=1;
$str=mysql_query("select * from product_item GROUP BY p_id");
while($str1=mysql_fetch_array($str))
{
	$row=mysql_fetch_array(mysql_query("select * from product_master where p_id='$str1[p_id]'"));
	$path1="prod_images/".$row[img1];
	$path2="prod_images/".$row[img2];
	$path3="prod_images/".$row[img3];
	$path4="prod_images/".$row[img4];
	$path5="prod_images/".$row[img5];
	echo "
	<tr>
	<th>$x</th>
	<th>$str1[p_id]</th>
	<th>$row[p_name]</th>
	<th><img src='$path1' width='70' height='70'><img src='$path2' width='70' height='70'><img src='$path3' width='70' height='70'><img src='$path4' width='70' height='70'><img src='$path5' width='70' height='70'></th>
	<th>
	<table class='table table-responsive '>";
	$show1=mysql_query("select * from product_item where p_id='$str1[p_id]'");
	while($show2=mysql_fetch_array($show1))
	{
	$row_dsc=mysql_query("select * from prod_desc_master where desc_id='$show2[desc_id]'");
	while($show=mysql_fetch_array($row_dsc))
	{
		echo "
		<tr>
		<td>$show[desc_item]</td>
		<td>$show2[item_value]</td>
		</tr>
		";
	}
	}
	echo"</table>
	</th>
	</tr>
	";
	$x++;
}
?>
</table>