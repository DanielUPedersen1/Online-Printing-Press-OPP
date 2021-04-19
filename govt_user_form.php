<!DOCTYPE html>
<html>

<!-- Mirrored from thepunte.com/demos/storevilla/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 06:51:22 GMT -->
<head lang="en">
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
		<!-- /nav -->
	
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 col-xs-12 main-content">
					<div class="sv-contact-page sv-login-page">
                                       
<form name="govt_user_form" id="govt_user_form" action="govt_user_insert.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>

    <p><span style="color:red; text-align:justify;">NOTE: Only Govt users are allowed to do registration and details will be verfied.If they are not found to be genuine then legal action will be taken against them.</span></p>
                                   
                                    <div class="form-group item">
                                    <label class="col-md-12">GOVT TYPE</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="GOVT TYPE" name="govt_type" id="govt_type" required="required"  />
                                    </div>
                                </div>

                                    
                                    <div class="form-group item">
                                    <label class="col-md-12"> GOVT USER NAME</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" pattern="alpha" placeholder="GOVT USER NAME" name="govt_user_name" id="govt_user_name" required="required" />
                                    </div>
                                </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">ADDRESS</label>
                                    <div class="col-md-12">
                        <textarea placeholder="ADDRESS" class="form-control" name="govt_user_address" id="govt_user_address" required="required" class="form-control"></textarea>
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">CONTACT</label>
                                    <div class="col-md-12">
                        <input type="text" class="form-control" pattern="mob" placeholder="CONTACT" name="govt_user_contact" id="govt_user_contact" required="required" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">EMAIL</label>
                                    <div class="col-md-12">
                        <input type="text" pattern="email" placeholder="EMAIL" name="govt_user_email" id="govt_user_email" required="required" class="form-control" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">DESIGNATION</label>
                                    <div class="col-md-12">
                        <input type="text" pattern="alpha" placeholder="DESIGNATION" name="govt_user_designation" id="govt_user_designation" required="required"  class="form-control"/>
                                    </div>
                                    </div>
  
                                <div class="form-group item">
                                    <label class="col-md-12">LAND LINE NO</label>
                                    <div class="col-md-12">
                        <input type="text" placeholder="LAND LINE NO" name="govt_user_landline" id="govt_user_landline" required="required" class="form-control"/> </div>
                                    </div>

                             <div class="form-group item">
                                    <label class="col-md-12">USER NAME</label>
                                    <div class="col-md-12">
                        <input type="text" pattern="alphanumeric" placeholder="USER NAME" name="govt_user_username" id="govt_user_username" required="required" class="form-control" /> </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">PASSWORD</label>
                                    <div class="col-md-12">
                        <input type="text" pattern="alphanumeric" placeholder="PASSWORD" name="govt_user_password" id="govt_user_password" required="required" class="form-control" /> </div>
                                    </div>
                                    
                               <button type="submit" class="sv-button btn btn-lg">Save</button>
                            <a href="govt_user_form.php" class="sv-button btn btn-lg">Reset</a>
                            
                        </form>
                      </div>			
				</div>
				<div class="col-md-4 col-sm-5 col-xs-12">
					<aside class="sidebar">
						<div class="widget widget-menu">
							<h4 class="widget-title">PRODUCT CATEGORIES</h4>
							<ul>
								<li>
									<a href="stationary.php">
										<b>STATIONARY</b>
									</a>
									
								</li>
								<li>
									<a href="forms.php">
										<b>FORMS</b>
									</a>
								</li>
								<li>
									<a href="books.php">
										    <b>TOUR BOOKS</b>
									</a>
								</li>
							</ul>
						</div>
												
					</aside>				
				</div>				
			</div>
		</div>
	</div>
	<!-- /content -->

	<footer id="footer">
		<div class="footer-top widget-category">
			<div class="container">
				<div class="row">
					
					
					<div class="col-md-3 col-sm-6 col-xs-12">
							<h3 class="sv-footer-header">quick links</h3>
							<ul>
								<li>
									<a href="index.php">
										Home
									</a>
								</li>
								<li>
									<a href="aboutus.php">
										About Us
									</a>
								</li>
								<li>
									<a href="stationary.php">
										Stationary
									</a>
								</li>
								<li>
									<a href="forms.php">
										Forms
									</a>
								</li>
								<li>
									<a href="books.php">
										Books
									</a>
								</li>
								<li>
									<a href="feed-back.php">
										Feedback
									</a>
								</li>
								<li>
									<a href="contact.php">
										Contact us
									</a>
								</li>
							</ul>
						</div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <?php 
                            require('db_connect.php'); 
                            require('valid.php');
                        ?>
                       <form class="sv-contact-form" name="feedback_form" id="feedback_form" action="feedback_insert.php"  method="post" enctype="multipart/form-data">
                        <center><h4 style="color:white" align="">FEEDBACK</h4></center>    
						<table border="0" align="center">                       
                        <tr>
                        <td><label style="color:white">Name &nbsp;</label></td>
                        <td style="padding:2px;"><input type="text" name="feedback_name" id="feedback_name" class="form-control" required ></td>
                        <br>
                        </tr>
                            
                        <tr>
                        <td><label style="color:white">Subject &nbsp;</label></td>
                        <td style="padding:2px;"><input type="text" name="feedback_subject" id="feedback_subject" class="form-control" required></td>
                        </tr>
                
                        <tr>
                        <td><label style="color:white">Description &nbsp;</label></td>
                            <td style="padding:2px;"><textarea name="feedback_description" id="feedback_description"  class="form-control" required> </textarea></td>
                        </tr> 
                        
                        <tr>
                        <td style="padding:2px;" colspan="2" align="center"><button type="submit" class="btn btn-primary">Submit</button></td>
                        </tr>
                        
						</table>
                 
                </form>
                       
                        </div>


									</div>	
			</div>
		</div>
			
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6 vcenter col-sm-6 col-xs-12 sv-copyright">
						<p>&copy; 2018 - GOVERNAMENT PRINTING PRESS <a href="#" target="_blank">Developed By Ruksaar And Priyanka</a></p>
					</div>
									</div>
			</div>
		</div>
	</footer>

	<!--JS STARTS HERE -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/lightslider.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/custom.js"></script>	
	<?php include('valid.php');?>
</body>

<!-- Mirrored from thepunte.com/demos/storevilla/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 06:51:30 GMT -->
</html>