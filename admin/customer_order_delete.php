<?php

require("db_connect.php");


$customer_order_id=$_REQUEST['id'];

$sql = 'DELETE FROM `customer_order` Where customer_order_id="'.$customer_order_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="customer_order_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="customer_order_view.php";
	</script>';
}

//header('location:customer_order_view.php');

?>