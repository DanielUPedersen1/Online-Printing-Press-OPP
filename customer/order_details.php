<!DOCTYPE html>
<html>

<head lang="en">
	<?php require('1_metatags.php'); ?>

</head>

<body>
	<header id="header" class="">
			
		<?php require('2_header.php'); ?>
		</header>
		<!-- header -->
		<nav class="navbar">
			<?php require('3_navbar.php'); ?>
		</nav>
		<!-- /nav -->
	
	<div id="content" class="site-content">
		<div class="container">
			<div class="row sv-nopadding">
				<div class="col-md-8 col-sm-7 col-xs-12 main-content sv-product-page">
					<div class="sv-product-top clearfix">		
						<div class="col-md-12 col-xs-12 sv-product-image-holder">
							<div class="sv-product-img sv-product-wrapper"> <!-- empty page starts -->
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr align="left">
                                            <th>Image</th>                                            
                                            <th>Name</th> 
                                            <th>Quantity</th>                                             
                                            <th>Price</th>                                            
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    error_reporting(0);
                                    session_start();   
                                        
                                    include('db_connect.php');
                                   
                                    $uname=$_SESSION["uname2"];
                                    $sq="SELECT * FROM CUSTOMER_DETAILS WHERE customer_details_username='$uname'";
                                    $result=mysqli_query($conn,$sq);
                                    $row=mysqli_fetch_array($result);
                                    $cust_id=$row["customer_details_id"];
                                    $totals=0;    
                                    $sql="SELECT * FROM customer_order co, customer_details cd, product_details pd where co.customer_details_id=cd.customer_details_id and co.product_details_id=pd.product_details_id and cd.customer_details_id='$cust_id' and co.customer_order_status!='1'";
					                $result=mysqli_query($conn,$sql);					               
                                   /* $data =array();*/

                              if(mysqli_num_rows($result)>0)
                                {
                                  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
					               {
                                    
                                     $totals+=$row['customer_order_total'];
                                    //$id=$row['hotel_owner_details_id'];
                                     $cust_order_id=$row['customer_order_id'];
                                     $cust_order_status=$row['customer_order_status'];
                                                                           
                                    ?>        
                                  <tr align="left">
                                            <td>
                                                <a href="#">
                                                    <img src="../admin/photos/<?php echo $row['product_details_image'];?>" width="55" height="55">
                                                </a>
                                            </td>
                                            <td><?php echo $row['product_details_name'];?></td> 
                                            <td align="left"><?php echo $row['customer_order_quantity'];?></td>             
                                            <td align="left"><?php echo $row['product_details_price'];?></td>
                                            <td align="left"><?php echo $row['customer_order_total'];?></td>
                                            <?php 
                                                
                                                if($cust_order_status=='Pending') 
                                                {
                                                    
                                                    ?>
                                                    <td align="left"><h5 style="color:red;" ><b><?php echo $row['customer_order_status'];?></b></h5></td>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                      <td align="left"><h5 style="color:chartreuse;" ><b><?php echo $row['customer_order_status'];?></b></h5></td>
                                                    <?php
                                                } ?>
                                            
                                            
                                            
                                        </tr>
                                    <?php 
                                    }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" align="right">Total</td>
                                            <td colspan="2"><?php echo $totals; ?></td>
                                        </tr>
                                    </tfoot>
                                    <?php
                              }
                                        ?>
                            </table>

                            </div>
                        
							</div>
						</div>				
					
					</div>

				</div>
				<div class="col-md-4 col-sm-5 col-xs-12">
					<aside class="sidebar">
					<!--- side bar starts-->
						<div class="main-block">
                                  <!--  <div class="sidebar-title white-txt">
                                        <h6><b>Order Summary</b></h6></div> -->
                                        
                                      <?php
                                        $cgst=($totals*6/100);                    
                                        $sgst=($totals*6/100);
                                        $total_tax=($cgst+$sgst);
                                        $del="0";
                                        $total_amount=($totals+$cgst+$sgst+$del); 
                                    ?>  
                                    
                                          
                            <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                   <tr>
                                        <td colspan="2" ><h6><b>Order Summary</b></h6></td>
                                        
                                    </tr>

                                    <tr>
                                        <td>Order subtotal</td>
                                        <th>&#x20B9; <?php echo $totals?></th>
                                    </tr>
                                    <tr>
                                        <td>CGST @6%</td>
                                        <th>&#x20B9; <?php echo $cgst;?></th>
                                    </tr>
                                    
                                    <tr>
                                        <td>SGST @6%</td>
                                        <th>&#x20B9; <?php echo $sgst;?></th>
                                    </tr>
                                    
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>&#x20B9; <?php echo $total_amount;?></th> 
                                    </tr>                     
                             </tbody>
                             
                            </table>
                        </div>

                                    <div class="clearfix"></div>
                                </div>
                     <!--- sidebar ends--->
						
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