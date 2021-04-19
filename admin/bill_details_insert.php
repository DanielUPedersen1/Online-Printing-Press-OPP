<?php

require("db_connect.php");

//$bill_details_id=$_POST['bill_details_id'];
$govt_user_id=$_POST['govt_user_id'];
$bill_details_price=$_POST['bill_details_price'];
$product_details_id=$_POST['product_details_id'];
$bill_details_date=$_POST['bill_details_date'];


$sql = "INSERT INTO `bill_details` (`govt_user_id`,`bill_details_price`,`product_details_id`,`bill_details_date`) VALUES ('$govt_user_id','$bill_details_price','$product_details_id','$bill_details_date')";

$result = mysqli_query($conn,$sql);

if(! $result)
{
	//die('Could not enter data: ' .mysqli_error()); 
	echo '<script type="text/javascript">
	alert("Record Not Added");
	window.location="bill_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Added Successfully");
	window.location="bill_details_view.php";
	</script>';
}
//header('location:index.php');

?>