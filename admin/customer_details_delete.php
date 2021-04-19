<?php

require("db_connect.php");


$customer_details_id=$_REQUEST['id'];
$customer_username=$_REQUEST['username'];

$sql = 'DELETE FROM `customer_details` Where customer_details_id="'.$customer_details_id.'"';

$result = mysqli_query($conn,$sql);

$sql1="delete from login where login_type='customer' and login_username='$customer_username'";

$result1=mysqli_query($conn,$sql1);


if(! $result && $result1)
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="customer_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="customer_details_view.php";
	</script>';
}

//header('location:customer_details_view.php');

?>