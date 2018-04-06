<head>
		
<script type="text/javascript" src="js/validation.js"></script>
</head>
<div class="container">
<div class="row">
<br>
<br>
<form class="form-group" name="myForm"  action="insert_g.php" method="post" enctype="multipart/form-data"  onsubmit="return(validate());">


<div class="col-lg-3">
Image
</div>
<div class="col-lg-9">
<input type="file"  class="form-control" name="g_img"><br>
</div>

<div class="col-lg-3">
Picture Title
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="g_desc" placeholder="Enter picture title"><br>
</div>

<input type="submit" class="btn btn-default center-block">
</form>
</div>
</div>