<?php

require("db_connect.php");

$customer_order_id=$_POST['customer_order_id'];
$product_details_id=$_POST['product_details_id'];
$customer_details_id=$_POST['customer_details_id'];
$customer_order_quantity=$_POST['customer_order_quantity'];
$customer_order_price=$_POST['customer_order_price'];
$customer_order_total=$_POST['customer_order_total'];
$customer_order_sgst=$_POST['customer_order_sgst'];
$customer_order_cgst=$_POST['customer_order_cgst'];
$customer_order_finalamount=$_POST['customer_order_finalamount'];
$customer_order_date=$_POST['customer_order_date'];
$customer_order_status=$_POST['customer_order_status'];


$sql = "INSERT INTO `customer_order` (`customer_order_id`,`product_details_id`,`customer_details_id`,`customer_order_quantity`,`customer_order_price`,`customer_order_total`,`customer_order_sgst`,`customer_order_cgst`,`customer_order_finalamount`,`customer_order_date`,`customer_order_status`) VALUES ('$customer_order_id','$product_details_id','$customer_details_id','$customer_order_quantity','$customer_order_price','$customer_order_total','$customer_order_sgst','$customer_order_cgst','$customer_order_finalamount','$customer_order_date','$customer_order_status')";

$result = mysqli_query($conn,$sql);

if(! $result)
{
	//die('Could not enter data: ' .mysqli_error()); 
	echo '<script type="text/javascript">
	alert("Record Not Added");
	window.location="customer_order_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Added Successfully");
	window.location="customer_order_view.php";
	</script>';
}
//header('location:index.php');

?>