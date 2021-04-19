<?php

require("db_connect.php");

$order_details_id=$_POST['order_details_id'];
$product_details_id=$_POST['product_details_id'];
$govt_user_id=$_POST['govt_user_id'];
$order_details_quantity=$_POST['order_details_quantity'];
$order_details_quality=$_POST['order_details_quality'];
$order_details_price=$_POST['order_details_price'];
$order_details_total=$_POST['order_details_total'];
$order_details_sgst=$_POST['order_details_sgst'];
$order_details_cgst=$_POST['order_details_cgst'];
$order_details_finalamount=$_POST['order_details_finalamount'];
$order_details_reqdate=$_POST['order_details_reqdate'];
$order_details_date=$_POST['order_details_date'];
$order_details_status=$_POST['order_details_status'];

$sql = 'UPDATE `order_details` SET 
 `order_details_id`='."'$order_details_id'".',
 `product_details_id`='."'$product_details_id'".',
 `govt_user_id`='."'$govt_user_id'".',
 `order_details_quantity`='."'$order_details_quantity'".',
 `order_details_quality`='."'$order_details_quality'".',
 `order_details_price`='."'$order_details_price'".',
 `order_details_total`='."'$order_details_total'".',
 `order_details_sgst`='."'$order_details_sgst'".',
 `order_details_cgst`='."'$order_details_cgst'".',
 `order_details_finalamount`='."'$order_details_finalamount'".',
 `order_details_reqdate`='."'$order_details_reqdate'".',
 `order_details_date`='."'$order_details_date'".',
 `order_details_status`='."'$order_details_status'".'
 Where order_details_id="'.$order_details_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Updated");
	window.location="order_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Updated Successfully");
	window.location="order_details_view.php";
	</script>';
}

//header('location:order_details_view.php');

?>