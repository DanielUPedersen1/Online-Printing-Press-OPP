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

<form name="customers_details_form" id="customers_details_form" action="customers_details_insert.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
                        <fieldset>          

                                    <div class="form-group item">
                                    <label class="col-md-12">NAME</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" pattern="alpha" placeholder="customer_details_name" name="customer_details_name" id="customer_details_name" required="required"  />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">CONTACT</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="mob" placeholder="customer_details_contact" name="customer_details_contact" id="customer_details_contact" required="required"  />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">ADDRESS</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control"  placeholder="customer_details_address" name="customer_details_address" id="customer_details_address" required="required"  />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">EMAIL</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="email" placeholder="customer_details_email" name="customer_details_email" id="customer_details_email" required="required"  />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">USERNAME</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alphanumeric" placeholder="customer_details_username" name="customer_details_username" id="customer_details_username" required="required"  />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">PASSWORD</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alphanumeric" placeholder="customer_details_password" name="customer_details_password" id="customer_details_password" required="required"  />
                                    </div>
                                </div>

                                <button type="submit" class="sv-button">Save</button>
                               <input type="reset" name="reset" class="sv-button" id="reset" value="Reset" />
                               <input type="button" name="button" class="sv-button" id="button" value="Cancel" onclick="window.location.href='customer_details_view.php'" /> 
                               </fieldset>                                
                        </form>
                        </div>			
				</div>
				<div class="col-md-4 col-sm-5 col-xs-12">
					<aside class="sidebar">
						<div class="widget widget-menu">
							<h4 class="widget-title">PRODUCT CATEGORIES</h4>
							<ul>
								<li>
									<a href="#">
										bath
									</a>
									<ul>
										<li><a href="#">bath accessories</a></li>
										<li><a href="#">sink</a></li>
									</ul>
								</li>
								<li>
									<a href="#">
										bedroom
									</a>
									<ul>
										<li><a href="#">beds</a></li>
										<li><a href="#">lights</a></li>
									</ul>
								</li>
								<li>
									<a href="#">
										dining
									</a>
								</li>
							</ul>
						</div>
						<div class="widget widget-recent-post">
							<h4 class="widget-title">recent post</h4>
							<ul>
								<li>
									<a href="#">
										Store-Villa free
									</a>
								</li>
								<li>
									<a href="#">
										Vmag Magazine Free
									</a>
								</li>
								<li>
									<a href="#">
										Free wordpress fashion
									</a>
								</li>
								<li>
									<a href="#">
										enlighten education Free
									</a>
								</li>
								<li>
									<a href="#">
										The monday free theme
									</a>
								</li>
								<li>
									<a href="#">
										revolve moderen Free theme
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
						<h3 class="sv-footer-header">latest free themes</h3>
						<ul>
							<li>
								<a href="#">
									Store-Villa free
								</a>
							</li>
							<li>
								<a href="#">
									Vmag Magazine Free
								</a>
							</li>
							<li>
								<a href="#">
									Free wordpress fashion
								</a>
							</li>
							<li>
								<a href="#">
									enlighten education Free
								</a>
							</li>
							<li>
								<a href="#">
									The monday free theme
								</a>
							</li>
							<li>
								<a href="#">
									revolve moderen Free theme
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<h3 class="sv-footer-header">information</h3>
						<ul>
							<li>
								<a href="#">
									about us
								</a>
							</li>
							<li>
								<a href="#">
									delievery information
								</a>
							</li>
							<li>
								<a href="#">
									terms and condition
								</a>
							</li>
							<li>
								<a href="#">
									privacy policy
								</a>
							</li>
							<li>
								<a href="#">
									contact us
								</a>
							</li>
							<li>
								<a href="#">
									return policy
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<h3 class="sv-footer-header">quick links</h3>
						<ul>
							<li>
								<a href="#">
									my account
								</a>
							</li>
							<li>
								<a href="#">
									checkout
								</a>
							</li>
							<li>
								<a href="#">
									my wishlist
								</a>
							</li>
							<li>
								<a href="#">
									order history
								</a>
							</li>
							<li>
								<a href="#">
									gift vouchers
								</a>
							</li>
							<li>
								<a href="#">
									order tracking
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<h3 class="sv-footer-header">product categories</h3>
						<ul>
							<li>
								<a href="#">
									bath
								</a>
								<ul>
									<li><a href="#">bath accessories</a></li>
									<li><a href="#">sink</a></li>
								</ul>
							</li>
							<li>
								<a href="#">
									bedroom
								</a>
								<ul>
									<li><a href="#">beds</a></li>
									<li><a href="#">lights</a></li>
								</ul>
							</li>
							<li>
								<a href="#">
									dining
								</a>
							</li>
						</ul>
					</div>
				</div>	
			</div>
		</div>
			
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6 vcenter col-sm-6 col-xs-12 sv-copyright">
						<p>&copy; 2016 - StoreVilla By <a href="#" target="_blank">the punte</a></p>
					</div>
					<div class="col-md-6 vcenter col-sm-6 col-xs-12 sv-payment-accept">
						<ul>
							<li><img src="images/payment-1.png" alt="image"></li>
							<li><img src="images/payment-2.png" alt="image"></li>
							<li><img src="images/payment-3.png" alt="image"></li>
							<li><img src="images/payment-4.png" alt="image"></li>
							<li><img src="images/payment-5.png" alt="image"></li>
						</ul>
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
</body>

<!-- Mirrored from thepunte.com/demos/storevilla/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 06:51:30 GMT -->
</html>