<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('meta.php');?>
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
<?php include('nav.php');?>
        <!-- End Top Navigation -->
<?php include('leftnewbar.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Customer</h4>
                    </div>
                    <!--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Ui Elements</a></li>
                            <li class="active">Notifications</li>
                        </ol>
                    </div>-->
                    <!-- /.col-lg-12 -->
                </div>

                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"><b>Enter Customer Order details</b></h3><br>
                            <!--<p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>-->


<form name="customer_order_form" id="customer_order_form" action="customer_order_insert.php" method="post" enctype="multipart/form-data" novalidate>



                                    <div class="form-group item">
                                    <label class="col-md-12">product_details_id</label>
                                    <div class="col-md-12">
                                    
                                     <?php
                                require('db_connect.php');       
                              $sql = "SELECT * FROM product_details";
                              $res=mysqli_query($conn,$sql);
                                 ?>
                                 
                                <select name="product_details_id" id="product_details_id" class="form-control" required="required">
                                 <option value="">--Select Value--</option>
                                <?php
                             while ($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
                            { ?>
                            
                   <option value="<?php echo $row['product_details_id']; ?>"><?php echo $row['product_details_name']; ?></option>
               
                   <?php
             
                    } ?>
            </select>   
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">Customer_details_id</label>
                                    <div class="col-md-12">
                                     <?php
                                require('db_connect.php');       
                              $sql1 = "SELECT * FROM customer_details";
                              $res1=mysqli_query($conn,$sql1);
                                 ?>
                                <select name="customer_details_id" id="customer_details_id" class="form-control" required="required">
                                 <option value="">--Select Value--</option>
                                <?php
                             while ($row1= mysqli_fetch_array($res1,MYSQLI_ASSOC))
                            { ?>
                            
                   <option value="<?php echo $row1['customer_details_id']; ?>"><?php echo $row1['customer_details_name'];?></option>
               
                   <?php
             
                    } ?>
            </select>          
         </div>
        </div>
                                    <div class="form-group item">
                                    <label class="col-md-12">QUANTITY</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="Customer_order_quantity" name="Customer_order_quantity" id="Customer_order_quantity" required="required"  />
                                    </div>
                                    </div>
                                   
                                   <div class="form-group item">
                                    <label class="col-md-12">PRICE</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Customer_order_price" pattern="numeric" name="customer_order_price" id="Customer_order_price" required="required"  />
                                    </div>
                                   </div>
                                   
                                   <div class="form-group item">
                                    <label class="col-md-12">TOTAL</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Customer_order_total" pattern="numeric" name="customer_order_total" id="customer_order_total" required="required"  />
                                    </div>
                                   </div>
                                   
                                   <div class="form-group item">
                                    <label class="col-md-12">SGST</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Customer_order_sgst" pattern="numeric" name="customer_order_sgst" id="customer_order_sgst" required="required"  />
                                    </div>
                                   </div>
                            
                                    <div class="form-group item">
                                    <label class="col-md-12">CGST</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Customer_order_cgst" pattern="numeric" name="customer_order_cgst" id="customer_order_cgst" required="required"  />
                                    </div>
                                   </div>
                                   
                                   <div class="form-group item">
                                    <label class="col-md-12">FINAL AMOUNT</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Customer_order_finalamount" pattern="numeric" name="customer_order_finalamount" id="customer_order_finalamount" required="required" />
                                    </div>
                                   </div>
                                   
                                   <div class="form-group item">
                                    <label class="col-md-12">ORDER DATE</label>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control" placeholder="Customer_order_date" name="customer_order_date" id="customer_order_date" required="required"  />
                                    </div>
                                   </div>
                                  
                                  <div class="form-group item">
                                    <label class="col-md-12">STATUS</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Customer_order_status" pattern="alpha" name="customer_order_status" id="customer_order_status" required="required" >
                                    </div>
                                   </div> 
                                   
                               <button type="submit" class="btn btn-primary">Save</button>
                               <input type="reset" name="reset" class="btn btn-primary" id="reset" value="Reset" />
                               <input type="button" name="button" class="btn btn-primary" id="button" value="Cancel" onclick="window.location.href='customer_order_view.php'" />                               
                        </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <?php include('footer.php');?>
    <?php include('valid.php');?>
</body>


</html>




