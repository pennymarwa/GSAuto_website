<?php
ob_start();
session_start();
include_once("connect.php");
$c_name=$_REQUEST['c_name'];
$c_email=$_REQUEST['c_email'];
$c_mobile=$_REQUEST['c_mobile'];
$c_subject=$_REQUEST['c_subject'];
$str="insert into contact(c_name,c_email,c_mobile,c_subject) values('$c_name','$c_email','$c_mobile','$c_subject')";
mysql_query($str);

$to = "goldi_penny@yahoo.com";
$subject = "Contact Message";
$txt = $c_name." wants to contact with you. This is his/her email and phone no. :".$c_email."&nbsp;".$c_mobile;
$headers = "From:".$c_email;
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
mail($to,$subject,$txt,$headers);

header("location:index.php?a=contact");
?>