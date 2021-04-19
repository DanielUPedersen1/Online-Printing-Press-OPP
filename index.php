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
			<section class="sv-banner">
				<div class="sv-banner-layout-1">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-12 sv-slider-wrapper">
								<div class="sv-slider cs-hidden">
									<div>
										<img src="images/photo/1.jpg" alt="image">
<!--
										<div class="sv-banner-slider-info">
											<h2 class="caption-title">										
												<span>The Ultimate</span><br>new color trends
											</h2>
											<a href="#" class="slider-button">view more</a>
										</div>
-->
									</div>
									<div>
										<img src="images/photo/2.jpg" alt="image">
										<!--<div class="sv-banner-slider-info">
											<h2 class="caption-title">										
												<span>The Ultimate</span><br>new color trends
											</h2>
											<a href="#" class="slider-button">view more</a>
										</div>-->
									</div>
									<!--<div>
										<img src="images/photo/p1.jpg" alt="image">
										<div class="sv-banner-slider-info">
											<h2 class="caption-title">										
												<span>The Ultimate</span><br>new color trends
											</h2>
											<a href="#" class="slider-button">view more</a>
										</div>
									</div>-->
<!--
									<div>
										<img src="images/photo/p2.jpg" alt="image">
										<div class="sv-banner-slider-info">
											<h2 class="caption-title">										
												<span>The Ultimate</span><br>new color trends
											</h2>
											<a href="#" class="slider-button">view more</a>
										</div>
									</div>
-->
									<div>
										<img src="images/photo/p3.jpg" alt="image">
<!--
										<div class="sv-banner-slider-info">
											<h2 class="caption-title">										
												<span>The Ultimate</span><br>new color trends
											</h2>
											<a href="#" class="slider-button">view more</a>
										</div>
-->
									</div>
									<!--<div>
										<img src="images/slider-3.jpg" alt="image">
										<div class="sv-banner-slider-info">
											<h2 class="caption-title">										
												<span>The Ultimate</span><br>new color trends
											</h2>
											<a href="#" class="slider-button">view more</a>
										</div>
									</div>-->
								</div>
							</div>
							<div class="col-md-4 col-sm-12 sv-add-section">
								<div class="sv-img-holder top col-md-12 col-sm-6 col-xs-6 sv-nopadding">
									<a href="#">
										<img src="images/photo/p1.jpg" alt="image">
									</a>
								</div>
								<div class="sv-img-holder col-md-12 col-sm-6 col-xs-6 sv-nopadding">
									<a href="#">
										<img src="images/photo/p2.jpg" alt="image">
									</a>
								</div>
							</div>
						</div>		
					</div>	
				</div>
			</section>
			
			<section class="sv-product-section">
				<div class="container">
				<hr>
				<h1>GAZETTEER BOOKS</h1>
					<div class="row sv-nopadding">
						<div class="sv-product-wrap">
							<div class="col-md-12 col-sm-6 col-sx-12 sv-nopadding sv-product">
								<div class="sv-product-wrapper sv-product-slider">
								
								<?php

require("db_connection.php");

$sql1 = "SELECT * from product_category Where product_category_name='Books'";

$result1 = mysqli_query($conn,$sql1);

$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);

$product_category_id=$row1['product_category_id'];
                                
$sql = "SELECT * from `product_details`  Where product_category_id='$product_category_id' ";

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Found");
	window.location="index.php";
	</script>';
}	//header('location:index.php');

?>
<?php 

//$sl=1;

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    ?>
									
											<div class="slide">
										<div class="sv-item-img">
											<div class="sv-img-holder">
												<img src="admin/images/<?php echo $row['product_details_image']; ?>" alt="image" height="300" width="400">
											</div>
<!--
											<div class="sv-tag sv-tag-color">
												<span>sale</span>
											</div>
