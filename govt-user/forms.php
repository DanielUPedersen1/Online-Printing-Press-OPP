<!DOCTYPE html>
<html>

<!-- Mirrored from thepunte.com/demos/storevilla/product-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 06:56:17 GMT -->
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
				<div class="col-md-12 col-sm-7 col-xs-12 main-content sv-product-page">
					<div class="sv-product-bottom">
						<div class="sv-product-wrapper">
							<div class="row">
								<div class="col-md-12">
									<h2>FORMS</h2>	
								</div>
								
								<?php

require("db_connect.php");


$sql1 ="select * from product_category where product_category_name='Forms'";

$result1 = mysqli_query($conn,$sql1);

$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);                                
                                
$product_category_id=$row1['product_category_id'];  
                                
$sql="select * from product_details where product_category_id='$product_category_id'";  
                                
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

$sl=1;

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    ?>
								<div class="col-md-3 col-sm-6 col-xs-12 col-product">		
									<div class="sv-item-img">
										<div class="sv-img-holder">
											<img src="../admin/images/<?php echo $row['product_details_image']; ?>" alt="image" height="250" width="400">
										</div>
										<!--<div class="sv-tag">
											<span>new</span>
										</div>-->
										<div class="sv-box-hover">
											<a href="../admin/images/<?php echo $row['product_details_image']; ?>" data-lightbox="product-1" height="250" width="400">
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
                                         	<button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add to Cart</button> <button type="button" class="btn btn-success" onclick="window.location.href='stationaryproduct.php?id=<?php echo $row['product_details_id']; ?>' "><i class="fa fa-eye"></i> View Details</button>							    	
								    	</form><br>
								    	
										
										<!--<a href="stationaryproduct.php?id=<?php // echo $row['product_details_id']; ?>" class="product-button view-detail">view details</a>-->
									</div>
									<div class="sv-product-price">
										<span class="price">
											&#8377;&nbsp;<?php echo $row['product_details_price']; ?>
										</span>&nbsp; <span>per piece</span>
									</div>
								</div>
								
								<?php
}
?>
							</div>
						</div>	
					</div>
				</div>
				<!--<div class="col-md-4 col-sm-5 col-xs-12">
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
				</div>		-->		
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

<!-- Mirrored from thepunte.com/demos/storevilla/product-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 06:56:17 GMT -->
</html>
	