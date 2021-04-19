<!DOCTYPE html>
<html>

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
			<div class="row sv-nopadding">
				<div class="col-md-8 col-sm-7 col-xs-12 main-content sv-product-page">
					<div class="sv-product-top clearfix">
						<div class="col-md-6 col-xs-12 sv-product-image-holder">
							<div class="sv-product-img sv-product-wrapper">
								<ul>
									<li>
										<div class="sv-img-holder sv-item-img">
											<img src="images/pro-2.jpg" alt="image">
											<div class="sv-box-hover">
												<a href="images/pro-2.jpg" data-lightbox="product-1">
													<i class="fa fa-search"></i>
												</a>
											</div>
										</div>
									</li>
									
								</ul>
							</div>
						</div>				
						<div class="col-md-6 col-xs-12">
							<h1 class="sv-product-title">addidas shoes</h1>
							<!--<div class="sv-customer-review">
								<img src="images/rating.png" alt="rating">
							</div>-->
							<p>
								Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
							</p>
							<div class="sv-product-category">
								<span>Categories: Bath, Bath Accessories</span>
							</div>
							<!--<ul class="sv-social-icon">
								<li><a href="http://facebook.com/" title="" target="_blank"><img src="images/facebook.png" alt="facebok"></a></li>
								<li><a href="http://twitter.com/" title="" target="_blank"><img src="images/twitter.png" alt="twitter"></a></li>
								<li><a href="http://linkedin.com/" title="" target="_blank"><img src="images/linkedin.png" alt="linkedin"></a></li>
								<li><a href="http://youtube.com/" title="" target="_blank"><img src="images/youtube.png" alt="youtube"></a></li>
							</ul>-->
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-5 col-xs-12">
					<aside class="sidebar">
						<!--<div class="widget widget-search">
							<h4 class="widget-title">search</h4>
							<form class="form-wrap">
								<input type="search" class="sv-search-field" placeholder="search">
								<button type="submit" class="sv-button">
									<i class="fa fa-search"></i>
								</button>
							</form>
						</div>-->
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
	<?php require('5_footer_scripts.php'); ?>
</body>

</html>