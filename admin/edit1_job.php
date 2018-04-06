<?php
include_once("connect.php");
$j_id=$_REQUEST['j_id'];
$str=mysql_query("select * from job where j_id='$j_id'");
$str1=mysql_fetch_array($str);
?>
<head>
		
<script type="text/javascript" src="js/validation.js"></script>
</head>

<div class="container">
<div class="row">
<br>
<br>
<form class="form-group" action="edit2_job.php" method="post" name="myForm"  onsubmit="return(validate());">

<div class="col-lg-3">
Position
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="position" value="<?php echo $str1[position] ?>"><br>
</div>

<div class="col-lg-3">
Work Location
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="location" value="<?php echo $str1[location] ?>"><br>
</div>

<div class="col-lg-3">
Posted date
</div>
<div class="col-lg-9">
<input type="date"  class="form-control" name="date"  value="<?php echo $str1[date] ?>"><br>
</div>

<div class="col-lg-3">
Vacancy
</div>
<div class="col-lg-9">
<input type="number" class="form-control" name="vacancy" value="<?php echo $str1[vacancy] ?>"><br>
</div>

<div class="col-lg-3">
Description of job
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="desc" value="<?php echo $str1[desc_value] ?>"><br>
</div>

<div class="col-lg-3">
Last date 
</div>
<div class="col-lg-9">
<input type="date" class="form-control" name="lst_date"  value="<?php echo $str1[lst_date] ?>"><br>
</div>

<div class="col-lg-3">
Responsibility
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="resp" value="<?php echo $str1[resp] ?>"><br>
</div>

<div class="col-lg-3">
Requirement
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="require" value="<?php echo $str1[requirements] ?>"><br>
</div>


<input type="hidden" name="j_id" value="<?php echo $j_id;?>">
<input type="submit" class="btn btn-default center-block">
</form>
</div>
</div>