-->
											<div class="sv-box-hover">
												<a href="admin/images/<?php echo $row['product_details_image']; ?>" height="300" width="400" data-lightbox="product-1">
													<i class="fa fa-search"></i>
												</a>
											</div>
										</div>
										<div class="sv-block-item-title">
											<span>Product</span>
											<p style="height:20px;">
										    <?php echo $row['product_details_name']; ?>
										    
                                        </p>
										</div>
										<div class="sv-button-holder clearfix">
											<form action="govtuser_cart_insert.php" method="post">
								    	<?php $row1=100; ?>
								    	<input type="hidden" name="product_details_id" id="product_details_id" class="form-control" value="<?php echo $row['product_details_id']; ?>" >
							
                                        <input type="hidden" name="product_details_price" id="product_details_price" class="form-control" value="<?php echo $row['product_details_price']; ?>" >
                                        
                                         <input type="hidden" name="product_details_quantity" id="product_details_quantity" class="form-control" value="<?php echo $row1; ?>" >
                                        <button type="button" class="btn btn-success" onclick="window.location.href='login.php' "><i class="fa fa-shopping-cart"></i> Add to Cart</button>  <button type="button" class="btn btn-success" onclick="window.location.href='stationaryproduct.php?id=<?php echo $row['product_details_id']; ?>' "><i class="fa fa-eye"></i> View Details</button>
                                         								    	
								    	</form><br>
										</div>
										<div class="sv-product-price">
											<span class="price">
											&#8377;&nbsp;<?php echo $row['product_details_price']; ?>
										</span>&nbsp; <span>per piece</span>
										</div>
<!--
										<div class="sv-add-to-list">
											<ul>
												<li><a href="#" title="" class="sv-quick-view">quick view</a></li>
												<li><a href="#" title="" class="sv-add-to">add to list</a></li>
											</ul>
										</div>		
-->
									</div>
									<?php
}
?>
									
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<section class="sv-cta-wrapper">
				<div class="container">
					<div class="sv-cta sv-cta-layout-1">
						<div class="sv-cta-text">
							<span>trending in 2017</span>
							<h2>BECAUSE THE LIFE IS BETTER</h2>
							<a href="books.php" target="_self" class="sv-cta-shop">shop now</a>
						</div>
					</div>
				</div>
			</section>
			<section class="sv-product-section">
				<div class="container">
				<hr>
				<h1>Stationary</h1>
					<div class="row sv-nopadding">
						<div class="sv-product-wrap">
							<div class="col-md-12 col-sm-6 col-sx-12 sv-nopadding sv-product">
								<div class="sv-product-wrapper sv-product-slider">
								
								<?php

require("db_connection.php");

$sql1 = "SELECT * from product_category Where product_category_name='Stationary'";

$result1 = mysqli_query($conn,$sql1);

$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);

$product_category_id=$row1['product_category_id'];
                                
$sql = "SELECT * from `product_details`  Where product_category_id='$product_category_id' ";

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Found");
	window.location="index.php";
	</script>';
}	//header('location:index.php');

?>
<?php 

//$sl=1;

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    ?>
									
											<div class="slide">
										<div class="sv-item-img">
											<div class="sv-img-holder">
												<img src="admin/images/<?php echo $row['product_details_image']; ?>" alt="image" height="300" width="400">
											</div>
<!--
											<div class="sv-tag sv-tag-color">
												<span>sale</span>
											</div>
