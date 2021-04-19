<!DOCTYPE html>
<html lang="en">

<?php require('meta.php');?> <!-- meta data included-->

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <?php require('nav.php'); ?>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        
        <?php require('leftnewbar.php'); ?>
        
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Govt user Order Details</h4>
                    </div>
                    <!--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data Table</li>
                        </ol>
                    </div>-->
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                           <!--<button type="button" onclick="window.location.href='admin_form.php'" class="btn btn-primary">New</button><br><br>-->
                            <!--<h3 class="box-title m-b-0">Admin Details</h3>-->
                            <!--<p class="text-muted m-b-30">Data table example</p>-->
                            <div class="table-responsive">
                                
                               <?php

require("db_connect.php");
//session_start();
                                
//$name=$_SESSION['uname'];
//$sql="select * from admin where admin_username='$name'";
//$res=mysqli_query($conn,$sql);
//$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
//$admin_id=$row['admin_id']; 
                                
//$status="Pending";
                                
$sql="select * from bill_details,govt_user where bill_details.bill_details_status!='Delivered' and bill_details.govt_user_id=govt_user.govt_user_id ";
                                
$result=mysqli_query($conn,$sql);

//$row=mysqli_fetch_array($result);
                                
//$order_details_id=$row['order_details_id'];                               


?>
<table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <td><b>Sl No.</b></td>
                                            <td><b>Govt User Name</b></td>   
                                            <td><b>Contact No.</b></td> 
                                            <td><b>Bill Status</b></td>      
                                            <td><b>View Products</b></td>                                         
                                            <td><b>Generate bill</b></td>
                                            <td><b>Delivery</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 

$sl=1;

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
?>

<tr>
<td> <?php echo $sl++; ?></td>
<td> <?php echo $row['govt_user_name']; ?></td>
<td><?php echo  $row['govt_user_contact']; ?></td>


<?php  if($row['bill_details_status']=='Pending')
    
{
    ?>
   <td> <a href="govt_bill_update.php?id=<?php echo $row['bill_details_id'];?>&status=<?php echo $row['order_delivery_status'];?>&o=<?php echo $row['bill_details_no'];?>" style="color:red;"><?php echo $row['bill_details_status'];?></a></td>
    
<?php 
}
 else
 {
    ?>
     <td style="color:green;"><?php echo $row['bill_details_status'];?></td>
 <?php 
 }
 
 ?>


<td><a href="viewgproducts.php?id=<?php echo $row['govt_user_id'];?>&o=<?php echo $row['bill_details_no'];?>">View Products</a></td>


<td><a href="generateg_bill.php?id=<?php echo $row['govt_user_id'];?>&d=<?php echo $row['bill_details_date'];?>&o=<?php echo $row['bill_details_no'];?>" >Click</a></td>

<?php if($row['order_delivery_status']=='Pending')
 
 {
    ?>

<td> <a href="govt_user_delivery.php?id=<?php echo $row['bill_details_id'];?>&id1=<?php echo $row['govt_user_id'];?>" style="color:red;">Pending</a></td>

<?php 
 }
 else
 {
    ?>
     <td style="color:green;"><?php echo $row['order_delivery_status'];?></td>
 <?php 
 }
 ?>


<!--<td><a href='customer_order_delete.php?id=<?php //echo $row['customer_order_id'];?>' onClick="return confirm('Do You Really Want To Delete ?')">Delete</a></td>--->
</tr>
<?php
}
?>

</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    
    <?php require('footer.php');?>
    
</body>

</html>






