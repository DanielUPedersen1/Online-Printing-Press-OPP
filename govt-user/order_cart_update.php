<?php 
   
require('db_connect.php'); 
$govt_user_id=$_REQUEST['govt_user_id'];
$order_details_id=$_REQUEST['order_details_id'];
$sgst=$_REQUEST['sgst'];
$cgst=$_REQUEST['cgst'];
$total=$_REQUEST['total'];
//$status=$_REQUEST['customer_order_status'];
$status="orderplaced";
$status1="Pending";
$govt_bill_date=date('d-m-Y');

$start = 'GPP';
$characters = array_merge(range('0','9'));
for ($i = 0; $i < 6; $i++) {
    $rand = mt_rand(0, count($characters)-1);
    $start .= $characters[$rand];
}

$sql = "UPDATE `order_details` SET 
 `order_details_sgst`=$sgst,
 `order_details_cgst`=$cgst,
 `order_details_finalamount`=$total,order_details_status='$status',order_details_no='$start'
 
 Where govt_user_id='$govt_user_id' and order_details_status='cartinsert' and order_details_date='$govt_bill_date' ";

$result = mysqli_query($conn,$sql);



/*$sql1="update `order_details` set `order_details_status`='$status' where govt_user_id='$govt_user_id'";

$result1=mysqli_query($conn,$sql1);*/

$sql2="insert into `bill_details`(`govt_user_id`,`bill_details_price`,`bill_details_status`,`bill_details_date`,`bill_details_no`,`order_delivery_status`) values('$govt_user_id','$total','$status1','$govt_bill_date','$start','$status1')";

$result2=mysqli_query($conn,$sql2);

if(! $result && $result1 && $result2 )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("order not placed");
	window.location="cart.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("order placed successfully");
	window.location="cart.php";
	</script>';
}

//header('location:admin_view.php');

?>