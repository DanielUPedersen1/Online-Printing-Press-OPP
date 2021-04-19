<?php

require("db_connect.php");

$customer_details_id=$_POST['customer_details_id'];
$customer_details_name=$_POST['customer_details_name'];
$customer_details_contact=$_POST['customer_details_contact'];
$customer_details_address=$_POST['customer_details_address'];
$customer_details_email=$_POST['customer_details_email'];

$customer_details_status="pending";

$sql = 'UPDATE `customer_details` SET 
 `customer_details_name`='."'$customer_details_name'".',
 `customer_details_contact`='."'$customer_details_contact'".',
 `customer_details_address`='."'$customer_details_address'".',
 `customer_details_email`='."'$customer_details_email'".',
 `customer_details_status`='."'$customer_details_status'".'
 
 Where customer_details_id="'.$customer_details_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Updated");
	window.location="profile.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Updated Successfully");
	window.location="profile.php";
	</script>';
}

//header('location:customer_details_view.php');

?>