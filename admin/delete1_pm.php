<?php
ob_start();
include_once("connect.php");
$p_id=$_REQUEST['p_id'];
mysql_query("delete from product_master where p_id='$p_id'");
header("location:admin_index.php?a=delete");

?>