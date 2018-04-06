<?php
ob_start();
session_start();
if(!$_SESSION['login'])
{
	header("location:index.php?a=sign_in&msg=please login first");
}
?>