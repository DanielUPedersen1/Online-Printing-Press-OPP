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
                            <h3 class="box-title m-b-0"><b>Edit Delivery Details</b></h3><br>
                            <!--<p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>-->


<?php 

require("db_connect.php"); 

$delivery_details_id=$_REQUEST['id'];

//echo $id;

$sqlp="select * from delivery_details where delivery_details_id='$delivery_details_id'";

$resultp = mysqli_query($conn,$sqlp);

//$count=1;

$rowp=mysqli_fetch_array($resultp,MYSQLI_ASSOC);
?>

<form action="delivery_details_update.php" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
<input type="hidden" placeholder="delivery_details_id" value="<?php echo $rowp['delivery_details_id'] ; ?>" name="delivery_details_id" id="delivery_details_id" required="required"  />
                                   

            <div class="form-group item">
          <label class="col-md-12">Employee_id</label>
                  <div class="col-md-12">
               <?php                
                    require('db_connect.php');
                    $sql = "SELECT * FROM employee"; 
                    $res = mysqli_query($conn,$sql); 
                ?>

                        <select name="employee_id" id="employee_id" class="form-control" required="required">
            
            <option value="">--Select value--</option>
            
            <?php
                
             while ($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
             {
                ?>
                
                
               <option value="<?php echo $row['employee_id']; ?>"><?php echo $row['employee_fullname']; ?></option>
               
                    
            <?php
             
             }
                  ?>
                  
            </select>
         </div>
    </div>
                                
                                <div class="form-group item">
                                    <label class="col-md-12">DELIVERY DATE</label>
                                    <div class="col-md-12">
                                        <input type="date"  class="form-control" placeholder="delivery_date" name="delivery_date" id="delivery_date" required="required" value="<?php echo $rowp['delivery_date']; ?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group item">
<label class="col-md-12">Govt_user_id</label>
<div class="col-md-12">
<?php               
                    require('db_connect.php');
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
                                    <label class="col-md-12">LABOUR COST</label>
                                    <div class="col-md-12">
                                        <input type="text"  class="form-control" pattern="numeric" placeholder="labour_cost" name="labour_cost" id="labour_cost" required="required" value="<?php echo $rowp['labour_cost']; ?>" />
                                    </div>
                                </div>

<input type="submit" name="submit" class="btn btn-primary">
                               <input type="button" name="button" class="btn btn-primary" id="button" value="Cancel" onclick="window.location.href='delivery_details_view.php'" />                               
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
</body>

</html>


