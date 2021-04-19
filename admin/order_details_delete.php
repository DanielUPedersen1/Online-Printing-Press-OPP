<?php

require("db_connect.php");


$order_details_id=$_REQUEST['id'];

$sql = 'DELETE FROM `order_details` Where order_details_id="'.$order_details_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="order_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="order_details_view.php";
	</script>';
}

//header('location:order_details_view.php');

?>