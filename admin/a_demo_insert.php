<?php
ob_start();
session_start();

include_once("connect.php");
//$sql_check = mysql_query('SELECT * FROM messages order by msg_id desc');


if(isSet($_POST['content']))

{
$content=$_POST['content'];
$user=$_SESSION['login'];

mysql_query("insert into messages(user_id,msg) values ('$user','$content')");


}
header("location:admin_index.php?a=discuss");
?>