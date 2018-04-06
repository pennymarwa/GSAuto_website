<?php
ob_start();
include_once("connect.php");
$d_id=$_REQUEST['d_id'];
mysql_query("delete from downloads where d_id='$d_id'");
header("location:admin_index.php?a=delete_down");

?>