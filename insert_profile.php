<?php
ob_start();
include_once("connect.php");
$position=$_REQUEST['position'];
$j_name=$_REQUEST['j_name'];
$j_email=$_REQUEST['j_email'];
$j_add=$_REQUEST['j_add'];
$j_no=$_REQUEST['j_no'];
$j_quali=$_REQUEST['j_quali'];
$j_pwc=$_REQUEST['j_pwc'];
$j_exp=$_REQUEST['j_exp'];
$j_area=$_REQUEST['j_area'];
$j_resume=$_FILES['j_resume']['name'];
$str="INSERT INTO apply (j_id, j_name, j_email, j_add, j_no, j_quali, j_pwc, j_exp, j_area, j_resume) VALUES('$position','$j_name','$j_email','$j_add','$j_no','$j_quali','$j_pwc','$j_exp','$j_area','$j_resume')";
mysql_query($str);
$path="resume/".$j_resume;
move_uploaded_file($_FILES['j_resume']['tmp_name'],$path);

$to = "goldi_penny@yahoo.com";
$subject = "Resume for".$position."position";
$txt = $j_name." has send you his/her resume. This is his/her email and phone no. :".$j_email."&nbsp;".$j_no;
$headers = "From:".$j_email ;
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
mail($to,$subject,$txt,$headers);


header("location:index.php?a=wwu");
?>
