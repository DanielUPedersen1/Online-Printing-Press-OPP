<!DOCTYPE html>
<html lang="en">

<?php require('meta.php');?> <!-- meta data included-->

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <?php require('nav.php'); ?>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        
        <?php require('leftnewbar.php'); ?>
        
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Customer Order Details</h4>
                    </div>
                    <!--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data Table</li>
                        </ol>
                    </div>-->
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                           <button type="button" onclick="window.location.href='order_details_view.php'" class="btn btn-primary">Back</button><br><br>
                            <!--<h3 class="box-title m-b-0">Admin Details</h3>-->
                            <!--<p class="text-muted m-b-30">Data table example</p>-->
                            <div class="table-responsive">


                        <?php require('db_connect.php');
                                
                         $customer_details_id=$_REQUEST['id'];
                                $customer_order_no=$_REQUEST['o'];
                                
                    $sql="select * from order_details co,product_details pd  where co.govt_user_id='$customer_details_id' and co.product_details_id=pd.product_details_id  and co.order_details_status='orderplaced' and co.order_details_no='$customer_order_no' ";
                    $res=mysqli_query($conn,$sql);
                   // $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
                   //// $sgst=$row['customer_order_sgst'];
                    //$cgst=$row['customer_order_cgst'];           
                    //$finalamount=$row['customer_order_finalamount'];
                                
                $sql1="select * from govt_user where govt_user_id='$customer_details_id' ";
                                
                    $res1=mysqli_query($conn,$sql1);
                    $row1 = mysqli_fetch_array($res1,MYSQLI_ASSOC);
          ?>



                             <table id="myTable1" class="table table-striped table-bordered">
                                  <thead>
                                        <tr align="center">
                                           
                                            <td colspan="5"><b>Govt. User Details</b></td>
                                            
                                        </tr>
                                   
                                        <tr>
                                           
                                            <td><b>Govt. User Name</b></td>
                                            <td><?php echo $row1['govt_user_name']; ?></td>         
                                            <td><b>Address</b></td>                                            
                                            <td colspan="2"><?php echo $row1['govt_user_address']; ?></td>
                                            
                                            
                                        </tr>
                                        <tr>
                                           
                                            <td><b>Contact No.</b></td>
                                            <td><?php echo $row1['govt_user_contact']; ?></td>         
                                            <td><b>Email ID</b></td>                                            
                                            <td colspan="2"><?php echo $row1['govt_user_email']; ?></td>
                                            
                                            
                                        </tr>
                                        <tr>
                                           
                                            <td><b>Department</b></td>
                                            <td colspan="4"><?php echo $row1['govt_type']; ?></td>         
                                            
                                            
                                            
                                        </tr>
                                        <tr align="center">
                                           
                                            <td colspan="5"><b>Order Details</b></td>
                                            
                                        </tr>
                                   
                                        <tr>
                                           
                                            <td><b>SLNO</b></td>
                                            <td><b>Product Name</b></td>         
                                            <td><b>Quantity</b></td>                                            
                                            <td><b>Price</b></td>
                                            <td><b>Total</b></td>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
 <?php 

$sl=1;
$totals=0;
while($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
{
    $totals=$totals+$row['order_details_total'];
?>
     
<tr>
<td> <?php echo $sl++; ?></td>
<td> <?php echo $row['product_details_name'];?></td>
<td> <?php echo $row['order_details_quality'];?></td>
<td> <?php echo $row['order_details_price'];?></td>
<td> <b><?php echo $row['order_details_total'];?></b></td>
</tr>

<?php
}
?>
<tr>
<td colspan="4" align="right">Subtotal</td>

<td> <b><?php echo $totals;?></b></td>
</tr>

</tbody>

</table> <!-- div starts-->
                          <?php require('db_connect.php');
                                
                         $customer_details_id=$_REQUEST['id'];
                                
                    $sql1="select * from order_details co,product_details pd  where co.govt_user_id='$customer_details_id' and co.product_details_id=pd.product_details_id  and co.order_details_status='orderplaced' and co.order_details_no='$customer_order_no'";
                                
                    $res1=mysqli_query($conn,$sql1);
                    $row1=mysqli_fetch_array($res1,MYSQLI_ASSOC);
                    $customer_order_total=$row1['order_details_total'];
                    $sgst=$row1['order_details_sgst'];
                    $cgst=$row1['order_details_cgst'];           
                    $finalamount=$row1['order_details_finalamount'];
          ?>
                           <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                   <tr>
                                        <td colspan="2"><b>Order Summary</b></td>
                                        
                                    </tr>
                                      
                                      <tr>                                  
                                        <td>Sub Total</td> 
                                        <?php if(mysqli_num_rows($res1)>0)
                                { ?>
                                        <th><b>&#x20B9;   <?php echo $totals; ?></b></th>
                                        <?php }
                                          else
                                          {?> 
                                          <th>0</th>
                                          <?php
                                          }?>
                                    </tr>

                                      <tr>                                  
                                        <td>CGST @ 9%</td>
                                        <?php if(mysqli_num_rows($res1)>0)
                                { ?>
                                        <th><b>&#x20B9;   <?php echo $sgst; ?></b></th>
                                        <?php }
                                          else
                                          {?> 
                                          <th>0</th>
                                          <?php
                                          }?>
                                    </tr>
                                    
                                    <tr>
                                        <td>SGST @ 9%</td>
                                        <?php if(mysqli_num_rows($res1)>0)
                                { ?>
                                        <th><b>&#x20B9;   <?php echo $cgst; ?></b></th>
                                        <?php }
                                          else
                                          {?> 
                                          <th>0</th>
                                          <?php
                                          }?>
                                    </tr>
                                    
                                    <tr class="total">
                                        <td>Final Total</td>
                                        <?php if(mysqli_num_rows($res1)>0)
                                { ?>
                                        <th><b>&#x20B9;   <?php echo $finalamount;?></b></th> 
                                        <?php }
                                          else
                                          {?> 
                                          <th>0</th>
                                          <?php
                                          }?>
                                    </tr>
                                                              
                             </tbody>
                             
                            </table>
                        </div>
 <!--- div ends--->
                           
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <?php require('footer_name.php'); ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    
    <?php require('footer.php');?>
    
</body>

</html>






