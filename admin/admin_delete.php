<?php

require("db_connect.php");


$admin_id=$_REQUEST['id'];

$sql = 'DELETE FROM `admin` Where admin_id="'.$admin_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="admin_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="admin_view.php";
	</script>';
}

//header('location:admin_view.php');

?>