<?php

require("db_connect.php");


$form_details_id=$_REQUEST['id'];

$sql = 'DELETE FROM `form_details` Where form_details_id="'.$form_details_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="form_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="form_details_view.php";
	</script>';
}

//header('location:form_details_view.php');

?>