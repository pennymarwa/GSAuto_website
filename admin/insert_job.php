<?php
ob_start();
include_once("connect.php");
$position=$_REQUEST['position'];
$location=$_REQUEST['location'];
$date=$_REQUEST['date'];
$vacancy=$_REQUEST['vacancy'];
$desc=$_REQUEST['desc'];
$lst_date=$_REQUEST['lst_date'];
$resp=$_REQUEST['resp'];
$require=$_REQUEST['require'];
$str="INSERT INTO job (position, location, date, vacancy, desc_value, lst_date, resp, requirements) VALUES('$position','$location','$date','$vacancy','$desc','$lst_date','$resp','$require')";
mysql_query($str);
header("location:admin_index.php?a=job");
?>