-->
											<div class="sv-box-hover">
												<a href="admin/images/<?php echo $row['product_details_image']; ?>" height="300" width="400" data-lightbox="product-1">
													<i class="fa fa-search"></i>
												</a>
											</div>
										</div>
										<div class="sv-block-item-title">
											<span>Product</span>
											<p style="height:20px;">
										    <?php echo $row['product_details_name']; ?>
										    
                                        </p>
										</div>
										<div class="sv-button-holder clearfix">
											<form action="govtuser_cart_insert.php" method="post">
								    	<?php $row1=100; ?>
								    	<input type="hidden" name="product_details_id" id="product_details_id" class="form-control" value="<?php echo $row['product_details_id']; ?>" >
							
                                        <input type="hidden" name="product_details_price" id="product_details_price" class="form-control" value="<?php echo $row['product_details_price']; ?>" >
                                        
                                         <input type="hidden" name="product_details_quantity" id="product_details_quantity" class="form-control" value="<?php echo $row1; ?>" >
                                        <button type="button" class="btn btn-success" onclick="window.location.href='login.php' "><i class="fa fa-shopping-cart"></i> Add to Cart</button>  <button type="button" class="btn btn-success" onclick="window.location.href='stationaryproduct.php?id=<?php echo $row['product_details_id']; ?>' "><i class="fa fa-eye"></i> View Details</button>
                                         								    	
								    	</form><br>
										</div>
										<div class="sv-product-price">
											<span class="price">
											&#8377;&nbsp;<?php echo $row['product_details_price']; ?>
										</span>&nbsp; <span>per piece</span>
										</div>
<!--
										<div class="sv-add-to-list">
											<ul>
												<li><a href="#" title="" class="sv-quick-view">quick view</a></li>
												<li><a href="#" title="" class="sv-add-to">add to list</a></li>
											</ul>
										</div>		
-->
									</div>
									<?php
}
?>
									
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			
			<section class="sv-cta-wrapper">
				<div class="container">
					<div class="sv-cta sv-cta-layout-2">
						<div class="sv-cta-text">
							<span>get your new updates</span>
							<h2>BECAUSE THE LIFE IS BETTER</h2>
				<a href="stationary.php" target="_self" class="sv-cta-shop">shop now</a>
						</div>
					</div>
				</div>
			</section>
			<section class="sv-horizontal-tab">
				<div class="container">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab-1">GAZETTEER BOOKS</a></li>
						<li><a href="#tab-2">STATIONARY</a></li>
						<li><a href="#tab-3">FORMS</a></li>
					</ul>
					<div class="tab-content sv-product-section">
					    <div id="tab-1" class="tab-pane fade in active">
					      	<div class="sv-product-wrap">
						      	<div class="sv-product-wrapper">
						      	<div class="row">	
						      		<?php

require("db_connection.php");

$sql1 = "SELECT * from product_category Where product_category_name='Books'";

$result1 = mysqli_query($conn,$sql1);

$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);

$product_category_id=$row1['product_category_id'];
                                
$sql = "SELECT * from `product_details`  Where product_category_id='$product_category_id' ";

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Found");
	window.location="index.php";
	</script>';
}	//header('location:index.php');

?>
<?php 

//$sl=1;

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    ?>      	
						      		<div class="slide col-md-3 col-sm-6">
										<div class="sv-item-img">
											<div class="sv-img-holder">
												<img src="admin/images/<?php echo $row['product_details_image']; ?>" alt="image" height="300" width="400" alt="image">
											</div>
											<!--<div class="sv-tag sv-tag-color">
												<span>sale</span>
											</div>-->
											<div class="sv-box-hover">
												<a href="admin/images/<?php echo $row['product_details_image']; ?>" height="300" width="400" data-lightbox="product-1">
													<i class="fa fa-search"></i>
												</a>
											</div>
										</div>
										<div class="sv-block-item-title">
											<span>Product</span>
											<p style="height:20px;">
										    <?php echo $row['product_details_name']; ?>
										    
                                        </p>
										</div>
										<div class="sv-button-holder clearfix">
											<form action="govtuser_cart_insert.php" method="post">
								    	<?php $row1=100; ?>
								    	<input type="hidden" name="product_details_id" id="product_details_id" class="form-control" value="<?php echo $row['product_details_id']; ?>" >
							
                                        <input type="hidden" name="product_details_price" id="product_details_price" class="form-control" value="<?php echo $row['product_details_price']; ?>" >
                                        
                                         <input type="hidden" name="product_details_quantity" id="product_details_quantity" class="form-control" value="<?php echo $row1; ?>" >
                                        <button type="button" class="btn btn-success" onclick="window.location.href='login.php' "><i class="fa fa-shopping-cart"></i> Add to Cart</button>  <button type="button" class="btn btn-success" onclick="window.location.href='stationaryproduct.php?id=<?php echo $row['product_details_id']; ?>' "><i class="fa fa-eye"></i> View Details</button>
                                         								    	
								    	</form><br>
										</div>
										<div class="sv-product-price">
											<span class="price">
											&#8377;&nbsp;<?php echo $row['product_details_price']; ?>
										</span>&nbsp; <span>per piece</span>
										</div>
										<!--<div class="sv-add-to-list">
											<ul>
												<li><a href="#" title="" class="sv-quick-view">quick view</a></li>
												<li><a href="#" title="" class="sv-add-to">add to list</a></li>
											</ul>
										</div>-->		
									</div>
									
									<?php
}
?>	
								</div>	
						      	</div>	
					      	</div>
					    </div>
					    <div id="tab-2" class="tab-pane fade">
						    <div class="sv-product-wrap">
							   	<div class="sv-product-wrapper">
							      	
									
									<?php

