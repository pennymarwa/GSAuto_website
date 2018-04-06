<div id='cssmenu'>
<ul>
<li><a href="index.php">Home</a></li>
<li> <?php echo"<a href='index.php?a=about'>About</a>"; ?> </li>
<li><a href="#">Products</a>
<ul>
 
<?php 
$str=mysql_query("select * from product_master");
while($row=mysql_fetch_array($str))
{
echo"<li><a href='index.php?a=product&p_id=$row[p_id]'>$row[p_name]</a></li>";
	
}  
?>
</ul>
</li>
<li><?php echo "<a href='index.php?a=downloads'>Downloads</a>"; ?></li>
<li><?php echo "<a href='index.php?a=gallery'>Gallery</a>"; ?></li>
<li><?php echo "<a href='index.php?a=wwu'>Openings</a>"; ?></li>
<li><?php echo "<a href='index.php?a=contact'>Contact us</a>"; ?></li>
<li><?php 
if(!$_SESSION['user'])
	{
	 echo" <a href='index.php?a=sign_in'>Sign In</a>";
	}
	else
	{
		echo" <a href='index.php?a=logout'>logout</a>";
	}
 ?></li>
<li><?php 
if(!$_SESSION['user'])
{
echo" <a href='index.php?a=sign_in'>";
}
else
{
	echo" <a href='index.php?a=edit_su'>";
}

echo "Account</a>"; ?></li>
</ul>
</div>

