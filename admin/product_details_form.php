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
                        <h4 class="page-title">Admin</h4>
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
                            <h3 class="box-title m-b-0"><b>Enter Product Details</b></h3><br>
                            <!--<p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>-->


        <form name="product_details_form" id="product_details_form" action="product_details_insert.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>

                                    <div class="form-group item">
                                    <label class="col-md-12">Product_category_id</label>
                                    <div class="col-md-12">
                                     <?php
                                require('db_connect.php');       
                              $sql="SELECT * FROM product_category";
                              $res=mysqli_query($conn,$sql);
                                 ?>
                                <select name="product_category_id" id="product_category_id" class="form-control" required>
                                 <option value="">--Select Value--</option>
                                <?php
                             while ($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
                            { ?>
                            
                   <option value="<?php echo $row['product_category_id']; ?>"><?php echo $row['product_category_name']; ?></option>
               
                   <?php
             
                    } ?>
            </select>   
                                        
                                    </div>
                                </div>
                                
                        <div class="form-group item">                 
                        <label class="col-md-12">Form_details_id</label>
                        <div class="col-md-12">
                        <?php
                        require('db_connect.php'); 
                        $sql1="SELECT * FROM form_details";
                        $res1=mysqli_query($conn,$sql1);
                         ?>
                     <select name="form_details_id" id="form_details_id" class="form-control">
                     <option value="">--Select Value--</option>
    <?php
    while ($row1 = mysqli_fetch_array($res1,MYSQLI_ASSOC))
             {
                ?>
                
                
               <option value="<?php echo $row1['form_details_id']; ?>"><?php echo $row1['form_details_name']; ?></option>
               
                    
            <?php
             
             }
                  ?>
                  
            </select>
            </div>
            </div>                  
                                <div class="form-group item">
                                    <label class="col-md-12">NAME</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="product_details_name" name="product_details_name" id="product_details_name" required="required"  />
                                    </div>
                                </div>     
                                
                                    <div class="form-group item">
                                    <label class="col-md-12">QUANTITY</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="numeric" placeholder="product_details_quantity" name="product_details_quantity" id="product_details_quantity" required="required"  />
                                    </div>
                                </div>      
                                
                                     <div class="form-group item">
                                    <label class="col-md-12">DESCRIPTION</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="product_details_description" name="product_details_description" id="product_details_description" required="required"  />
                                    </div>
                                </div>                        
                                
                                    <div class="form-group item">
                                    <label class="col-md-12">PRICE</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="numeric" placeholder="product_details_price" name="product_details_price" id="product_details_price" required="required"  />
                                    </div>
                                </div>   
                                                    
                                <div class="form-group item">
                                    <label class="col-md-12">IMAGE</label>
                                    <div class="col-md-12">
                                        <input type="file"  class="form-control" placeholder="product_details_image" name="product_details_image" id="product_details_image" required="required"  />
                                    </div>
                                </div>                      
                               <button type="submit" class="btn btn-primary">Save</button>
                               <input type="reset" name="reset" class="btn btn-primary" id="reset" value="Reset" />
                               <input type="button" name="button" class="btn btn-primary" id="button" value="Cancel" onclick="window.location.href='product_details_view.php'" />                               
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