require("db_connection.php");

$sql1 = "SELECT * from product_category Where product_category_name='Stationary'";

$result1 = mysqli_query($conn,$sql1);

$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);

$product_category_id=$row1['product_category_id'];
                                
$sql = "SELECT * from `product_details`  Where product_category_id='$product_category_id' ";

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Found");
	window.location="index.php";
	</script>';
}	//header('location:index.php');

?>
<?php 

//$sl=1;

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    ?>      	
						      		<div class="slide col-md-3 col-sm-6">
										<div class="sv-item-img">
											<div class="sv-img-holder">
												<img src="admin/images/<?php echo $row['product_details_image']; ?>" alt="image" height="300" width="400" alt="image">
											</div>
											<!--<div class="sv-tag sv-tag-color">
												<span>sale</span>
											</div>-->
											<div class="sv-box-hover">
												<a href="admin/images/<?php echo $row['product_details_image']; ?>" height="300" width="400" data-lightbox="product-1">
													<i class="fa fa-search"></i>
												</a>
											</div>
										</div>
										<div class="sv-block-item-title">
											<span>Product</span>
											<p style="height:20px;">
										    <?php echo $row['product_details_name']; ?>
										    
                                        </p>
										</div>
										<div class="sv-button-holder clearfix">
											<form action="govtuser_cart_insert.php" method="post">
								    	<?php $row1=100; ?>
								    	<input type="hidden" name="product_details_id" id="product_details_id" class="form-control" value="<?php echo $row['product_details_id']; ?>" >
							
                                        <input type="hidden" name="product_details_price" id="product_details_price" class="form-control" value="<?php echo $row['product_details_price']; ?>" >
                                        
                                         <input type="hidden" name="product_details_quantity" id="product_details_quantity" class="form-control" value="<?php echo $row1; ?>" >
                                        <button type="button" class="btn btn-success" onclick="window.location.href='login.php' "><i class="fa fa-shopping-cart"></i> Add to Cart</button>  <button type="button" class="btn btn-success" onclick="window.location.href='stationaryproduct.php?id=<?php echo $row['product_details_id']; ?>' "><i class="fa fa-eye"></i> View Details</button>
                                         								    	
								    	</form><br>
										</div>
										<div class="sv-product-price">
											<span class="price">
											&#8377;&nbsp;<?php echo $row['product_details_price']; ?>
										</span>&nbsp; <span>per piece</span>
										</div>
										<!--<div class="sv-add-to-list">
											<ul>
												<li><a href="#" title="" class="sv-quick-view">quick view</a></li>
												<li><a href="#" title="" class="sv-add-to">add to list</a></li>
											</ul>
										</div>-->		
									</div>
									
									<?php
}
?>
								</div>
							</div>
					    </div>
					    <div id="tab-3" class="tab-pane fade">
					      	<div class="sv-product-wrap">
							   	<div class="sv-product-wrapper">
							      	
									<?php

require("db_connection.php");

