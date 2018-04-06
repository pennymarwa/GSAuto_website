<?php
ob_start();
session_start();
if(!$_SESSION['login'])
header("location:admin_login.php?msg=please login first");
?>