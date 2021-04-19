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
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                 <?php 
                                    error_reporting(0);
                                    session_start();   
                                        
                                    include('db_connect.php'); 
                                        
                                    
                                    $uname=$_SESSION["govtuser"];
                                    $sq="SELECT * FROM GOVT_USER WHERE govt_user_username='$uname'";
                                    $result=mysqli_query($conn,$sq);
                                    $row=mysqli_fetch_array($result);
                                    $govt_user_id=$row["govt_user_id"];
                                    $totals=0;    
                                    $sql="SELECT * FROM order_details od, govt_user gu, product_details pd where od.govt_user_id=gu.govt_user_id and od.product_details_id=pd.product_details_id and gu.govt_user_id='$govt_user_id' and od.order_details_status='cartinsert'";
					                $result=mysqli_query($conn,$sql);					               
                                   /* $data =array();*/
                                        if(mysqli_num_rows($result)>0)
                                  {
					               while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
					               {
                                    
                                     $totals+=$row['order_details_total'];
                                    //$id=$row['hotel_owner_details_id'];
                                     $order_details_id=$row['order_details_id'];
                                     $order_details_status=$row['order_details_status'];
                                                                           
                                    ?>                                      
                                        <tr align="left">
                                            <td>
                                                <a href="#">
                                                    <img src="../admin/images/<?php echo $row['product_details_image'];?>" width="100" height="100">
                                                </a>
                                            </td>
                                            <td><?php echo $row['product_details_name'];?></td> 
                                            
                                            <form action="cart_quantity.php" method="post">
                                            
                                            <input type="hidden" name="order_details_id" id="order_details_id" value="<?php echo $row['order_details_id'];?>" size="1" class="form-control">
                                            
                                            <input type="hidden" name="order_details_price" id="order_details_price" value="<?php echo $row['order_details_price'];?>" size="1" class="form-control">
                                            
                                            <td align="left">
                                            
                                            <input type="text" name="order_details_quantity" id="order_details_quantity" value="<?php echo $row['order_details_quantity'];?>" size="1" class="form-control">
                                            
                                            </td>             
                                            <td align="left"><?php echo $row['order_details_price'];?></td>
                                            <td align="left"><?php echo $row['order_details_total'];?></td>
                                            <td>
                                            <button type="button" onclick="window.location.href='cart_delete.php?id=<?php echo $row['order_details_id'];?>' " class="btn btn-success"><i class="fa fa-trash-o"></i></button>
                                           <!-- <a href="cart_delete.php?id=<?php // echo $row['customer_order_id'];?>"><i class="fa fa-trash-o"></i></a>-->
                                            
                                            <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                            </td>
                                           
                                            
                                            </form>
                                        </tr>
                                    <?php 
                                    }
                                    
                                    ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" align="right">Total</td>
                                            <td colspan="2"><b><?php echo $totals; ?></b></td>
                                        </tr>
                                    </tfoot>
                                    <?php
                                        } else
                                           {
                                        ?>
                                        <tr>
                                            <td colspan="6" align="center"><h2><b>Cart Is Empty...!</b></h2></td>
                                            
                                        </tr>
                                        
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
						<div class="main-block1">
                                    <!--<div class="sidebar-title white-txt">
                                        <h6><b>Order Summary</b></h6></div> -->
                                        
                                      <?php
                                        $cgst=($totals*(9/100));                    
                                        $sgst=($totals*(9/100));
                                        $total_tax=($cgst+$sgst);
                                        $del="0";
                                        $total_amount=($totals+$cgst+$sgst+$del); 
                                    ?>  
                                    
                                          
                            <div class="table-responsive">
                            <h3 style="padding-bottom:1px;"><b>Order Summary</b></h3>
                            <table class="table">
                                <tbody>
                                   
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th>&#x20B9; <?php echo $totals?></th>
                                    </tr>
                                    <tr>
                                        <td>CGST @9%</td>
                                        <th>&#x20B9; <?php echo $cgst;?></th>
                                    </tr>
                                    <tr>
                                        <td>SGST @9%</td>
                                        <th>&#x20B9; <?php echo $sgst;?></th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>&#x20B9; <?php echo $total_amount;?></th>
                                        
                            
                                        
                                    </tr>
                                    
                                    <tr>
                                      <th>
                                       <a href="stationary.php"class="btn btn-success">Continue Order...</a>
                                        
                                      </th>
                                      <?php if(mysqli_num_rows($result)>0)
                                { ?>
                                       <th>
                                       <a href="order_cart_update.php?govt_user_id=<?php echo $govt_user_id;?>&order_details_id=<?php echo $order_details_id;?>&sgst=<?php echo $sgst;?>&cgst=<?php echo $cgst;?>&total=<?php echo $total_amount;?>&order_details_status=<?php echo $order_details_status; ?>"class="btn btn-success">Place Order</a>
                                        
                            </th>
                                 <?php
                                }
                                        else
                                        {  ?>
                                            <th></th>
                                            <?php
                                        }
                                        ?>
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