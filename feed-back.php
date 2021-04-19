<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thepunte.com/demos/storevilla/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 06:57:11 GMT -->
<head>
	<?php require('1_metatags.php'); ?> <!-- metatags-->
</head>
<body>
	<header id="header" class="">
    <?php require('2_header.php'); ?> <!-- header -->
    </header>
		<!-- /header -->
		
		<nav class="navbar">
		<?php require('3_navbar.php'); ?>	<!-- navbar-->
		</nav>
		<!-- /nav -->
	
	<div id="content" class="site-content">
		<div class="container">
			<div class="row sv-nopadding">
			<?php 
                              require('db_connect.php'); 
                              require('valid.php');
                              
                        ?>
				<div class="col-md-8 col-sm-7 col-xs-12 main-content sv-contact-page">
					<div class="col-md-12 sv-nopadding">
					  <h1>FEEDBACK</h1>
						<form class="sv-contact-form" action="feedback_insert.php" method="post" novalidate>
							<fieldset>
								<div class="form-group item">
									<input type="text" placeholder="Name" class="form-control" pattern="alpha"  name="feedback_name" id="feedback_name"  required="required">
								</div>
								<div class="form-group item">
									<input type="text" placeholder="Subject" class="form-control" pattern="alpha"  name="feedback_subject" id="feedback_subject" required="required">
								</div>
								<div class="form-group item">
									
									<textarea name="feedback_description" id="feedback_description" placeholder="Your Message" class="form-control" pattern="alpha" required="required" ></textarea>
								</div>
								<div>
									<button type="submit" class="sv-button">Send feedback</button>
								</div>
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
										    <b>GAZETTEER BOOKS</b>
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
			<?php require('4_footer.php'); ?>
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

<!-- Mirrored from thepunte.com/demos/storevilla/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 06:57:11 GMT -->
</html>