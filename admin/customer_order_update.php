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

$sql = 'UPDATE `customer_order` SET 
 `customer_order_id`='."'$customer_order_id'".',
 `product_details_id`='."'$product_details_id'".',
 `customer_details_id`='."'$customer_details_id'".',
 `customer_order_quantity`='."'$customer_order_quantity'".',
 `customer_order_price`='."'$customer_order_price'".',
 `customer_order_total`='."'$customer_order_total'".',
 `customer_order_sgst`='."'$customer_order_sgst'".',
 `customer_order_cgst`='."'$customer_order_cgst'".',
 `customer_order_finalamount`='."'$customer_order_finalamount'".',
 `customer_order_date`='."'$customer_order_date'".',
 `customer_order_status`='."'$customer_order_status'".'
 Where customer_order_id="'.$customer_order_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Updated");
	window.location="customer_order_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Updated Successfully");
	window.location="customer_order_view.php";
	</script>';
}

//header('location:customer_order_view.php');

?>