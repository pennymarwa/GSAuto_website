<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="cssmenu/styles.css">
   <script src="cssmenu/jqu880B.js" type="text/javascript"></script>
   <script src="cssmenu/script.js"></script>
   
</head>
<body>

<div id='cssmenu'>
<ul>
   <li><a href='admin_index.php'>Home</a></li>
   <li class='active'><?php echo"<a href='admin_index.php?a=product'>Products</a>"; ?>
      <ul>
         <li><?php echo"<a href='admin_index.php?a=product'>Add Products</a>"; ?></li>
         <li><?php echo"<a href='admin_index.php?a=display'>Display Products</a>"; ?></li>
         <li><a href='#'>Update Product</a>
            <ul>
               <li><?php echo"<a href='admin_index.php?a=edit'>Edit Products</a>"; ?></li>
               <li><?php echo"<a href='admin_index.php?a=delete'>Delete Products</a>"; ?></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><?php echo"<a href='#'>Description</a>"; ?>
   <ul>
         <li><?php echo"<a href='admin_index.php?a=product_item'>Add Products</a>"; ?></li>
         <li><?php echo"<a href='admin_index.php?a=dpi'>Display Products</a>"; ?></li>
         <li><a href='#'>Update Product</a>
            <ul>
               <li><?php echo"<a href='admin_index.php?a=edit_dpi'>Edit Products</a>"; ?></li>
               <li><?php echo"<a href='admin_index.php?a=delete_dpi'>Delete Products</a>"; ?></li>
            </ul>
         </li>
      </ul>

   </li>
   <li><a href='#'>Downloads</a>
   <ul>
         <li><?php echo"<a href='admin_index.php?a=download'>Add Downloads</a>"; ?></li>
         <li><?php echo"<a href='admin_index.php?a=display_down'>Display Downloads</a>"; ?></li>
         <li><?php echo"<a href='admin_index.php?a=delete_down'>Delete Products</a>"; ?></li>
      </ul>

   </li>
   <li><a href='#'>Gallery</a>
   <ul>
         <li><?php echo"<a href='admin_index.php?a=gallery'>Add Photo</a>"; ?></li>
         <li><?php echo"<a href='admin_index.php?a=display_g'>Display Photo</a>"; ?></li>
         <li><?php echo"<a href='admin_index.php?a=delete_g'>Delete Photo</a>"; ?></li>
      </ul>

   </li>
   
   <li><a href="#">Discussion</a>
      <ul>
         <li><?php echo"<a href='admin_index.php?a=discuss'>Discussion</a>"; ?></li>
         <li><?php echo"<a href='admin_index.php?a=contact_sub'>Messages</a>"; ?></li>
      </ul>
   </li>
   <li><?php echo"<a href='admin_index.php?a=job'>Job Openings</a>"; ?>
   <ul>
         <li><?php echo"<a href='admin_index.php?a=job'>Add</a>"; ?></li>
         <li><?php echo"<a href='admin_index.php?a=display_job'>Display</a>"; ?></li>
         <li><a href='#'>Update</a>
            <ul>
               <li><?php echo"<a href='admin_index.php?a=edit_job'>Edit</a>"; ?></li>
               <li><?php echo"<a href='admin_index.php?a=delete_job'>Delete</a>"; ?></li>
            </ul>
         </li>
      </ul>
   </li>
   
   <li><?php echo"<a href='admin_index.php?a=applicants'>Applicants</a>"; ?></li>
   <li><?php echo"<a href='logout_a.php'>Logout</a>"; ?></li>
</ul>
</div>

</body>
<html>
