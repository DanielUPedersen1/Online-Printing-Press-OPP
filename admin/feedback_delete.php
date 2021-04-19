<?php

require("db_connect.php");


$feedback_id=$_REQUEST['id'];

$sql = 'DELETE FROM `feedback` Where feedback_id="'.$feedback_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="feedback_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="feedback_view.php";
	</script>';
}

//header('location:feedback_view.php');

?>