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
                            <h3 class="box-title m-b-0"><b>Enter Product Category Details</b></h3><br>
                            <!--<p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>-->


<form name="product_category_form" id="product_category_form" action="product_category_insert.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>

                                <div class="form-group item">
                                    <label class="col-md-12">NAME</label>
                                    <div class="col-md-12">
                                        <input type="text" pattern="alpha" class="form-control" placeholder="product_category_name" name="product_category_name" id="product_category_name" required="required"  />
                                    </div>
                                    </div>
                                    
                                <br><br>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">DESCRIPTION</label>
                                    <div class="col-md-12">
                                        <input type="text" pattern="alpha" placeholder="Product_category_description" name="product_category_description" id="product_category_description" required="required" class="form-control" />        
                                </div>
                                </div>


                               <button type="submit" class="btn btn-primary">Save</button>
                               <input type="reset" name="reset" class="btn btn-primary" id="reset" value="Reset" />
                               <input type="button" name="button" class="btn btn-primary" id="button" value="Cancel" onclick="window.location.href='product_category_view.php'" />                               
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




