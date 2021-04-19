<?php

require("db_connect.php");


$delivery_details_id=$_REQUEST['id'];

$sql = 'DELETE FROM `delivery_details` Where delivery_details_id="'.$delivery_details_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="delivery_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="delivery_details_view.php";
	</script>';
}

//header('location:delivery_details_view.php');

?>