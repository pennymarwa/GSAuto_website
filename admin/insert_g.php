<?php
ob_start();
include_once("connect.php");
$g_desc=$_REQUEST['g_desc'];
$g_img=$_FILES['g_img'][name];
$str="insert into gallery(g_desc,g_img) values('$g_desc','$g_img')";
mysql_query($str);
$path="gallery/".$g_img;
move_uploaded_file($_FILES['g_img']['tmp_name'],$path);
header("location:admin_index.php?a=gallery");
?>