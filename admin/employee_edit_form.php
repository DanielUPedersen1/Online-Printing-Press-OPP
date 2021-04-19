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
                            <h3 class="box-title m-b-0"><b>Edit Employee Details</b></h3><br>
                            <!--<p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>-->

<?php 

require("db_connect.php"); 

$employee_id=$_REQUEST['id'];

//echo $id;

$sql="select * from employee where employee_id='$employee_id'";

$result = mysqli_query($conn,$sql);

//$count=1;

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<form action="employee_update.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
<input type="hidden" placeholder="employee_id" value="<?php echo $row['employee_id'] ; ?>" name="employee_id" id="employee_id" required="required"  />

                                    <div class="form-group item">
                                    <label class="col-md-12">FULLNAME</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha"  placeholder="employee_fullname" name="employee_fullname" id="employee_fullname" required="required" value="<?php echo $row['employee_fullname']; ?>" />
                                    </div>
                                </div>
                                
                          <div class="form-group item">
                                    <label class="col-md-12">DESIGNATION</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="employee_designation" name="employee_designation" id="employee_designation" required="required" value="<?php echo $row['employee_designation']; ?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">GENDER</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="employee_gender" name="employee_gender" id="employee_designation" required="required" value="<?php echo $row['employee_gender']; ?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">AGE</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="numeric" placeholder="employee_age" name="employee_age" id="employee_age" required="required" value="<?php echo $row['employee_age']; ?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">CONTACT</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="mob" placeholder="employee_contact" name="employee_contact" id="employee_contact" required="required" value="<?php echo $row['employee_contact']; ?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">BANK NAME</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="employee_bankname" name="employee_bankname" id="employee_bankname" required="required" value="<?php echo $row['employee_bankname']; ?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">IFSC</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alphanumeric" placeholder="employee_ifsc" name="employee_ifsc" id="employee_ifsc" required="required" value="<?php echo $row['employee_ifsc']; ?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">ACCNO</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alphanumeric" placeholder="employee_accno" name="employee_accno" id="employee_accno" required="required" value="<?php echo $row['employee_accno']; ?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">SALARY</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="numeric" placeholder="employee_salary" name="employee_salary" id="employee_salary" required="required" value="<?php echo $row['employee_salary']; ?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">ADDRESS</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" placeholder="employee_address" name="employee_address" id="employee_address" required="required" value="<?php echo $row['employee_address']; ?>" />
                                    </div>
                                </div>


                               <button type="submit" class="btn btn-primary">Save</button>
                               <input type="button" name="button" class="btn btn-primary" id="button" value="Cancel" onclick="window.location.href='employee_view.php'" />                               
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