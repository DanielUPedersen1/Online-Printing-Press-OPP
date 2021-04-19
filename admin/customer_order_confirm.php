<?php 
require('db_connect.php'); 
$customer_details_id=$_REQUEST['id'];

$status="Confirmed";
$status1="";

$sql="update customer_order set customer_order_status='$status' where customer_details_id='$customer_details_id'";

$res=mysqli_query($conn,$sql);

$sql1="update customer_details set customer_details_status='$status' where customer_details_id='$customer_details_id'"; 

$res1=mysqli_query($conn,$sql1);

if(! $res && $res1)
{
	//die('Could not enter data: ' .mysqli_error()); 
	echo '<script type="text/javascript">
	alert("confirmation unsucessful");
	window.location="customer_order_view.php";
	</script>';
}

else
{
    echo '<script type="text/javascript">
	alert("confirmation sucessful");
	window.location="customer_order_view.php";
	</script>';
    
}


?>