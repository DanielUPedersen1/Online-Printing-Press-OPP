<?php

require("db_connect.php");


$product_category_id=$_REQUEST['id'];

$sql = 'DELETE FROM `product_category` Where product_category_id="'.$product_category_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="product_category_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="product_category_view.php";
	</script>';
}

//header('location:product_category_view.php');

?>