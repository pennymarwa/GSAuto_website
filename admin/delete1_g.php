<?php
ob_start();
include_once("connect.php");
$g_id=$_REQUEST['g_id'];
mysql_query("delete from gallery where g_id='$g_id'");
header("location:admin_index.php?a=delete_g");

?>