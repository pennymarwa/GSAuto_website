<?php
ob_start();
include_once("connect.php");
$item_value=$_REQUEST['item_value'];
$p_id=$_REQUEST['p_id'];
$desc_id=$_REQUEST['desc_id'];
$str="insert into product_item(item_value,p_id,desc_id) values('$item_value','$p_id','$desc_id')";
mysql_query($str);
header("location:admin_index.php?a=product_item");
?>