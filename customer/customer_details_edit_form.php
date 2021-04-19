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
                            <h3 class="box-title m-b-0"><b>Edit customer Details</b></h3><br>
                            <!--<p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>-->
                            


<?php 

require("db_connect.php"); 

$customer_details_id=$_REQUEST['id'];

//echo $id;

$sql="select * from customer_details where customer_details_id='$customer_details_id'";

$result = mysqli_query($conn,$sql);

//$count=1;

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<form action="customer_details_update.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
<input type="hidden" placeholder="Customer_details_id" value="<?php echo $row['customer_details_id'] ; ?>" name="customer_details_id" id="customer_details_id" required="required"  />

                                    <div class="form-group item">
                                    <label class="col-md-12">NAME</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="customer_details_name" name="customer_details_name" id="customer_details_name" required="required" value="<?php echo $row['customer_details_name']; ?>" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">CONTACT</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="mob" placeholder="customer_details_contact" name="customer_details_contact" id="customer_details_contact" required="required" value="<?php echo $row['customer_details_contact']; ?>" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">ADDRESS</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" placeholder="customer_details_address" name="customer_details_address" id="customer_details_address" required="required" value="<?php echo $row['customer_details_address']; ?>" />
                                    </div>
                                    </div>
                                    
                                    <div class="form-group item">
                                    <label class="col-md-12">EMAIL</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="email" placeholder="customer_details_email" name="customer_details_email" id="customer_details_email" required="required" value="<?php echo $row['customer_details_email']; ?>" />
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                               <input type="button" name="button" class="btn btn-primary" id="button" value="Cancel" onclick="window.location.href='customer_details_view.php'" />                               
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






