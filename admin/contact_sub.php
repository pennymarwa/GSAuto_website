<?php
include_once("connect.php");
$str=mysql_query("select * from contact");
?>
<br><br>
<div class="conatiner">
<table class="table table-bordered">
<tr>
<th colspan="11">Personal messages from visitors</th>
<tr>
<th>Sr. no.</th>
<th>Name</th>
<th>Email</th>
<th>Phone no.</th>
<th>Message</th>

</tr>
<?php
while($row=mysql_fetch_array($str))
{
echo "
<tr>
<td>$row[c_id]</td>
<td>$row[c_name]</td>
<td>$row[c_email]</td>
<td>$row[c_mobile]</td>
<td>$row[c_subject]</td>
</tr>
";	
}

?>

</table>
</div>