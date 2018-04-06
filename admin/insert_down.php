<?php
include_once("connect.php");
ob_start();
$d_name=$_FILES['d_name'][name];
$str="insert into downloads(d_name) values('$d_name')";
mysql_query($str);
$path="download/".$d_name;
move_uploaded_file($_FILES['d_name']['tmp_name'],$path);
header("location:admin_index.php?a=download");
?>