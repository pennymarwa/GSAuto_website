<?php
$user=$_SESSION['user'];
$str=mysql_fetch_array(mysql_query("select * from user where email='$user'"));

?>
<br><br><br><br><br><br>
<div class="container">
<div class="row">
<div class="col-lg-5">
<h3 align="center">Sign up</h3>
</div>
</div>
<br>
<div class="row">
<form class="form-group" action="edit2_su.php" method="post" enctype="multipart/form-data">
 <div class="col-lg-12">
<div class="col-lg-3">
First Name
</div>
<div class="col-lg-5">
<input type="text"  class="form-control" name="fname" value="<?php echo $str[fname]; ?>">
<br>
</div>
</div>

 <div class="col-lg-12">
<div class="col-lg-3">
Last Name
</div>
<div class="col-lg-5">
<input type="text"  class="form-control" name="lname" value="<?php echo $str[lname]; ?>">
<br>
</div>
</div>

 <div class="col-lg-12">
<div class="col-lg-3">
Address
</div>
<div class="col-lg-5">
<input type="text"  class="form-control" name="address" value="<?php echo $str[address]; ?>">
<br>
</div>
</div>

 <div class="col-lg-12">
<div class="col-lg-3">
Email
</div>
<div class="col-lg-5">
<input type="email"  class="form-control" name="email" value="<?php echo $str[email]; ?>">
<br>
</div>
</div>

 <div class="col-lg-12">
<div class="col-lg-3">
Contact number
</div>
<div class="col-lg-5">
<input type="number"  class="form-control" name="phone" value="<?php echo $str[phone]; ?>">
<br>
</div>
</div>

 <div class="col-lg-12">
<div class="col-lg-3">
Password
</div>
<div class="col-lg-5">
<input type="password"  class="form-control" name="password" value="<?php echo $str[password]; ?>">
<br>
</div>
</div>

<input type="submit" class="btn btn-default center-block">
</form>
</div>
</div>
<br><br><br><br>