<?php
ob_start();
session_start();
include_once("connect.php");
$user_name=$_REQUEST['user_name'];
$pass=$_REQUEST['pass'];
$img=$_FILES['img'][name];
$str="insert into admin(user_name,pass,img) values('$user_name','$pass','$img')";
mysql_query($str);
$path="admin-dp/".$img;
move_uploaded_file($_FILES['img']['tmp_name'],$path);
$_SESSION['user']=$email;
header("location:admin_login.php");
?>