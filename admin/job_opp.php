<head>
		
<script type="text/javascript" src="js/validation.js"></script>
</head>
<div class="container">
<div class="row">
<br>
<br>
<form class="form-group" name="myForm"  action="insert_job.php" method="post"  onsubmit="return(validate());">

<div class="col-lg-3">
Position
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="position" placeholder="Enter position"><br>
</div>

<div class="col-lg-3">
Work Location
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="location" placeholder="Enter work location"><br>
</div>

<div class="col-lg-3">
Posted date
</div>
<div class="col-lg-9">
<input type="text"  class="form-control" name="date" value="<?php echo date("Y-m-d"); ?>" readonly="readonly"><br>
</div>

<div class="col-lg-3">
Vacancy
</div>
<div class="col-lg-9">
<input type="number" class="form-control" name="vacancy" placeholder="Enter vacancy"><br>
</div>

<div class="col-lg-3">
Description of job
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="desc" placeholder="Enter description"><br>
</div>

<div class="col-lg-3">
Last date 
</div>
<div class="col-lg-9">
<input type="date" class="form-control" name="lst_date"><br>
</div>

<div class="col-lg-3">
Responsibility
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="resp" placeholder="Enter responsibilities"><br>
</div>

<div class="col-lg-3">
Requirement
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="require" placeholder="Enter requirement"><br>
</div>


<input type="submit" class="btn btn-default center-block">
</form>
</div>
</div>