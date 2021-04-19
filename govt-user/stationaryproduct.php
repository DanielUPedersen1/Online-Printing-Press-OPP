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
					
					
					<?php 

require("db_connect.php"); 

$product_details_id=$_REQUEST['id'];

//echo $id;

$sql="select * from product_details,product_category where product_details.product_details_id='$product_details_id' and product_details.product_category_id=product_category.product_category_id";

$result = mysqli_query($conn,$sql);

//$count=1;

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
                    
						<div class="col-md-6 col-xs-12 sv-product-image-holder">
							<div class="sv-product-img sv-product-wrapper">
								<ul>
									<li>
										<div class="sv-img-holder sv-item-img">
											<img src="../admin/images/<?php echo $row['product_details_image']; ?>" alt="image" height="250" width="400">
											<div class="sv-box-hover">
												<a href="../admin/images/<?php echo $row['product_details_image']; ?>" data-lightbox="product-1" height="250" width="400">
													<i class="fa fa-search"></i>
												</a>
											</div>
										</div>
									</li>
									
								</ul>
							</div>
						</div>				
						<div class="col-md-6 col-xs-12">
							<h1 class="sv-product-title"><?php echo $row['product_details_name']; ?></h1>
							<!--<div class="sv-customer-review">
								<img src="images/rating.png" alt="rating">
							</div>-->
							<p>
								<?php echo $row['product_details_description']; ?>
							</p>
							
							<form action="govtuser_cart_insert.php" method="post">
							
							<div class="sv-product-category">
							<table height="100">
							
							<input type="hidden" name="product_details_id" id="product_details_id" class="form-control" value="<?php echo $product_details_id; ?>" >
							
							<input type="hidden" name="product_details_price" id="product_details_price" class="form-control" value="<?php echo $row['product_details_price']; ?>" >
							
								<tr>
								    <td>Category</td>
								    <td>:&nbsp;<?php echo $row['product_category_name']; ?></td>
								</tr> 
								
								<tr>
								    <td>Per Single Peice</td>
								    <td>:&nbsp;<?php echo $row['product_details_price']; ?></td>
								</tr> 
								
				<script>
                    function cal(){
                    var qty=document.getElementById('product_details_quantity').value;
                    if(qty<100)
                        {
                            alert("QUANTITY CANNOT BE LESS THAN 100");
                            document.getElementById('product_details_quantity').focus();
                        }
                    }
                </script>				
								
                                <tr>
								    <td>Quantity</td>
								    <td>&nbsp;
								    
								    
								    <input type="text" name="product_details_quantity" id="product_details_quantity" class="form-control" onchange="cal();" required>
								    
								    </td>
                                </tr>
                                <!--<tr>
								    <td>Delivery expected </td>
								    <td>&nbsp;
								    
								    <input type="date" name="order_details_reqdate" id="order_details_reqdate" class="form-control" required>
								    
								    </td>
								    </tr>--> 
								</table>
							</div>
							
							<div class="sv-button-holder clearfix">
										<button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
										<button type="button" class="btn btn-success" onclick="window.location.href='stationary.php' "><i class="fa fa-eye"></i> View Products</button>
										
									</div>
									
								</form>	
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