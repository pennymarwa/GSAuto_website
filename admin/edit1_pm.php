<?php
include_once("connect.php");
$p_id=$_REQUEST['p_id'];
$str=mysql_query("select * from product_master where p_id='$p_id'");
$str1=mysql_fetch_array($str);
?>
<head>
		
<script type="text/javascript" src="js/prod_validation.js"></script>
</head>

<div class="container">
<div class="row">
<br>
<br>
<h1>hgdfb</h1>
<form class="form-group" action="edit2_pm.php" method="post" enctype="multipart/form-data" name="myForm"  onsubmit="return(validate());">

<div class="col-lg-3">
Product Name
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="p_name" value="<?php echo $str1[p_name];?>" ><br>
</div>

<div class="col-lg-3">
Product Title
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="p_title" value="<?php echo $str1[p_title];?>"><br>
</div>

<div class="col-lg-3">
Image no. 1
</div>
<div class="col-lg-9">
<input type="file"  class="form-control" name="img1" value="<?php echo $str1[img1];?>"><br>
</div>

<div class="col-lg-3">
Image no. 2
</div>
<div class="col-lg-9">
<input type="file" class="form-control" name="img2" value="<?php echo $str1[img2];?>"><br>
</div>

<div class="col-lg-3">
Image no. 3
</div>
<div class="col-lg-9">
<input type="file" class="form-control" name="img3" value="<?php echo $str1[img3];?>"><br>
</div>

<div class="col-lg-3">
Image no. 4
</div>
<div class="col-lg-9">
<input type="file" class="form-control" name="img4" value="<?php echo $str1[img4];?>"><br>
</div>

<div class="col-lg-3">
Image no. 5
</div>
<div class="col-lg-9">
<input type="file" class="form-control" name="img5" value="<?php echo $str1[img5];?>"><br>
</div>

<input type="hidden" name="p_id" value="<?php echo $p_id;?>">
<input type="submit" class="btn btn-default center-block">
</form>
</div>
</div>