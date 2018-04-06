<?php
ob_start();
include_once("connect.php");
$p_name=$_REQUEST['p_name'];
$p_title=$_REQUEST['p_title'];
$p_id=$_REQUEST['p_id'];
$sno=$_REQUEST['sno'];
$img1=$_FILES['img1'][name];
$img2=$_FILES['img2'][name];
$img3=$_FILES['img3'][name];
$img4=$_FILES['img4'][name];
$img5=$_FILES['img5'][name];

mysql_query("update product_master set p_name='$p_name', p_title='$p_title', img1='$img1', img2='$img2', img3='$img3', img4='$img4', img5='$img5'  where p_id='$p_id'");
mysql_query($str);
$path1="prod_images/".$img1;
$path2="prod_images/".$img2;
$path3="prod_images/".$img3;
$path4="prod_images/".$img4;
$path5="prod_images/".$img5;
move_uploaded_file($_FILES['img1']['tmp_name'],$path1);
move_uploaded_file($_FILES['img2']['tmp_name'],$path2);
move_uploaded_file($_FILES['img3']['tmp_name'],$path3);
move_uploaded_file($_FILES['img4']['tmp_name'],$path4);
move_uploaded_file($_FILES['img5']['tmp_name'],$path5);
header("location:admin_index.php?a=edit");
?>