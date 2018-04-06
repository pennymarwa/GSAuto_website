

<?php
include_once("connect.php");
$str=mysql_query("select * from user");
?>
<br><br>
<div class="conatiner">
<table class="table table-bordered">
<tr>
<th colspan="11">Accounts created</th>
<tr>
<th>Sr. no.</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Phone no.</th>
<th>password</th>
<th>image</th>

</tr>
<?php
while($row=mysql_fetch_array($str))
{
	$path='../dp/'.$row[img];
echo "
<tr>
<td>$row[u_id]</td>
<td>$row[fname].$row[lname]</td>
<td>$row[address]</td>
<td>$row[email]</td>
<td>$row[phone]</td>
<td>$row[password]</td>
<td><img src='$path' width='100' height='100'></td>
</tr>
";	
}

?>

</table>
</div>