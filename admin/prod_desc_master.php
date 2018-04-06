<?php
include_once("connect.php");
$str=mysql_query("select * from product_master");
?>

<div class="container">
<div class="row">
<br>
<br>
<form class="form-group" action="insert_pdm.php" method="post">




<div class="col-lg-3">
Product Category
</div>
<div class="col-lg-9">
<input type="text"  class="form-control" name="desc_item">
<br>
</div>


<input type="submit" class="btn btn-default center-block">
</form>
</div>
</div>