$sql1 = "SELECT * from product_category Where product_category_name='Forms'";

$result1 = mysqli_query($conn,$sql1);

$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);

$product_category_id=$row1['product_category_id'];
                                
$sql = "SELECT * from `product_details`  Where product_category_id='$product_category_id' ";

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Found");
	window.location="index.php";
	</script>';
}	//header('location:index.php');

?>
<?php 

//$sl=1;

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    ?>      	
						      		<div class="slide col-md-3 col-sm-6">
										<div class="sv-item-img">
											<div class="sv-img-holder">
												<img src="admin/images/<?php echo $row['product_details_image']; ?>" alt="image" height="300" width="400" alt="image">
											</div>
											<!--<div class="sv-tag sv-tag-color">
												<span>sale</span>
											</div>-->
											<div class="sv-box-hover">
												<a href="admin/images/<?php echo $row['product_details_image']; ?>" height="300" width="400" data-lightbox="product-1">
													<i class="fa fa-search"></i>
												</a>
											</div>
										</div>
										<div class="sv-block-item-title">
											<span>Product</span>
											<p style="height:20px;">
										    <?php echo $row['product_details_name']; ?>
										    
                                        </p>
										</div>
										<div class="sv-button-holder clearfix">
											<form action="govtuser_cart_insert.php" method="post">
								    	<?php $row1=100; ?>
								    	<input type="hidden" name="product_details_id" id="product_details_id" class="form-control" value="<?php echo $row['product_details_id']; ?>" >
							
                                        <input type="hidden" name="product_details_price" id="product_details_price" class="form-control" value="<?php echo $row['product_details_price']; ?>" >
                                        
                                         <input type="hidden" name="product_details_quantity" id="product_details_quantity" class="form-control" value="<?php echo $row1; ?>" >
                                        <button type="button" class="btn btn-success" onclick="window.location.href='login.php' "><i class="fa fa-shopping-cart"></i> Add to Cart</button>  <button type="button" class="btn btn-success" onclick="window.location.href='stationaryproduct.php?id=<?php echo $row['product_details_id']; ?>' "><i class="fa fa-eye"></i> View Details</button>
                                         								    	
								    	</form><br>
										</div>
										<div class="sv-product-price">
											<span class="price">
											&#8377;&nbsp;<?php echo $row['product_details_price']; ?>
										</span>&nbsp; <span>per piece</span>
										</div>
										<!--<div class="sv-add-to-list">
											<ul>
												<li><a href="#" title="" class="sv-quick-view">quick view</a></li>
												<li><a href="#" title="" class="sv-add-to">add to list</a></li>
											</ul>
										</div>-->		
									</div>
									
									<?php
}
?>
								</div>
							</div>
					    </div>
					 </div>
				</div>	
			</section>
			<!--<section class="sv-feature">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4 sv-feature-box">
							<span>
								<i class="fa fa-truck"></i>
							</span>
							<div class="sv-feat-content">
								<h3>FREE SHIPPING WITHIN DHARWAD FOR GOVT OFFICES</h3>
								
							</div>
						</div>
						<div class="col-md-4 col-sm-4 sv-feature-box">
							<span>
								<i class="fa fa-headphones"></i>
							</span>
							<div class="sv-feat-content">
								<h3>24X7 CUSTOMER SUPPORT</h3>
								<p></p>
							</div>
						</div>	
						<div class="col-md-4 col-sm-4 sv-feature-box">
							<span>
								<i class="fa fa-dollar"></i>
							</span>
							<div class="sv-feat-content">
								<h3>MONEY BACK GUARANTEE </h3>
								<p>(+44) 123 - 4567 - 7654</p>	
							</div>
						</div>
					</div>
				</div>		
			</section>-->
			
		</div>
		<!-- /content -->

		<footer id="footer">
			<?php require('4_footer.php'); ?>
		</footer>

		<!--JS STARTS HERE -->
		<?php require('5_footer_scripts.php'); ?>		
	</body>

</html>