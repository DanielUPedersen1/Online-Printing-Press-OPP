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
                            <h3 class="box-title m-b-0"><b>Edit Admin Details</b></h3><br>
                            <!--<p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>-->
                            
                            <?php 

 require("db_connect.php"); 

 $admin_id=$_REQUEST['id'];

//echo $id;

$sql="select * from admin where admin_id='$admin_id'";

$result = mysqli_query($conn,$sql);

//$count=1;

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
                           
                            <form class="form-horizontal" name="admin_form" id="admin_form" action="admin_update.php" method="post" enctype="multipart/form-data" novalidate>
                               
                               <input type="hidden" placeholder="Admin_id" value="<?php echo $row['admin_id']; ?>" name="admin_id" id="admin_id" required="required" />
                               
                                <div class="form-group item">
                                    <label class="col-md-12">NAME</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="Admin_name" name="admin_name" id="admin_name" required="required" value="<?php echo $row['admin_name']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group item">
                                    <label class="col-md-12">ADDRESS</label>
                                    <div class="col-md-12">
                                        <textarea placeholder="Admin_address" class="form-control" name="admin_address" id="admin_address" required="required"><?php echo $row['admin_address']; ?></textarea>
                                    </div>
                                </div>
                                 <div class="form-group item">
                                    <label class="col-md-12">CONTACT</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Admin_contact" class="form-control" pattern="mob" name="admin_contact" id="admin_contact" required="required" value="<?php echo $row['admin_contact']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group item">
                                    <label class="col-md-12">EMAIL</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Admin_email" class="form-control" pattern="email" name="admin_email" id="admin_email" required="required" value="<?php echo $row['admin_email']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group item">
                                    <label class="col-md-12">DESIGNATION</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Admin_designation" class="form-control" pattern="alpha" name="admin_designation" id="admin_designation" required="required" value="<?php echo $row['admin_designation']; ?>"  />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">GENDER</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Admin_gender" class="form-control" pattern="alpha" name="admin_gender" id="admin_gender" required="required"  value="<?php echo $row['admin_gender']; ?>" />
                                    </div>
                                </div>
                               <div class="form-group item">
                                    <label class="col-md-12">BANK NAME</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Admin_bankname" class="form-control" pattern="alpha" name="admin_bankname" id="admin_bankname" required="required" value="<?php echo $row['admin_bankname']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group item">
                                    <label class="col-md-12">IFSC</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Admin_ifsc" class="form-control" pattern="alphanumeric" name="admin_ifsc" id="admin_ifsc" required="required" value="<?php echo $row['admin_ifsc']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group item">
                                    <label class="col-md-12">ACCOUNT NO</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Admin_accno" class="form-control" pattern="alphanumeric" name="admin_accno" id="admin_accno" required="required" value="<?php echo $row['admin_accno']; ?>" />
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>
                               <input type="button" name="button" class="btn btn-primary" id="button" value="Cancel" onclick="window.location.href='admin_view.php'" />                               
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


