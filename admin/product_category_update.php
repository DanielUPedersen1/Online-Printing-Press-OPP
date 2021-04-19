<?php

require("db_connect.php");

$product_category_id=$_POST['product_category_id'];
$product_category_name=$_POST['product_category_name'];
$product_category_description=$_POST['product_category_description'];

$sql = 'UPDATE `product_category` SET 
 `product_category_id`='."'$product_category_id'".',
 `product_category_name`='."'$product_category_name'".',
 `product_category_description`='."'$product_category_description'".'
 Where product_category_id="'.$product_category_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Updated");
	window.location="product_category_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Updated Successfully");
	window.location="product_category_view.php";
	</script>';
}

//header('location:product_category_view.php');

?>