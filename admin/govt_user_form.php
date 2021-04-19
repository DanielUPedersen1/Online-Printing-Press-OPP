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
                        <h4 class="page-title">Government user</h4>
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
                            <h3 class="box-title m-b-0"><b>Enter Government User Details</b></h3><br>
                            <!--<p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>-->


<form  method="post" action="govt_user_insert.php" enctype="multipart/form-data" class="form-horizontal" novalidate>

                                <div class="form-group item">
                                    <label class="col-md-12">GOVT TYPE</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="Govt_type" name="govt_type" id="govt_type" required="required" />
                                    </div>
                                </div>
                                
                               <div class="form-group item">
                                    <label class="col-md-12"> GOVT USER NAME</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="alpha" placeholder="Govt_user_name" name="govt_user_name" id="govt_user_name" required="required"  />
                                    </div>
                                </div>
                            
                                <div class="form-group item">
                                    <label class="col-md-12">ADDRESS</label>
                                    <div class="col-md-12">
                                    <input type="text" placeholder="Govt_user_address"  name="govt_user_address" id="govt_user_address" required="required" class="form-control" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">CONTACT</label>
                                    <div class="col-md-12">
                                    <input type="text" pattern="mob" placeholder="Govt_user_contact" name="govt_user_contact" id="govt_user_contact" required="required" class="form-control"  />
                                    </div>
                                </div>
            
                                <div class="form-group item">
                                    <label class="col-md-12">EMAIL</label>
                                    <div class="col-md-12">
                                    <input type="text" pattern="email" placeholder="Govt_user_email"  name="govt_user_email" id="govt_user_email" required="required" class="form-control" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">DESIGNATION</label>
                                    <div class="col-md-12">
                        <input type="text" pattern="alpha" placeholder="Govt_user_designation"  name="govt_user_designation" id="govt_user_designation" required="required" class="form-control" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">LAND LINE</label>
                                    <div class="col-md-12">
                        <input type="text" placeholder="Govt_user_landline"  name="govt_user_landline" id="govt_user_landline" required="required" class="form-control" />
                                    </div>
                                </div>
                                
                               <button type="submit" class="btn btn-primary">Save</button>
                               <input type="button" name="button" class="btn btn-primary" id="button" value="Cancel" onclick="window.location.href='govt_user_view.php'" />                               
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


















