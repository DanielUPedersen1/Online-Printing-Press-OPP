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
                            <h3 class="box-title m-b-0"><b>Edit Form Details</b></h3><br>
                            <!--<p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>-->

<?php 

require("db_connect.php"); 

$form_details_id=$_REQUEST['id'];

//echo $id;

$sql="select * from form_details where form_details_id='$form_details_id'";

$result = mysqli_query($conn,$sql);

//$count=1;

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<form action="form_details_update.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
<input type="hidden" placeholder="Form_details_id" value="<?php echo $row['form_details_id'] ; ?>" name="form_details_id" id="form_details_id" required="required"  />

                              <div class="form-group item">
                                    <label class="col-md-12">NAME</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="form_details_name" name="form_details_name" id="form_details_name" required="required" value="<?php echo $row['form_details_name']; ?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">CODE</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alphanumeric" placeholder="form_details_code" name="form_details_code" id="form_details_code" required="required" value="<?php echo $row['form_details_code']; ?>" />
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Save</button>
                               <input type="button" name="button" class="btn btn-primary" id="button" value="Cancel" onclick="window.location.href='form_details_view.php'" />                               
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




