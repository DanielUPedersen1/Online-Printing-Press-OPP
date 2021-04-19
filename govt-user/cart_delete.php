<?php
 require('db_connect.php');

$order_details_id=$_REQUEST['id'];

$sql = 'DELETE FROM `order_details` Where order_details_id="'.$order_details_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	/*echo '<script type="text/javascript">
	alert(" Not Removed");
	window.location="cart.php";
	</script>';*/
    header('location:cart.php');
}
else 
{
	/*echo '<script type="text/javascript">
	alert("Removed successfully");
	window.location="cart.php";
	</script>';*/
    header('location:cart.php');
}

?>