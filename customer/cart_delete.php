<?php
 require('db_connect.php');

$customer_order_id=$_REQUEST['id'];

$sql = 'DELETE FROM `customer_order` Where customer_order_id="'.$customer_order_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert(" Not Removed");
	window.location="cart.php";
	</script>';
    //header('location:cart.php');
}
else 
{
	echo '<script type="text/javascript">
	alert("Removed successfully");
	window.location="cart.php";
	</script>';
    //header('location:cart.php');
}

?>