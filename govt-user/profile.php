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
require("db_connect.php"); 
    
$username=$_SESSION['govtuser'];

//echo $username;

$sql="select * from govt_user where govt_user_username='$username'";

$result = mysqli_query($conn,$sql);

//$count=1;

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
       $sql1="select * from order_details od,govt_user gu where od.govt_user_id=gu.govt_user_id and
         gu.govt_user_username='$username'";
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
					    
					    <form class="sv-contact-form" action="govt_user_details_update.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
							<fieldset>
							<input type="hidden" placeholder="govt_user_id" value="<?php echo $row['govt_user_id'] ; ?>" name="govt_user_id" id="govt_user_id" required="required"  />
								<div class="form-group item">
                                    <label class="col-md-12">NAME</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" name="govt_user_name" id="govt_user_name" required="required" value="<?php echo $row['govt_user_name']; ?>" />
                                    </div>
                                    </div>

								    <div class="form-group item">
                                    <label class="col-md-12">CONTACT</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="mob" name="govt_user_contact" id="govt_user_contact" required="required" value="<?php echo $row['govt_user_contact']; ?>" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">ADDRESS</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" name="govt_user_address" id="govt_user_address" required="required" value="<?php echo $row['govt_user_address']; ?>" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">EMAIL</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="email"  name="govt_user_email" id="govt_user_email" required="required" value="<?php echo $row['govt_user_email']; ?>" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">PASSWORD</label>
                                    <div class="col-md-12">
                                        <input type="password"  class="form-control" pattern="password"  name="govt_user_password" id="govt_user_password" required   />
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
					
					
					<div class="col-md-6">
					    
					    <form class="sv-contact-form" action="password_update.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
                     <fieldset>
							<input type="hidden" placeholder="govt_user_id" value="<?php echo $row['govt_user_id'] ; ?>" name="govt_user_id" id="govt_user_id" required="required"  />
							
							<div class="form-group item">
                                    <label class="col-md-12">UserName</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" name="govt_user_username" id="govt_user_username" required="required" value="<?php echo $row['govt_user_username']; ?>" />
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