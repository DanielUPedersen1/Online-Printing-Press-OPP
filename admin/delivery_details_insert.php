<?php

require("db_connect.php");

//$delivery_details_id=$_POST['delivery_details_id'];
$employee_id=$_POST['employee_id'];
$bill_details_id=$_POST['bill_details_id'];
$govt_user_id=$_POST['govt_user_id'];
$delivery_date=$_POST['delivery_date'];
$labour_cost=$_POST['labour_cost'];

//$order_details_id=$_POST['order_details_id'];
$status="Delivered";

//$sql2="select * from govt_user gu,employee e where gu.govt_user_id='$govt_user_id' and e.employee_id='$employee_id'";

//$ress=mysqli_query($conn,$sql2);

//$row=mysqli_fetch_array($ress);

//$employee_fullname=$row['employee_fullname'];

//$govt_user_name=$row['govt_user_name'];

$sql = "INSERT INTO `delivery_details` (`employee_id`,`delivery_date`,`govt_user_id`,`labour_cost`) VALUES ('$employee_id','$delivery_date','$govt_user_id','$labour_cost')";

$result = mysqli_query($conn,$sql);

$sql1="update `bill_details` set `order_delivery_status`='$status' where bill_details_id='$bill_details_id' ";

$res1=mysqli_query($conn,$sql1);

if(! $result && $res)
{
	//die('Could not enter data: ' .mysqli_error()); 
	echo '<script type="text/javascript">
	alert("Record Not Added");
	window.location="delivery_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Added Successfully");
	window.location="delivery_details_view.php";
	</script>';
}
//header('location:index.php');

?>