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
       
       session_start();
       
       $customer_details_username=$_SESSION['uname'];
       
       require('db_connect.php');
       
       $sql="SELECT * FROM `customer_details` WHERE `customer_details_username`='$customer_details_username' ";
       
       $result=mysqli_query($conn,$sql);
       
       $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
       
       
       ?>
   
   <div id="content" class="site-content">
		<div class="container">

			<div class="row sv-nopadding">
				<div class="col-md-8 col-sm-7 col-xs-12 main-content sv-contact-page">
					<div class="col-md-12 sv-nopadding">
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
                                        <input type="password"  class="form-control" pattern="alphanumeric" name="oldpassword" id="oldpassword" required="required" />
                                    </div>
                                    </div>
   
                        <div class="form-group item">
                                    <label class="col-md-12">New Password</label>
                                    <div class="col-md-12">
                                        <input type="password"  class="form-control" pattern="alphanumeric" name="newpassword" id="newpassword" required="required" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">Confirm Password</label>
                                    <div class="col-md-12">
                                        <input type="password"  class="form-control" pattern="alphanumeric" name="cnew_password" id="cnew_password" required="required" />
                                    </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="form-group item">
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
								            