<?php
ob_start();
include_once("connect.php");
$item_id=$_REQUEST['item_id'];
mysql_query("delete from product_item where item_id='$item_id'");
header("location:admin_index.php?a=delete_dpi");

?>