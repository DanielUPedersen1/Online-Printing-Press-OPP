<?php

require("db_connect.php");

$bill_details_id=$_POST['bill_details_id'];
$govt_user_id=$_POST['govt_user_id'];
$bill_details_price=$_POST['bill_details_price'];
$product_details_id=$_POST['product_details_id'];
$bill_details_date=$_POST['bill_details_date'];

$sql = 'UPDATE `bill_details` SET 
 `bill_details_id`='."'$bill_details_id'".',
 `govt_user_id`='."'$govt_user_id'".',
 `bill_details_price`='."'$bill_details_price'".',
 `product_details_id`='."'$product_details_id'".',
 `bill_details_date`='."'$bill_details_date'".'
 Where bill_details_id="'.$bill_details_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Updated");
	window.location="bill_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Updated Successfully");
	window.location="bill_details_view.php";
	</script>';
}

//header('location:bill_details_view.php');

?>