<?php

require("db_connect.php");

//$product_category_id=$_POST['product_category_id'];
$product_category_name=$_POST['product_category_name'];
$product_category_description=$_POST['product_category_description'];


$sql = "INSERT INTO `product_category` (`product_category_name`,`product_category_description`) VALUES ('$product_category_name','$product_category_description')";

$result = mysqli_query($conn,$sql);

if(! $result)
{
	//die('Could not enter data: ' .mysqli_error()); 
	echo '<script type="text/javascript">
	alert("Record Not Added");
	window.location="product_category_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Added Successfully");
	window.location="product_category_view.php";
	</script>';
}
//header('location:index.php');

?>