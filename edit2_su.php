<?php
ob_start();
session_start();
include_once("connect.php");
$user=$_SESSION['user'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$password=$_REQUEST['password'];

mysql_query("update user set fname='$fname', lname='$lname', address='$address', email='$email', phone='$phone', password='$password'  where email='$user'");
header("location:index.php?a=edit_su");
?>