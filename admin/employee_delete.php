<?php

require("db_connect.php");


$employee_id=$_REQUEST['id'];

$sql = 'DELETE FROM `employee` Where employee_id="'.$employee_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="employee_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="employee_view.php";
	</script>';
}

//header('location:employee_view.php');

?>