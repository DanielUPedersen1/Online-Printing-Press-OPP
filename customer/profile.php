<!DOCTYPE html>
<html lang="en">

<head>
	<?php require('1_metatags.php'); ?>
</head>
<body>
	<header id="header" class="">
          <?php require('2_header.php'); ?> 
   </header>
		<!-- /header -->
		
		<nav class="navbar">
           <?php require('3_navbar.php'); ?> 
        </nav> 
		<!---->
		
    <?php 
    error_reporting(0);
    session_start(); ?>

<?php 
require("db_connection.php"); 
    
$username=$_SESSION['customer'];

//echo $username;

$sql="select * from customer_details where customer_details_username='$username'";

$result = mysqli_query($conn,$sql);

//$count=1;

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
       $sql1="select * from customer_order co,customer_details cd where co.customer_details_id=cd.customer_details_id and
         cd.customer_details_username='$username'";
    $result1 = mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
?>
	
	<div id="content" class="site-content">
		<div class="container">
					<div class="row sv-nopadding">
					<!-- include change password design-->
					
				<div class="col-md-12 col-sm-7 col-xs-12 main-content sv-contact-page">
					<div class="col-md-12 sv-nopadding">
					
					
					<div class="col-md-6">
					    <h1>Profile</h1>
					    <form class="sv-contact-form" action="customer_details_update.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
							<fieldset>
							<input type="hidden" placeholder="Customer_details_id" value="<?php echo $row['customer_details_id'] ; ?>" name="customer_details_id" id="customer_details_id" required="required"  />
								<div class="form-group item">
                                    <label class="col-md-12">NAME</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" name="customer_details_name" id="customer_details_name" required="required" value="<?php echo $row['customer_details_name']; ?>" />
                                    </div>
                                    </div>

								    <div class="form-group item">
                                    <label class="col-md-12">CONTACT</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="mob" name="customer_details_contact" id="customer_details_contact" required="required" value="<?php echo $row['customer_details_contact']; ?>" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">ADDRESS</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" name="customer_details_address" id="customer_details_address" required="required" value="<?php echo $row['customer_details_address']; ?>" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">EMAIL</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="email"  name="customer_details_email" id="customer_details_email" required="required" value="<?php echo $row['customer_details_email']; ?>" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">PASSWORD</label>
                                    <div class="col-md-12">
                                        <input type="password"  class="form-control"  name="customer_details_password" id="customer_details_password"  required pattern="password">
                                    </div>
                                    </div>
                                    
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12"></label>
                                    <div class="col-md-12">
                                        <button type="submit" class="sv-button btn btn-lg">Submit</button>
                                        
                                    </div>
                                    </div>
                                    
								
				          </fieldset>
						</form>
					    
					    
					    
					</div>
					
					
					<div class="col-md-6" >
					    <h1>Change Password</h1>
					    <form class="sv-contact-form" action="password_update.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
                     <fieldset>
							<input type="hidden" placeholder="Customer_details_id" value="<?php echo $row['customer_details_id'] ; ?>" name="customer_details_id" id="customer_details_id" required="required"  />
							
							<div class="form-group item">
                                    <label class="col-md-12">UserName</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" name="customer_details_username" id="customer_details_username" required="required" value="<?php echo $row['customer_details_username']; ?>" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">Old Password</label>
                                    <div class="col-md-12">
                                        <input type="password"  class="form-control" pattern="password" name="oldpassword" id="oldpassword" required="required" />
                                    </div>
                                    </div>
   
                        <div class="form-group item">
                                    <label class="col-md-12">New Password</label>
                                    <div class="col-md-12">
                                        <input type="password"  class="form-control" pattern="password" name="newpassword" id="newpassword" required="required" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">Confirm Password</label>
                                    <div class="col-md-12">
                                        <input type="password"  class="form-control" pattern="password" name="cnew_password" id="cnew_password" required="required" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12"></label>
                                    <div class="col-md-12">
									<button type="submit" class="sv-button btn btn-lg">Submit</button>
									<br><br>
								</div>
                         </div>
                            </fieldset>
						</form>
					    
					    
					    
					</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /content -->
	<footer id="footer">
		<?php require('4_footer.php'); ?>	
	</footer>

	<!--JS STARTS HERE -->
	<?php require('5_footer_scripts.php'); ?>
    <?php include('valid.php');?>
</body>

<!-- Mirrored from thepunte.com/demos/storevilla/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 06:57:11 GMT -->
</html>