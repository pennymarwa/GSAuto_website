<?php
include_once("connect.php");
$user=$_SESSION['user'];
$str=mysql_fetch_array(mysql_query("select * from user where email='$user'"));
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<br><br><br><br>
<div class="container">
<div class="row">
<div class="col-lg-12">
<h1 align="right"><b>FEEDBACK FORM</b></h1>
</div>
</div>
<form action="#" method="post">
<div class="row">
<div class="col-lg-12">

<table class="table table-hover" style="background-color:#FFF;">
<div class="form-group">

<tr>
<th>
Name
</th>
<th colspan="3">
<input type="text" class="form-control" disabled value="<?php echo $str[fname]."&nbsp;".$str[lname] ?>" />
</th>
<th>
Contact no.
</th>
<th colspan="2">
<input type="number" class="form-control" disabled value="<?php echo $str[phone] ?>" />
</th>
</tr>

<tr>
<th>
Company
</th>
<th colspan="3">
<input type="text" class="form-control" />
</th>
<th>
Email
</th>
<th colspan="2">
<input type="email" class="form-control" disabled value="<?php echo $str[email] ?>"  />
</th>
</tr>


</div>
</table>

<ol type="I">

<table class="table">

<tr>
<td>SERVICES</td>
<td>Excellent</td> 
<td>Good</td> 
<td>Satisfactory</td>  
<td>Poor</td> 
</td>
</tr>

<tr>
<td>Attentiveness of Staff </td>
<td><input type="radio" name="r1"></td> 
<td><input type="radio" name="r1"></td> 
<td><input type="radio" name="r1"></td>  
<td><input type="radio" name="r1"></td> 
</td>
</tr>

<tr>
<td>Staff Courtesy and Conduct </td>
<td><input type="radio" name="r2"></td> 
<td><input type="radio" name="r2"></td> 
<td><input type="radio" name="r2"></td>  
<td><input type="radio" name="r2"></td> 
</td>
</tr>

<tr>
<td>Staff Efficiency</td>
<td><input type="radio" name="r3"></td> 
<td><input type="radio" name="r3"></td> 
<td><input type="radio" name="r3"></td>  
<td><input type="radio" name="r3"></td> 
</td>
</tr>

<tr>
<td>Quality of Service </td>
<td><input type="radio" name="r4"></td> 
<td><input type="radio" name="r4"></td> 
<td><input type="radio" name="r4"></td>  
<td><input type="radio" name="r4"></td> 
</td>
</tr>


<tr>
<td>PRODUCTS</td>
<td colspan="4"></td> 
</td>
</tr>

<tr>
<td>Quality of Products </td>
<td><input type="radio" name="r5"></td> 
<td><input type="radio" name="r5"></td> 
<td><input type="radio" name="r5"></td>  
<td><input type="radio" name="r5"></td> 
</td>
</tr>

<tr>
<td>Value for Money </td>
<td><input type="radio" name="r6"></td> 
<td><input type="radio" name="r6"></td> 
<td><input type="radio" name="r6"></td>  
<td><input type="radio" name="r6"></td> 
</td>
</tr>

<tr>
<td>Effectiveness</td>
<td><input type="radio" name="r7"></td> 
<td><input type="radio" name="r7"></td> 
<td><input type="radio" name="r7"></td>  
<td><input type="radio" name="r7"></td> 
</td>
</tr>

<tr>
<td>Easy Usage </td>
<td><input type="radio" name="r8"></td> 
<td><input type="radio" name="r8"></td> 
<td><input type="radio" name="r8"></td>  
<td><input type="radio" name="r8"></td> 
</td>
</tr>


</table>

<br>

<div class="col-lg-12">
<br>
<li><b>What aspect of the product / service were you most satisfied by?</b></li>
<br>
<input type="radio" name="r9">Quality  <br>
<input type="radio" name="r9">Price<br>
<input type="radio" name="r9">Purchase Experience<br>
<input type="radio" name="r9">Installation or First Use Experience<br>
<input type="radio" name="r9">Usage Experience<br>
<input type="radio" name="r9">Customer Service<br>
<input type="radio" name="r9">Repeat Purchase Experience<br>
</div>
<br>
<div class="col-lg-12">
<br>
<li><b>What aspect of the product / service were you most disappointed by?</b></li>
<br>
<input type="radio" name="r10">Quality  <br>
<input type="radio" name="r10">Price<br>
<input type="radio" name="r10">Purchase Experience<br>
<input type="radio" name="r10">Installation or First Use Experience<br>
<input type="radio" name="r10">Usage Experience<br>
<input type="radio" name="r10">Customer Service<br>
<input type="radio" name="r10">Repeat Purchase Experience<br>
</div>

<br>
<div class="col-lg-12">
<br>
<li><b>How did you first know about us?</b></li>
<br>
<input type="radio" name="r11">Newspaper<br>
<input type="radio" name="r11">Magazine<br>
<input type="radio" name="r11">E-mailer<br>
<input type="radio" name="r11">Direct Mailer<br>
<input type="radio" name="r11">Website<br>
<input type="radio" name="r11">Signboard<br>
<input type="radio" name="r11">Family<br>
<input type="radio" name="r11">Friend<br>
</div>

</ol>
</div>
</div>

<input type="submit" class="btn btn-primary center-block">

</form>
</div>

<br><br><br>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.0.js"></script>
</body>
</html>