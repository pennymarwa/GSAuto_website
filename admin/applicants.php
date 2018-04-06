<?php
include_once("connect.php");
$str=mysql_query("select * from apply");
?>
<br><br>
<div class="conatiner">
<table class="table table-bordered">
<tr>
<th colspan="11">Applicants who applied for the positions</th>
<tr>
<th>Sr. no.</th>
<th>Position applied for</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Phone no.</th>
<th>Qualification</th>
<th>Previous worked company</th>
<th>Total experience</th>
<th>Functional area</th>
<th>Resume or CV</th>

</tr>
<?php
while($row=mysql_fetch_array($str))
{
	$path='../resume/'.$row[j_resume];
echo "
<tr>
<td>$row[a_id]</td>
<td>$row[j_id]</td>
<td>$row[j_name]</td>
<td>$row[j_email]</td>
<td>$row[j_add]</td>
<td>$row[j_no]</td>
<td>$row[j_quali]</td>
<td>$row[j_pwc]</td>
<td>$row[j_exp]</td>
<td>$row[j_area]</td>
<td><a href='functions1.php?path=$path'>$row[j_resume]</a></td>
</tr>
";	
}

?>

</table>
</div>