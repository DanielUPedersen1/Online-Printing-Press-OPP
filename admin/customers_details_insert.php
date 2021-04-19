<?php

require("db_connect.php");

$customer_details_id=$_POST['customer_details_id'];
$customer_details_name=$_POST['customer_details_name'];
$customer_details_contact=$_POST['customer_details_contact'];
$customer_details_address=$_POST['customer_details_address'];
$customer_details_email=$_POST['customer_details_email'];
$customer_details_username=$_POST['customer_details_username'];
$customer_details_password=$_POST['customer_details_password'];



$sql = "INSERT INTO `customer_details` (`customer_details_id`,`customer_details_name`,`customer_details_contact`,`customer_details_address`,`customer_details_email`,`customer_details_username`,`customer_details_password`) VALUES ('$customer_details_id','$customer_details_name','$customer_details_contact','$customer_details_address','$customer_details_email','$customer_details_username','$customer_details_password')";

$result = mysqli_query($conn,$sql);

if(! $result)
{
	//die('Could not enter data: ' .mysqli_error()); 
	echo '<script type="text/javascript">
	 <alert("Record Not Added");
	//window.location="customer_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Added Successfully");
	window.location="customer_details_view.php";
	</script>';
}
//header('location:index.php');

?>