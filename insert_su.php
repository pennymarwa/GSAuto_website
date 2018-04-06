<?php
ob_start();
session_start();
include_once("connect.php");
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$password=$_REQUEST['password'];
$img=$_FILES['img'][name];
$str="insert into user(fname,lname,address,email,phone,password,img) values('$fname','$lname','$address','$email','$phone','$password','$img')";
mysql_query($str);
$path="dp/".$img;
move_uploaded_file($_FILES['img']['tmp_name'],$path);
$_SESSION['user']=$email;
header("location:index.php?a=sign_in");
?>