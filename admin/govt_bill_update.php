<?php
require('db_connect.php');

$govt_bill_id=$_REQUEST['id'];

$order_details_status=$_REQUEST['status'];

$bill_details_no=$_REQUEST['o'];

if($order_details_status=='Pending')
{
    echo '<script type="text/javascript">
	alert("Please first do delivery before changing bill status");
	window.location="order_details_view.php";
	</script>';
}
else
{
$sql="update `bill_details` set `bill_details_status`='Confirmed' where bill_details_id='$govt_bill_id' and bill_details_no='$bill_details_no' ";

$res=mysqli_query($conn,$sql);

if($res)
{
    echo '<script type="text/javascript">
	alert("Updated Successfully");
	window.location="order_details_view.php";
	</script>';
}
}

?>





