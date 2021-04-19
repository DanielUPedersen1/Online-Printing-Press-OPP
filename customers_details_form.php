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
<h1>CUSTOMER SIGN UP</h1>
<form name="customers_details_form" id="customers_details_form" action="customers_details_insert.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
                                    

                                    <div class="form-group item">
                                    <label class="col-md-12">FULL NAME</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" pattern="alpha" placeholder="FULL NAME" name="customer_details_name" id="customer_details_name" required="required"  />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">CONTACT</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="mob" placeholder="CONTACT" name="customer_details_contact" id="customer_details_contact" required="required"  />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">ADDRESS</label>
                                    <div class="col-md-12">
                                       <textarea class="form-control" name="customer_details_address" id="customer_details_address" placeholder="ADDRESS" required="required"></textarea>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">EMAIL</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="email" placeholder="EMAIL" name="customer_details_email" id="customer_details_email" required="required"  />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">USERNAME</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alphanumeric" placeholder="USERNAME" name="customer_details_username" id="customer_details_username" required="required"  />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">PASSWORD</label>
                                    <div class="col-md-12">
                                        <input type="password"  class="form-control" pattern="password" placeholder="PASSWORD" name="customer_details_password" id="customer_details_password" required="required"  />
                                    </div>
                                </div>

                                <button type="submit" class="sv-button btn btn-lg">Save</button>
                                <a href="customers_details_form.php" class="sv-button btn btn-lg">Reset</a>
                                                             
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