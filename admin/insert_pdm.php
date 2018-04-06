<?php
ob_start();
include_once("connect.php");
$desc_item=$_REQUEST['desc_item'];
$str="insert into prod_desc_master(desc_item) values('$desc_item')";
mysql_query($str);
header("location:prod_desc_master.php");
?>