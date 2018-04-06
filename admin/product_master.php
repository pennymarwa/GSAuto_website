<head>
		
<script type="text/javascript" src="js/prod_validation.js"></script>
</head>
<div class="container">
<div class="row">
<br>
<br>
<form class="form-group" name="myForm"  action="insert_pm.php" method="post" enctype="multipart/form-data"  onsubmit="return(validate());">

<div class="col-lg-3">
Product Name
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="p_name" placeholder="Enter product name"><br>
</div>

<div class="col-lg-3">
Product Title
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="p_title" placeholder="Enter product title"><br>
</div>

<div class="col-lg-3">
Image no. 1
</div>
<div class="col-lg-9">
<input type="file"  class="form-control" name="img1"><br>
</div>

<div class="col-lg-3">
Image no. 2
</div>
<div class="col-lg-9">
<input type="file" class="form-control" name="img2"><br>
</div>

<div class="col-lg-3">
Image no. 3
</div>
<div class="col-lg-9">
<input type="file" class="form-control" name="img3"><br>
</div>

<div class="col-lg-3">
Image no. 4
</div>
<div class="col-lg-9">
<input type="file" class="form-control" name="img4"><br>
</div>

<div class="col-lg-3">
Image no. 5
</div>
<div class="col-lg-9">
<input type="file" class="form-control" name="img5"><br>
</div>


<input type="submit" class="btn btn-default center-block">
</form>
</div>
</div>