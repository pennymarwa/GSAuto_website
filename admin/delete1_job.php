<?php
ob_start();
include_once("connect.php");
$j_id=$_REQUEST['j_id'];
mysql_query("delete from job where j_id='$j_id'");
header("location:admin_index.php?a=delete_job");

?>