<?php

require("db_connect.php");

$delivery_details_id=$_POST['delivery_details_id'];
$employee_id=$_POST['employee_id'];
$delivery_date=$_POST['delivery_date'];
$govt_user_id=$_POST['govt_user_id'];
$labour_cost=$_POST['labour_cost'];

$sql = 'UPDATE `delivery_details` SET 
 `delivery_details_id`='."'$delivery_details_id'".',
 `employee_id`='."'$employee_id'".',
 `delivery_date`='."'$delivery_date'".',
 `govt_user_id`='."'$govt_user_id'".',
 `labour_cost`='."'$labour_cost'".'
 Where delivery_details_id="'.$delivery_details_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Updated");
	window.location="delivery_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Updated Successfully");
	window.location="delivery_details_view.php";
	</script>';
}

//header('location:delivery_details_view.php');

?>