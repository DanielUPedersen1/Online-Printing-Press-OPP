<?php

require("db_connect.php");


$product_details_id=$_REQUEST['id'];

$sql = 'DELETE FROM `product_details` Where product_details_id="'.$product_details_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="product_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="product_details_view.php";
	</script>';
}

//header('location:product_details_view.php');

?>