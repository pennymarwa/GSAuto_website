<?php
include_once("session_a.php");
?>
<html>
<head>
<link rel="stylesheet" href="css/admin_index.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="../js/jquery.min.js"></script>
</head>
<body>

<div class="container">
          <div class="row" style="background-color:#0F1768;">
              
              <div class="col-lg-12">
              <?php
			  include_once("menu.php");
			  ?>
              </div>
          </div>
    <div class="row">
    
    <?php
        
        if($_REQUEST['a']=="product")
        include_once("product_master.php");
        else if($_REQUEST['a']=="display")
        include_once("display_pm.php");
        else if($_REQUEST['a']=="delete")
        include_once("delete_pm.php");
        else if($_REQUEST['a']=="edit")
        include_once("edit_pm.php");
        else if($_REQUEST['a']=="edit1")
        include_once("edit1_pm.php");
        else if($_REQUEST['a']=="product_item")
        include_once("product_item.php");
		else if($_REQUEST['a']=="dpi")
        include_once("display_dpi.php");
        else if($_REQUEST['a']=="delete_dpi")
        include_once("delete_dpi.php");
        else if($_REQUEST['a']=="edit_dpi")
        include_once("edit_dpi.php");
        else if($_REQUEST['a']=="edit1_pdi")
        include_once("edit1_pdi.php");
        else if($_REQUEST['a']=="download")
        include_once("downloads.php");
        else if($_REQUEST['a']=="display_down")
        include_once("display_down.php");
        else if($_REQUEST['a']=="delete_down")
        include_once("delete_down.php");
        else if($_REQUEST['a']=="discuss")
        include_once("discussion.php");
        else if($_REQUEST['a']=="gallery")
        include_once("gallery.php");
        else if($_REQUEST['a']=="display_g")
        include_once("display_g.php");
        else if($_REQUEST['a']=="delete_g")
        include_once("delete_g.php");
        else if($_REQUEST['a']=="job")
        include_once("job_opp.php");
        else if($_REQUEST['a']=="display_job")
        include_once("display_job.php");
		else if($_REQUEST['a']=="edit_job")
        include_once("edit_job.php");
        else if($_REQUEST['a']=="edit1_job")
        include_once("edit1_job.php");
        else if($_REQUEST['a']=="delete_job")
        include_once("delete_job.php");
        else if($_REQUEST['a']=="delete1_job")
        include_once("delete1_job.php");
        else if($_REQUEST['a']=="applicants")
        include_once("applicants.php");
        else if($_REQUEST['a']=="contact_sub")
        include_once("contact_sub.php");
        else if($_REQUEST['a']=="accounts")
        include_once("accounts.php");
        else
        {
        ?>
        <div class="row">
        <br><br><br><br>
            <div class="col-lg-4" align="right">
            <img src="images/about.jpg">
            </div>
            <div class="col-lg-8">
            <img src="images/gsauto-logo.png" width="500" height="100" class="img-responsive">
            <br>
            <h3 align="center">The auto industry must acknowledge that a rational transportation policy should seek a balance between individual convenience, the efficient use of limited resources, and urban-living values that protect spaciousness, natural beauty, and human-scale mobility.</h3>
            </div>
        
        <?php
            }
            ?>
        
        
        </div>
    
    </div>


</div>


</body>
</html>