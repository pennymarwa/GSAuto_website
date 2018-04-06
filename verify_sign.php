<?php
ob_start();
session_start();
include_once("connect.php");
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

$str=mysql_query("select * from user where email='$email' and password='$password'");

if(mysql_num_rows($str))
{
	$_SESSION['user']=$email;
	header("location:index.php?a=contact");
}
else
{
	header("location:index.php?a=sign_in&msg=wrong username or password");
}

?>