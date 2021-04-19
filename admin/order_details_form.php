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
                        <h4 class="page-title">Enter Order Details</h4>
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
                            <h3 class="box-title m-b-0"><b>Enter order Details</b></h3><br>
                            <!--<p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>-->

<form name="order_details_form" id="order_details_form" action="order_details_insert.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
                                
<div class="form-group item">
<label class="col-md-12">Product_details_id</label>
<div class="col-md-12">
<?php               require('db_connect.php');
                    $sql = "SELECT * FROM product_details"; 
                    $res = mysqli_query($conn,$sql); 
            ?>

                        <select name="product_details_id" id="product_details_id" class="form-control" required="required">
            
            <option value="">--Select value--</option>
            
            <?php
                
             while ($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
             {
                ?>
                
                
               <option value="<?php echo $row['product_details_id']; ?>"><?php echo $row['product_details_name']; ?></option>
               
                    
            <?php
             
             }
                  ?>
                  
            </select>
            </div>
           </div>
           
  <div class="form-group item">
<label class="col-md-12">Govt_user_id</label>
<div class="col-md-12">
<?php                require('db_connect.php');
                    $sql1 = "SELECT * FROM govt_user"; 
                    $res1 = mysqli_query($conn,$sql1); 
            ?>

                        <select name="govt_user_id" id="govt_user_id" class="form-control" required="required">
            
            <option value="">--Select value--</option>
            
            <?php
                
             while ($row1 = mysqli_fetch_array($res1,MYSQLI_ASSOC))
             {
                ?>
                
                
               <option value="<?php echo $row1['govt_user_id']; ?>"><?php echo $row1['govt_user_name']; ?></option>
               
                    
            <?php
             
             }
                  ?>
                  
            </select>
    </div>
    </div>
    
                                    <div class="form-group item">
                                    <label class="col-md-12">QUANTITY</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="numeric" placeholder="order_details_quantity" name="order_details_quantity" id="order_details_quantity" required="required"  />
                                    </div>
                                </div>     
                                
                                <div class="form-group item">
                                    <label class="col-md-12">QUALITY</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alphanumeric" placeholder="order_details_quality" name="order_details_quality" id="order_details_quality" required="required"  />
                                    </div>
                                </div>     
                                
                                <div class="form-group item">
                                    <label class="col-md-12">PRICE</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="numeric" placeholder="order_details_price" name="order_details_price" id="order_details_price" required="required"  />
                                    </div>
                                </div>     
                                
                                <div class="form-group item">
                                    <label class="col-md-12">TOTAL</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="numeric"  placeholder="order_details_total" name="order_details_total" id="order_details_total" required="required"  />
                                    </div>
                                </div>     
                                
                                <div class="form-group item">
                                    <label class="col-md-12">SGST</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="numeric" placeholder="order_details_sgst" name="order_details_sgst" id="order_details_sgst" required="required"  />
                                    </div>
                                </div>    
                                
                                 <div class="form-group item">
                                    <label class="col-md-12">CGST</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="numeric"  placeholder="order_details_cgst" name="order_details_cgst" id="order_details_cgst" required="required"  />
                                    </div>
                                </div>     
                                
                                 <div class="form-group item">
                                    <label class="col-md-12">FINAL AMOUNT</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="numeric" placeholder="order_details_finalamount" name="order_details_finalamount" id="order_details_finalamount" required="required"  />
                                    </div>
                                </div>       
                                
                                <div class="form-group item">
                                    <label class="col-md-12">REQUIRED DATE</label>
                                    <div class="col-md-12">
                                        <input type="date"  class="form-control" placeholder="order_details_reqdate" name="order_details_reqdate" id="order_details_reqdate" required="required"  />
                                    </div>
                                </div>   
                                   
                                <div class="form-group item">
                                    <label class="col-md-12">TODAY'S DATE</label>
                                    <div class="col-md-12">
                                        <input type="date"  class="form-control" placeholder="order_details_date" name="order_details_date" id="order_details_date" required="required"  />
                                    </div>
                                </div>        
                                
                                <div class="form-group item">
                                    <label class="col-md-12">STATUS</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="order_details_status" name="order_details_status" id="order_details_status" required="required"  />
                                    </div>
                                </div>        

                               <button type="submit" class="btn btn-primary">Save</button>
                               <input type="reset" name="reset" class="btn btn-primary" id="reset" value="Reset" />
                               <input type="button" name="button" class="btn btn-primary" id="button" value="Cancel" onclick="window.location.href='order_details_view.php'" />                               
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

