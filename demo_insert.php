<?php
ob_start();
session_start();

include_once("connect.php");
//$sql_check = mysql_query('SELECT * FROM messages order by msg_id desc');


if(isSet($_POST['content']))

{
$content=$_POST['content'];
$user=$_SESSION['user'];

mysql_query("insert into messages(user_id,msg) values ('$user','$content')");
$to = "goldi_penny@yahoo.com";
$subject = "Message";
$txt = $content;
$headers = "From:".$user;
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
mail($to,$subject,$txt,$headers);

}
header("location:index.php?a=contact");
?>