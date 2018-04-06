<head>
		
<script type="text/javascript" src="js/signup_validation.js"></script>
</head>
<br><br>
<div class="container">
<div class="row">
<div class="col-lg-5">
<h3 align="center">Sign up</h3>
</div>
</div>
<br>
<div class="row">
<form class="form-group" name="myForm" action="insert_su.php" method="post" enctype="multipart/form-data"  onsubmit="return(validate());">
 <div class="col-lg-12">
<div class="col-lg-3">
First Name
</div>
<div class="col-lg-5">
<input type="text"  class="form-control" name="fname">
<br>
</div>
</div>

 <div class="col-lg-12">
<div class="col-lg-3">
Last Name
</div>
<div class="col-lg-5">
<input type="text"  class="form-control" name="lname">
<br>
</div>
</div>

 <div class="col-lg-12">
<div class="col-lg-3">
Upload image
</div>
<div class="col-lg-5">
<input type="file"  class="form-control" name="img">
<br>
</div>
</div>

 <div class="col-lg-12">
<div class="col-lg-3">
Address
</div>
<div class="col-lg-5">
<input type="text"  class="form-control" name="address">
<br>
</div>
</div>

 <div class="col-lg-12">
<div class="col-lg-3">
Email
</div>
<div class="col-lg-5">
<input type="email"  class="form-control" name="email">
<br>
</div>
</div>

 <div class="col-lg-12">
<div class="col-lg-3">
Contact number
</div>
<div class="col-lg-5">
<input type="number"  class="form-control" name="phone">
<br>
</div>
</div>

 <div class="col-lg-12">
<div class="col-lg-3">
Password
</div>
<div class="col-lg-5">
<input type="password"  class="form-control" name="password">
<br>
</div>
</div>

<input type="submit" class="btn btn-default center-block">
</form>
</div>
</div>
<br><br><br><br>