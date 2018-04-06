<?php
ob_start();
include_once("connect.php");
$item_value=$_REQUEST['item_value'];
$p_id=$_REQUEST['p_id'];
$item_id=$_REQUEST['item_id'];
$desc_id=$_REQUEST['desc_id'];
mysql_query("update product_item set item_value='$item_value',p_id='$p_id',desc_id='$desc_id'  where item_id='$item_id'");
header("location:admin_index.php?a=edit_dpi");
?>