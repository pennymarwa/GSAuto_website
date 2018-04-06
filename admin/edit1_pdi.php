<?php
include_once("connect.php");
$iv=$_REQUEST['iv'];
$id=$_REQUEST['id'];
$str2=mysql_fetch_array(mysql_query("select * from product_item where item_id='$id' and item_value='$iv'"));
$str=mysql_query("select * from product_master");
$str1=mysql_query("select * from prod_desc_master");

?>
<head>
		
<script type="text/javascript" src="js/validation.js"></script>
</head>

<div class="container">
<div class="row">
<br>
<br>
<form class="form-group" action="edit2_pdi.php" method="post" name="myForm"  onsubmit="return(validate());">

<div class="col-lg-3">
Product Name
</div>
<div class="col-lg-9">
<select name="p_id" class="form-control">
<option value="<?php echo $str2[p_id] ?>" disabled="disabled"></option>
<?php
while($row=mysql_fetch_array($str))
{
echo "<option value='$row[p_id]'";
if($str2[p_id]==$row[p_id])
echo "selected=selected";
echo ">$row[p_id]: $row[p_name]
</option>";
}
?>
</select>
<br>
</div>

<div class="col-lg-3">
Product Category
</div>
<div class="col-lg-9">
<select name="desc_id" class="form-control">
<?php
while($row1=mysql_fetch_array($str1))
{
echo "<option value='$row1[desc_id]' ";
if($str2[desc_id]==$row1[desc_id])
echo "selected=selected";
echo ">$row1[desc_item]</option>";
}
?>
</select>
<br>
</div>

<div class="col-lg-3">
Product Description
</div>
<div class="col-lg-9">
<input type="text"  class="form-control" name="item_value" value="<?php echo $str2[item_value]  ?>"><br>
</div>

<input type="hidden"  name="item_id"  value="<?php echo $str2[item_id]; ?>">
<input type="submit" class="btn btn-default center-block">
</form>
</div>
</div>