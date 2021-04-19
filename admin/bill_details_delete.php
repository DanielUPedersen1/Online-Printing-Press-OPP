<?php

require("db_connect.php");


$bill_details_id=$_REQUEST['id'];

$sql = 'DELETE FROM `bill_details` Where bill_details_id="'.$bill_details_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="bill_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="bill_details_view.php";
	</script>';
}

//header('location:bill_details_view.php');

?>