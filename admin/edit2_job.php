<?php
ob_start();
include_once("connect.php");
$j_id=$_REQUEST['j_id'];
$position=$_REQUEST['position'];
$location=$_REQUEST['location'];
$date=$_REQUEST['date'];
$vacancy=$_REQUEST['vacancy'];
$desc=$_REQUEST['desc'];
$lst_date=$_REQUEST['lst_date'];
$resp=$_REQUEST['resp'];
$require=$_REQUEST['require'];
$str="UPDATE  job SET  position =  '$position',
location =  '$location',
date =  '$date',
vacancy =  '$vacancy',
desc_value =  '$desc',
lst_date =  '$lst_date',
resp =  '$resp',
requirements =  '$require' WHERE j_id ='$j_id'";
mysql_query($str);
header("location:admin_index.php?a=edit_job");
?>
