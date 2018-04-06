<?php
ob_start();
session_start();
include_once("connect.php");
$user_name=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];
$str=mysql_query("select * from admin where user_name='$user_name' and pass='$pass'");

if(mysql_num_rows($str))
{
	$_SESSION['login']=$user_name;
	header("location:admin_index.php");
}
else
{
	header("location:admin_login.php?a=sign_in&msg=wrong username or password");
}
?>